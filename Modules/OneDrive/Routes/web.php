<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
use Modules\OneDrive\Http\Controllers\OneDriveController;

Route::group(['middleware' => 'PlanModuleCheck:OneDrive'], function ()
{
    // Auth
    Route::get('/onedrive/autherize', function(Request $request)
    {
        $status =  OneDriveSetting::connect();

        if(!$status){
            echo '<script>
                    window.close();
                    // Access the main window using window.opener
                    var mainWindow = window.opener;
                    // Show Toastr success message
                    mainWindow.toastrs("Error", "Something Went Wrong.", "error");
                    mainWindow.location.reload();
                </script>';
        }else{
            return $status;
        }

    })->name('auth.onedrive');
    
    Route::get('/onedrive/oauth', function(Request $request)
    {
        OneDriveSetting::connect($request->code);

        echo '<script>
                    window.close();
                    // Access the main window using window.opener
                    var mainWindow = window.opener;
                    // Show Toastr success message
                    mainWindow.toastrs("Success", "Onedrive Drive Authenticated Successfully.", "success");
                    mainWindow.location.reload();
                </script>';
    })->name('auth.onedrive.callback');

    Route::get('/onedrive/oauth', [OneDriveController::class, 'AuthenticateWithOneDriveCallback'])
    ->name('auth.onedrive.callback')
    ->middleware(['auth']);

    Route::get('/onedrive/autherize/', [OneDriveController::class, 'AuthenticateWithOneDrive'])
        ->name('auth.onedrive')
        ->middleware(['auth']);

    Route::get('onedrive/{module}/{folderid?}', [OneDriveController::class, 'index'])
        ->name('onedrive.index')
        ->middleware(['auth']);

    Route::get('onedrives/{module}/{folderid}/{view?}', [OneDriveController::class, 'getmodulefiles'])
        ->name('onedrive.module.index')
        ->middleware(['auth']);

    Route::post('one-drive-settings', [OneDriveController::class, 'OneDriveSettingsStore'])
        ->name('onedrive.setting.store')
        ->middleware(['auth']);

    Route::any('one-drive/folder/assigned/{module?}', [OneDriveController::class, 'assign_folder_store'])
        ->name('onedrive.assigned.folder')
        ->middleware(['auth']);

    Route::any('one-drive/folder/assign/{module?}', [OneDriveController::class, 'assign_folder'])
        ->name('onedrive.assign.folder')
        ->middleware(['auth']);

    Route::any('one-drive/uploadfiles/{modulename}', [OneDriveController::class, 'uploadfiles_store'])
        ->name('onedrive.upload.file.store')
        ->middleware(['auth']);

    Route::get('one-drive/{module}', [OneDriveController::class, 'uploadfiles_create'])
        ->name('onedrive.upload.file.create')
        ->middleware(['auth']);

    Route::get('one-drive/delete/{folderid}', [OneDriveController::class, 'deleteFile'])
        ->name('onedrive.file.delete')
        ->middleware(['auth']);
        
});
