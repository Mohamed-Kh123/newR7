<?php

namespace Modules\OneDrive\Listeners;

use App\Events\CompanySettingMenuEvent;

class CompanySettingMenuListener
{
    /**
     * Handle the event.
     */
    public function handle(CompanySettingMenuEvent $event): void
    {
        $module = 'OneDrive';
        $menu = $event->menu;
        $menu->add([
            'title' => __('OneDrive Settings'),
            'name' => 'onedrive',
            'order' => 680,
            'ignore_if' => [],
            'depend_on' => [],
            'route' => 'home',
            'navigation' => 'onedrive-sidenav',
            'module' => $module,
            'permission' => 'onedrive manage'
        ]);
    }
}
