@php
    use Modules\OneDrive\Entities\OneDriveSetting;   
@endphp

@extends('layouts.main')

@section('page-title')
    {{ __('OneDrive') }}
@endsection

@section('page-breadcrumb')
    {{ __($module) }},{{ __('OneDrive') }}
@endsection

<style>
    .text-container {
        position: relative;
        overflow: hidden;
        max-width: 100%;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    
    .text-container::after {
        content: attr(data-text);
        position: absolute;
        bottom: 0;
        right: 0;
        background-color: white; /* Set the background color to match your background */
        padding: 0 4px;
        white-space: nowrap;
        overflow: hidden;
    }
    
    .text-container:hover::after {
        content: none;
    }
    
    .text-container:hover {
        white-space: normal;
        overflow: visible;
    }
    
    .wrap-effect:hover {
        white-space: normal;
        overflow: visible;
    }

</style>

@section('page-action')

    <div>
        @if(OneDriveSetting::is_folder_assigned($module))
            <a class="btn btn-sm btn-primary p-2 m-1" data-ajax-popup="true" data-size="lg"
                data-title="{{ __('Upload Files') }}" data-url="{{ route('onedrive.upload.file.create',[$module,$folderId]) }}" data-bs-toggle="tooltip"
                data-bs-original-title="{{ __('Upload Files') }}">
                <i class="ti ti-plus"></i>
            </a>
            <a href="{{ route('onedrive.module.index',[$module ,$folderId]) }}"  data-bs-toggle="tooltip" data-bs-original-title="{{__('List View')}}" class="btn btn-sm btn-primary btn-icon p-2 m-1">
                <i class="ti ti-list"></i>
            </a>
        @endif

         @if (module_is_active('OneDrive'))
            @permission('onedrive manage')
                    @if($folderId != OneDriveSetting::getFolderIdByName($module))    
                        <a href="{{ route('onedrive.module.index', [$module , $parent_folder_id ,'grid' ]) }}"  class="btn-submit btn  p-2 btn-sm btn-primary"
                            data-toggle="tooltip" title="{{ __('Back') }}">
                            <i class=" ti ti-arrow-back-up"></i>
                        </a>
                    @else
                        <a href="{{ Session::get($module) }}"  class="btn-submit p-2 btn btn-sm btn-primary"
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @if (!empty($onedrive_files))
                            <div class="row">
                                @foreach ($onedrive_files as $file)
                                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-4" id="{{ 'file-'.$file['id'] }}">
                                        <div class="custom-card mb-3">
                                            <div class="custom-card-body text-center">
                                                @if (isset($file['folder']))
                                                    <a href="{{ route('onedrive.module.index', [$module, $file['id'], 'grid']) }}">
                                                        <img src="{{ url('Modules/OneDrive/Resources/assets/image/folder_icon.png') }}" alt="" class="img-fluid">
                                                        <span class="d-block mt-2 text-container">{{ $file['name'] }}</span>
                                                    </a>
                                                @elseif(isset($file['file']) && $file['file']['mimeType'] == 'application/zip' )
                                                    <a target="_blank" href="{{ $file['webUrl'] }}">
                                                        <img src="{{ url('Modules/OneDrive/Resources/assets/image/zip.png') }}" class="img-fluid">
                                                        <span class="d-block mt-2 text-container">{{ $file['name'] }}</span>
                                                    </a>
                                                @else
                                                    <a target="_blank" href="{{ $file['webUrl'] }}">
                                                        <img src="{{ isset($file['thumbnails'][0]) ? $file['thumbnails'][0]['small']['url'] : '' }}" class="img-fluid">
                                                        <span class="d-block mt-2 text-container">{{ $file['name'] }}</span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-info text-center my-5" role="alert">
                                        {{ __('Data Not found!') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
