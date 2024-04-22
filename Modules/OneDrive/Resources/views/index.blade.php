@php
    use Modules\OneDrive\Entities\OneDriveSetting;   
    $company_settings           = getCompanyAllSetting();
@endphp

@extends('layouts.main')

@section('page-title')
    {{ __('OneDrive') }}
@endsection

@section('page-breadcrumb')
    {{ __($module) }},{{ __('OneDrive') }}
@endsection

@section('page-action')
    <div>
        @if(OneDriveSetting::is_folder_assigned($module))
                <a class="btn btn-sm btn-primary m-1" data-ajax-popup="true" data-size="lg"
                    data-title="{{ __('Upload Files') }}" data-url="{{ route('onedrive.upload.file.create',[$module,$folderId]) }}" data-bs-toggle="tooltip"
                    data-bs-original-title="{{ __('Upload Files') }}">
                    <i class="ti ti-plus"></i>
                </a>

                <a href="{{ route('onedrive.module.index',[$module, $folderId ,'grid']) }}"  data-bs-toggle="tooltip" data-bs-original-title="{{__('Grid View')}}" class="btn btn-sm btn-primary btn-icon m-1">
                    <i class="ti ti-layout-grid"></i>
                </a>

        @endif
        @if (module_is_active('OneDrive'))
            @permission('onedrive manage')
                    @if($folderId != OneDriveSetting::getFolderIdByName($module))    
                        <a href="{{ route('onedrive.module.index', [$module , $parent_folder_id ]) }}"  class="btn-submit btn btn-sm btn-primary"
                            data-toggle="tooltip" title="{{ __('Back') }}">
                            <i class=" ti ti-arrow-back-up"></i>
                        </a>
                    @else
                        <a href="{{ Session::get($module) }}"  class="btn-submit btn btn-sm btn-primary"
                            data-toggle="tooltip" title="{{ __('Back') }}">
                            <i class=" ti ti-arrow-back-up"></i>
                        </a>
                    @endif
            @endpermission
        @endif
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if(OneDriveSetting::is_folder_assigned($module))
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table px-2 mb-0 py-3" id="assets">
                                <thead>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Size') }}</th>
                                        <th>{{ __('LastModified') }}</th>
                                        @permission('onedrive manage')
                                            <th>{{ __('Action') }}</th>
                                        @endpermission
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($onedrive_files))
                                        @foreach($onedrive_files as $file)
                                            <tr class="font-style">
                                                @if(isset($file['folder']))
                                                    <td><a href="{{ route('onedrive.module.index',[ $module ,$file['id']]) }}"><img height="50px" src="{{ url('Modules/OneDrive/Resources/assets/image/folder_icon.png') }}" alt="" class="p-2">{{  $file['name']}} </a></td>
                                                @elseif(isset($file['file']) && $file['file']['mimeType'] == 'application/zip' )
                                                    <td><a target="_blank" href="{{ $file['webUrl'] }}"><img src="{{ url('Modules/OneDrive/Resources/assets/image/zip.png') }}" height="50px" alt="" class="p-2">{{  $file['name']}} </a></td>
                                                @else
                                                    <td><a target="_blank" href="{{ $file['webUrl'] }}"><img src="{{ isset($file['thumbnails'][0]) ? $file['thumbnails'][0]['small']['url'] : '' }}" height="50px" alt="" class="p-2">{{  $file['name']}} </a></td>
                                                @endif   
                                                <td>{{ round(($file['size'] / 1024) / 1024, 2) . ' MB';   }}</td>
                                                <td>{{  date("Y-m-d / h:i:sa", strtotime($file['lastModifiedDateTime'])) }}</td>
                                                @permission('onedrive manage')
                                                    <td>
                                                        {!! Form::open(['method' => 'GET', 'route' => ['onedrive.file.delete', $file['id']],'id'=>'delete-form-'.$file['id']]) !!}

                                                        <a href="#" class="mx-3 btn btn-sm  bg-danger align-items-center bs-pass-para show_confirm" data-bs-toggle="tooltip" title="{{__('Delete')}}" data-original-title="{{__('Delete')}}" data-confirm-yes="{{'delete-form-'.$file['id']}}">
                                                        <i class="ti ti-trash text-white"></i>
                                                        </a>
                                                        {!! Form::close() !!}

                                                    </td>
                                                @endpermission
                                            </tr>    
                                        @endforeach
                                    @else    
                                        <tr class="p-5 m-5">
                                            <td class="text-center" colspan="4">{{ __('Data Not found!') }}</td>
                                        </tr>
                                    @endif    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-header pb-3">
                        <i class="ti ti-info-circle pointer h2 text-primary"></i>
                        <span class="h4">{{ __('Info') }}</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <p class="text-danger">{{ __('This record does not have folder assigned, Please choose a folder and click "Assign Folder "') }}</p>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md"
                                    data-title="{{ __('Choose Folder') }}" data-url="{{ route('onedrive.assign.folder',$module) }}" data-bs-toggle="tooltip"
                                    data-bs-original-title="{{ __('Choose Folder') }}">
                                    <span>{{ __('Choose Folder') }}</span>
                                </a>
                            </div>
                        </div>
                    <div>
                </div>    
            @endif
        </div>
    </div>
@endsection
