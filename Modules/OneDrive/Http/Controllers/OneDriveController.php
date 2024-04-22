<?php

namespace Modules\OneDrive\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\OneDrive\Entities\OneDriveSetting;
use Nwidart\Modules\Facades\Module;
use Rawilk\Settings\Settings;
use Rawilk\Settings\Support\Context;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Carbon\Carbon;

class OneDriveController extends Controller
{

    public function index(Request $request , $module , $folderId = '')
    {
        $company_settings   =    getCompanyAllSetting();

        if (
            !isset($company_settings['onedrive_tokens_data']) || 
            !isset($company_settings['onedrive_refresh_token']) || 
            $company_settings['onedrive_tokens_data'] == '' || 
            $company_settings['onedrive_refresh_token'] == '' || 
            !isset($company_settings['onedrive_client_id']) || 
            $company_settings['onedrive_client_id'] == '' || 
            !isset($company_settings['onedrive_client_secret']) || 
            $company_settings['onedrive_client_secret'] == ''
        ) {
            return redirect()->route('settings.index')->with('error', 'Please complete the synchronization process.');
        }

        session()->put($module, \URL::previous());

        if(\Auth::user()->isAbleTo('onedrive manage')) { 
            if(company_setting($module.'_onedrive')) {
                
                try {
                    $onedrive_files = '';    
                    $parent_folder_id = '';
                    if(OneDriveSetting::is_folder_assigned($module)){
                        $folderId           = OneDriveSetting::getFolderIdByName($module);
                        $onedrive_files = OneDriveSetting::GetModuleFiles($folderId);
                    }
                    return view('onedrive::index',compact('module','folderId','onedrive_files','parent_folder_id'));

                } catch (\Exception $e) {
                    return redirect()->back()->with('error', __('Something Went Wrong!'));
                }
                return redirect()->back()->with('error', __('Permission Denied!'));

            } else {

                return redirect()->back()->with('error', __('Permission Denied!'));
            }
        }
    }

    public function getmodulefiles(Request $request , $module , $folderId='root', $view='')
    {
        if(\Auth::user()->isAbleTo('onedrive manage')){
            if(company_setting($module.'_onedrive')){

                try{
                    if(OneDriveSetting::is_folder_assigned())
                    {
                        return redirect()->route('onedrive.index',$module);
                    }

                    $parent_folder_id = OneDriveSetting::getParentFolderId($folderId);
                    $onedrive_files = OneDriveSetting::GetModuleFiles($folderId);


                    if(!empty($view) && $view == 'grid'){
                        
                        return view('onedrive::grid', compact('module','folderId','parent_folder_id','onedrive_files'));
                    
                    }else{

                        return view('onedrive::index',compact('module','folderId','parent_folder_id','onedrive_files'));
                    }

                }
                catch (\Exception $e)
                {
                    return false;
                }
            }
            return redirect()->back()->with('error',__('permission Denied!'));

        }else{

            return redirect()->back()->with('error',__('permission Denied!'));
        }
            
    }


    // public function AuthenticateWithOneDrive()
    // {
    //     // session()->put('onedrive_from_auth_module' ,\URL::previous());

    //     \Cookie::queue('onedrive_from_auth_module', \URL::previous(), 10);
    //     OneDriveSetting::connect();
    // }


    // // Authenticate with box callback functon
    // public function AuthenticateWithOneDriveCallback(Request $request)
    // {
    //     try {

    //         if(request()->has('code'))
    //         {
    //             OneDriveSetting::connect($request->code);

    //         }

    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', __('Something Went Wrong!'));
    //     }
    // }


    // Store sub module settings
    public function OneDriveSettingsStore(Request $request)
    {
        $post['onedrive_client_id']        = $request->onedrive_client_id;
        $post['onedrive_client_secret']    = $request->onedrive_client_secret;

        if($request->has('onedrive'))
        {
            foreach($request->onedrive as $key => $value)
            {
                $post[$key]          = $value;
            }
        }

        $check = OneDriveSetting::saveSettings($post);
        if($check){
            return redirect()->back()->with('success','OneDrive Setting saved sucessfully.');
        }else{
            return redirect()->back()->with('error','Something Went Wrong!');
        }
    }


    // Assign folder to the sub module
    public function assign_folder($module='')
    {
        $parent_module = OneDriveSetting::parent_module($module);
        $onedrive_modules = OneDriveSetting::where('module',$parent_module)->get();
        $onedrive_files = OneDriveSetting::GetFiles();

        return view('onedrive::folders.assign_folder',compact('onedrive_modules','onedrive_files','module'));
    }

    // Assign folder to the sub module
    public function assign_folder_store(Request $request , $module='')
    {
        OneDriveSetting::assign_folder_to_module($module , $request->parent_id);
        return redirect()->route('onedrive.index',[$module,$request->parent_id]);
    }


    public function uploadfiles_create($module)
    {
        $folder_id = OneDriveSetting::getFolderIdByName($module);
        return view('onedrive::folders.addfiles',compact('module','folder_id'));
    }

    public function uploadfiles_store(Request $request, $module)
    {
        if($request->hasFile('file')) 
        {
            $file = $request->file('file');
            $filePath = $file->getPathname();
            $filename = $request->file('file')->getClientOriginalName();
            $FolderId = OneDriveSetting::getFolderIdByName($module);
            $mimetype = mime_content_type($filePath);
            $fileData = file_get_contents($filePath);

            // $path = upload_file($request,'file',$filename,'users-avatar');

            $x = OneDriveSetting::upload_file($filename ,$FolderId, ($filePath) ,$fileData);
            
            // delete_file($path['url']);

            return $res = [
                'flag' => 1,
                'msg'  =>'File Uploaded Successfully',
            ];

        } else {

            return $res = [
                'flag' => 2,
                'msg'  =>'Something went wrong!',
            ];
        }    
    }

    public function deleteFile($fileId)
    {

        $accessToken = OneDriveSetting::getAccessToken();

        // Create the API endpoint URL for deleting the file
        $deleteFileUrl = "https://graph.microsoft.com/v1.0/me/drive/items/$fileId";

        $client = new Client();

        // Send a DELETE request to delete the file
        $response = $client->delete($deleteFileUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);


        return redirect()->back()->with('success',__('File Deleted Successfully!'));
    }
    
}
