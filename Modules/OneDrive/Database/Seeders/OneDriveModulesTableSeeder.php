<?php

namespace Modules\OneDrive\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\OneDrive\Entities\OneDriveSetting;


class OneDriveModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $modules = [

            'Account'       => ['Customer','Vender','Accounts','Revenue','Bill','Transaction'] ,
            'AIImage'       => ['Generated Image'] ,
            'General'       => ['Invoice','Proposal '] ,
            'Contract'      => ['Contracts'] ,
            'Hrm'           => ['Employee','Payslip','Event','Leave','Event','Document'] ,
            'Lead'          => ['Lead','Deal'] ,
            'Pos'           => ['Warehouse','Purchase','POS Order'] ,                  
            'ProductService'=> ["Products"] ,
            'Recruitment'   => ['Jobs','Job Application','Interview Schedule'] ,
            'Retainer'      => ['Retainers'] ,
            'Sales'         => ['Account','Opportunities','Sales Invoice','Cases','Sales Document','Meeting'] ,
            'SupportTicket' => ['Tickets','Knowledge'] ,
            'Taskly'        => ['Projects','Task','Bug'] ,
            'AIDocument'    => ['Documents'],
            'Notes'         => ['Notes'],
            'Assets'        => ['Assets'],

        ];

        foreach($modules as $key=> $module)
        {
            foreach($module as $key1 => $sub_module)
            {
                $ntfy = OneDriveSetting::where('name',$sub_module)->where('module',$key)->count();
                if($ntfy == 0){
                    $new = new OneDriveSetting();
                    $new->name = $sub_module;
                    $new->value = '';
                    $new->module = $key;
                    $new->save();
                }
            }
        }
    }
}
