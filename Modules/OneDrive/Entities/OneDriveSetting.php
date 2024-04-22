<?php

namespace Modules\OneDrive\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use GuzzleHttp\Client;
use Nwidart\Modules\Facades\Module;
use App\Models\Setting;

class OneDriveSetting extends Model
{
    use HasFactory;

    protected $table = 'onedrive_settings';

    protected $fillable = [
        'module',
        'status',
        'workspace_id',
        'type',
        'value',
        'name',
    ];
    

    protected static function newFactory()
    {
        return \Modules\OneDrive\Database\factories\OneDriveSettingFactory::new();
    }

    // Upload the file 
    public static function saveSettings($post)
    {

        try {

            $getActiveWorkSpace = getActiveWorkSpace();
            $creatorId = creatorId();

            foreach ($post as $key => $value) {
                // Define the data to be updated or inserted
                $data = [
                    'key' => $key,
                    'workspace' => $getActiveWorkSpace,
                    'created_by' => $creatorId,
                ];

                // Check if the record exists, and update or insert accordingly
                Setting::updateOrInsert($data, ['value' => $value]);
            }
            // Settings Cache forget
            comapnySettingCacheForget();

            return true;

        } catch (\Exception $e) {
            return false;
        }    
    } 

    //Get All modules from DB has file upload
    public static function get_modules()
    {
        $settings_modules = OneDriveSetting::get();

        // $data = [];
        // foreach($settings_modules as $key => $module){

        //     $sub_modules = OneDriveSetting::where('module',$module->module)->pluck('name');
        //     $data[$module->module]  = $sub_modules;
        // }

        // Group the settings by the 'module' column
        $groupedSettings = $settings_modules->groupBy('module');

        $data = [];

        // Iterate through each module and extract sub-modules
        foreach ($groupedSettings as $module => $subModules) {
            $data[$module] = $subModules->pluck('name')->toArray();
        }
        
        return $data ;
    }


    // Get parent Module
    public static function parent_module($module='')
    {
        $drive_module = OneDriveSetting::where('name',$module)->first();
        return $drive_module->module;
    }


    // Check if folder is assigned to the sub module
    public static function is_folder_assigned($module = '' , $record_id = '')
    {
        static $modules= null;
        if($modules == null)
        {
            $modules = OneDriveSetting::where('workspace_id' , getActiveWorkSpace())->get();
        }

        foreach ($modules as $row) {
            $data[$row->name] = $row->value;
        }

        if(isset($data[$module]) || !empty($data[$module]) )
        {
            $folder = json_decode($data[$module]);

            if (!isset($folder[0]->$module) || empty($folder[0]->$module)) {

                return false;

            }else{

                return true;
            }
        }else{

            return false;

        }
    }

    // Get assigned folder Id form sub module
    public static function getFolderIdByName($module = '' , $record_id = '')
    {
        $modules = OneDriveSetting::where('name',$module)->where('workspace_id' , getActiveWorkSpace())->first();

        if(isset($modules->value) && !empty($modules->value) && $modules->value != '')
        {
            $folder = json_decode($modules->value);

            if (!isset($folder[0]->$module) || empty($folder[0]->$module)) {

                return '';
            }else{

                return $folder[0]->$module;
            }
        }else{

            return '';
        }
    }


    public static function assign_folder_to_module($module = '' , $folder_id , $record_id = '')
    {
        $datas[$module]= $folder_id;
        $data[] = $datas;
        $data = json_encode($data);

        OneDriveSetting::updateOrCreate(['name' =>  $module ,'workspace_id' => getActiveWorkSpace()],['value' => $data ,'module' => OneDriveSetting::parent_module($module)]);
    }


    //get views data via submodule name
    public static function get_view_to_stack_hook()
    {

        $views = [
            'Account'            => 'sales::salesaccount.index',
            'Accounts'           => 'account::bankAccount.index',
            'Assets'             => 'assets::index',
            'Bill'               => 'account::bill.index',
            'Bug'                => 'taskly::projects.bug_report',
            'Cases'              => 'sales::commoncase.index',
            'Contracts'          => 'contract::contracts.index',
            'Customer'           => 'account::customer.index',
            'Deal'               => 'lead::deals.index',
            'Document'           => 'hrm::document.index',
            'Documents'          => 'aidocument::document.index',
            'Employee'           => 'hrm::employee.index',
            'Event'              => 'hrm::event.index',
            // 'Generated Image'    => 'aiimage::image.index',
            'Interview Schedule' => 'recruitment::interviewSchedule.index',
            'Invoice'            => 'invoice.index',
            'Job Application'    => 'recruitment::jobApplication.index',
            'Jobs'               => 'recruitment::job.index',
            'Knowledge'          => 'supportticket::knowledge.index',
            'Lead'               => 'lead::leads.index',
            'Leave'              => 'hrm::leave.index',
            'Meeting'            => 'sales::meeting.index',
            'Notes'              => 'notes::index',
            'Opportunities'      => 'sales::opportunities.index',
            'Payslip'            => 'hrm::payslip.index',
            'POS Order'          => 'pos::pos.report',
            'Products'           => 'productservice::index',
            'Projects'           => 'taskly::projects.show',
            'Proposal '          => 'proposal.index',
            'Purchase'           => 'pos::purchase.index',
            'Retainers'          => 'retainer::retainer.index',
            'Revenue'            => 'account::revenue.index',
            'Sales Document'     => 'sales::document.index',
            'Sales Invoice'      => 'sales::salesinvoice.index',
            'Task'               => 'taskly::projects.taskboard',
            'Tickets'            => 'supportticket::ticket.index',
            'Transaction'        => 'account::transaction.index',
            'Vender'             => 'account::vendor.index',
            'Warehouse'          => 'pos::warehouse.index',
        ];

        return $views;
    }

    
    public static function connect($code='')
    {
        $company_settings           = getCompanyAllSetting();
        $onedrive_client_id         = isset($company_settings['onedrive_client_id']) ? $company_settings['onedrive_client_id'] : '';
        $onedrive_client_secret     = isset($company_settings['onedrive_client_secret']) ? $company_settings['onedrive_client_secret'] : '';

        if($code !== ''){

            try {
                $client = new Client();

                // Define the request parameters
                $params = [
                    'form_params' => [
                        'client_id' => $onedrive_client_id,
                        'redirect_uri' => url('onedrive/oauth'),
                        'client_secret' => $onedrive_client_secret,
                        'code' => $code,
                        'grant_type' => 'authorization_code',
                    ],
                    'headers' => [
                        'Content-Type' => 'application/x-www-form-urlencoded',
                    ],
                ];

                $response = $client->post('https://login.live.com/oauth20_token.srf', $params);

                $token = (object) json_decode($response->getBody()->getContents(), true);
                OneDriveSetting::storeToken($token->access_token, $token->refresh_token, $token->expires_in , $token);

            } catch (\Exception $e) {
                return false;
            }

        }else{
            try {
                $auth_url = 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id='.$onedrive_client_id.'&scope=https://graph.microsoft.com/.default offline_access&response_type=code&redirect_uri='.url('onedrive/oauth');

                // Set up authentication and obtain an access token
                OneDriveSetting::redirect($auth_url);
            } catch (\Exception $e) {
                return false;
            }
        }    
    }


    public static function storeToken($access_token, $refresh_token, $expires, $token=''): void
    {

        $post['onedrive_tokens_data']   = json_encode($token);
        $post['onedrive_access_token']  = $access_token ;
        $post['onedrive_refresh_token'] = $refresh_token ;
        $post['onedrive_expires']       = $expires ;

        OneDriveSetting::saveSettings($post);
    }


    public static function GetFiles($folderId='')
    {

        $client = new Client();

        // Define the request parameters to fetch files from OneDrive
        $accessToken = OneDriveSetting::getAccessToken(); // Replace with the actual access token you obtained
        
        $graphApiUrl = 'https://graph.microsoft.com/v1.0/me/drive/root/children'; // URL to fetch files
        $headers = [
            'Authorization' => 'Bearer ' . $accessToken,
        ];
        
        // Make the GET request to Microsoft Graph API
        $response = $client->get($graphApiUrl, ['headers' => $headers]);
        
        // Parse the response JSON to get the list of files
        $files = json_decode($response->getBody(), true)['value'];
        
        return $files;
    }

    public static function GetModuleFiles($folderId='')
    {

        $client = new Client();

        // Define the request parameters to fetch files from OneDrive
        $accessToken = OneDriveSetting::getAccessToken(); // Replace with the actual access token you obtained
        $graphApiUrl = 'https://graph.microsoft.com/v1.0/me/drive/items/'.$folderId.'/children?$expand=thumbnails'; // URL to fetch files

        $headers = [
            'Authorization' => 'Bearer ' . $accessToken,
        ];
        // Make the GET request to Microsoft Graph API
        $response = $client->get($graphApiUrl, [
                'headers' => $headers
            ]);
        
        // Parse the response JSON to get the list of files
        $files = json_decode($response->getBody(), true)['value'];

        return $files;
    }

    // get Parent folder of the Google Drive by module
    public static function getParentFolderId($folderId)
    {
        try
        {
        $client = new Client();

        // Define the request parameters to fetch files from OneDrive
        $accessToken = OneDriveSetting::getAccessToken(); // Replace with the actual access token you obtained
        
        $graphApiUrl = 'https://graph.microsoft.com/v1.0/me/drive/items/'.$folderId; // URL to fetch files
        $headers = [
            'Authorization' => 'Bearer ' . $accessToken,
        ];
        
        // Make the GET request to Microsoft Graph API
        $response = $client->get($graphApiUrl, ['headers' => $headers]);
        
        // Parse the response JSON to get the list of files
        $files = json_decode($response->getBody(), true);

        return $files['parentReference']['id'];
        }
        catch (\Exception $e)
        {
            return false;
        }

    }


    public static function getAccessToken()
    {
        // $token = BoxToken::where('user_id', auth()->id())->first();
        $access_token = company_setting('onedrive_access_token');

        // Check if tokens exist otherwise run the oauth request
        if (! isset($access_token)) {
            return OneDriveSetting::connect();
        }

        //process token
        return OneDriveSetting::getToken($access_token);
    }


    protected static function getToken($token=''): string
    {

        $company_settings           = getCompanyAllSetting();
        $onedrive_expires           = isset($company_settings['onedrive_expires']) ? $company_settings['onedrive_expires'] : '';
        $onedrive_client_id         = isset($company_settings['onedrive_client_id']) ? $company_settings['onedrive_client_id'] : '';
        $onedrive_client_secret     = isset($company_settings['onedrive_client_secret']) ? $company_settings['onedrive_client_secret'] : '';
        $onedrive_refresh_token     = isset($company_settings['onedrive_refresh_token']) ? $company_settings['onedrive_refresh_token'] : '';


        $client = new Client();

        // Check if token is expired
        // Get current time + 5 minutes (to allow for time differences)
        $now = time() + 300;
        if ($onedrive_expires <= $now) {
            // Token is expired (or very close to it) so let's refresh

            $params = [
                'form_params' => [
                    'client_id' => $onedrive_client_id,
                    'client_secret' => $onedrive_client_secret,
                    'refresh_token' => $onedrive_refresh_token, // Replace with your actual refresh token
                    'grant_type' => 'refresh_token',
                ],
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
            ];

            $response = $client->post('https://login.microsoftonline.com/common/oauth2/v2.0/token', $params);
            $token = (object) json_decode($response->getBody()->getContents());

            // Store the new values
            OneDriveSetting::storeToken($token->access_token, $token->refresh_token, $token->expires_in , $token);

            return $token->access_token;
        } 
        
        // Token is still valid, just return it
        return $token;
    }


    public static function redirect($url): void
    {
        header('Location: '.$url);
        exit();
    }

    
    public static function GetFolderWebUrl($folderId)
    {

        $client = new Client();

        // Define the access token
        $accessToken = OneDriveSetting::getAccessToken(); // Replace with your access token

        // Construct the URL to create a sharing link for the folder
        $createLinkUrl = "https://graph.microsoft.com/v1.0/me/drive/items/$folderId/createLink";

        // Define the request headers with the access token
        $headers = [
            'Authorization' => 'Bearer ' . $accessToken,
            'Content-Type' => 'application/json',
        ];

        // Define the request body with the link type ("view" or "edit")
        $linkType = 'edit'; // You can also use "edit" if needed
        $requestBody = json_encode(['type' => $linkType]);

        // Make a POST request to create the sharing link
        $response = $client->post($createLinkUrl, ['headers' => $headers, 'body' => $requestBody]);

        // Parse the response JSON to get the embed link
        $responseData = json_decode($response->getBody(), true);
        $embedLink = $responseData['link']['webUrl'];
        
        return $embedLink;
    }

    // Upload the file 
    public static function upload_file($filename, $folderId ,$filePath='',$mimetype='')
    {
        $accessToken = OneDriveSetting::getAccessToken();

        // Create an upload session
        $createSessionUrl = "https://graph.microsoft.com/v1.0/me/drive/items/$folderId:/$filename:/createUploadSession";
        $client = new Client();
        $response = $client->post($createSessionUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $uploadUrl = $data['uploadUrl'];

        // Upload the image file
        $fileData = file_get_contents($filePath);
        $response = $client->put($uploadUrl, [
            'body' => $fileData,
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Length' => strlen($fileData),
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);
    }


    // Get Mimetype of the file 
    public static function getMimetype($type='')
    {
        $mimeTypesToConvert = [
            'application/msword' => 'application/vnd.google-apps.document', // Word Document (DOC)
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'application/vnd.google-apps.document', // Word Document (DOCX)
            'application/vnd.ms-excel' => 'application/vnd.google-apps.spreadsheet', // Excel Spreadsheet (XLS)
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'application/vnd.google-apps.spreadsheet', // Excel Spreadsheet (XLSX)
            'application/vnd.ms-powerpoint' => 'application/vnd.google-apps.presentation', // PowerPoint Presentation (PPT)
            'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'application/vnd.google-apps.presentation', // PowerPoint Presentation (PPTX)
            'text/plain' => 'application/vnd.google-apps.document', // Plain Text
            'text/csv' => 'application/vnd.google-apps.spreadsheet', // CSV File
            // 'image/jpeg' => 'application/vnd.google-apps.photo', // JPEG Image
            // 'image/png' => 'application/vnd.google-apps.photo', // PNG Image
            'application/pdf' => 'application/vnd.google-apps.document', // PDF Document
            // 'application/zip' => 'application/vnd.google-apps.document', // ZIP Archive
            // Add more mappings as needed
        ];


        $desiredMimeType = 'application/msword'; // Replace with the desired MIME type you want to look up
        if(array_key_exists($desiredMimeType, $mimeTypesToConvert))
        {
            return $mimeTypesToConvert[$desiredMimeType];
        }else{
            return $type;
        }

    }

}
