<?php

namespace Modules\OneDrive\Providers;

use Modules\OneDrive\Entities\OneDriveSetting;
use Illuminate\Support\ServiceProvider;

class AddHookServiceProvider extends ServiceProvider
{

    public $views;

    public function boot(){

        $this->views = OneDriveSetting::get_view_to_stack_hook();  

        view()->composer(array_values($this->views), function ($view) {

            $module = array_search($view->getName(), $this->views);

            if(\Auth::check())
            {
                $active_module = explode(',', \Auth::user()->active_module);
                $dependency = explode(',', 'OneDrive');
                if (!empty(array_intersect($dependency, $active_module))) {
                    $view->getFactory()->startPush('addButtonHook', view('onedrive::layouts.addhook',compact('module')));
                }
            }
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
