@permission('onedrive manage')
@php
        $onedrive_modules           = Modules\OneDrive\Entities\OneDriveSetting::get_modules();
        $company_settings           = getCompanyAllSetting();
        $onedrive_client_id         = isset($company_settings['onedrive_client_id']) ? $company_settings['onedrive_client_id'] : '';
        $onedrive_client_secret     = isset($company_settings['onedrive_client_secret']) ? $company_settings['onedrive_client_secret'] : '';
@endphp
<div class="card" id="onedrive-sidenav">
        {{ Form::open(array('route' => 'onedrive.setting.store','method' => 'post', 'enctype' => 'multipart/form-data')) }}
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-10">
                    <h5 class="">{{ __('OneDrive Settings') }}</h5>
                    <small><b class="text-danger">{{ __('Note: ') }}</b>{{ __('While creating json credentials add this URL in "Authorised redirect URIs" Section -') }} {{ env('APP_URL').'onedrive/oauth' }} </small>
                </div>
                <div class=" text-end  col-auto">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                    @if ($onedrive_client_id == '' || $onedrive_client_secret == '')
                        <p class="card-body text-danger">{{ __('To start the synchronization process, please add your Onedrive Credentials.') }}</p>
                        
                    @elseif (
                                !isset($company_settings['onedrive_tokens_data']) || 
                                !isset($company_settings['onedrive_refresh_token']) ||
                                $company_settings['onedrive_tokens_data'] == '' || 
                                $company_settings['onedrive_refresh_token'] == ''
                            )
                        <div class="row">
                            <div class="col-auto">
                                <p class="text-danger">{{ __('You have not authorized your OneDrive account to browse and attach folders. Click') }} <a href="#" onclick="openOneDriveAuthenticationWindow()">{{ __('here') }}</a>{{ __(' to authorize.') }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="onedrive_client_id" class="form-label">{{ __('Client Id') }}</label>
                                <input class="form-control" placeholder="{{ __('Onedrive Client Id') }}" name="onedrive_client_id"
                                    type="text" value="{{ $onedrive_client_id }}" id="onedrive_client_id">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="onedrive_client_secret" class="form-label">{{ __('Client Secret') }}</label>
                                <input class="form-control" placeholder="{{ __('Onedrive Client Secret Key') }}"
                                    name="onedrive_client_secret" type="text" value="{{ $onedrive_client_secret }}" id="onedrive_client_secret">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
            <div class="row">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @php
                        $active = 'active';
                    @endphp
                    @foreach ($onedrive_modules as $key => $e_module)
                        @if((module_is_active($key) ) || $key == 'General')
                            <li class="nav-item">
                                <a class="nav-link text-capitalize {{ $active }}" id="pills-onedrive-{{ ($key) }}-tab" data-bs-toggle="pill" href="#pills-onedrive-{{ ($key) }}" role="tab" aria-controls="pills-onedrive-{{ ($key) }}" aria-selected="true">{{ Module_Alias_Name($key) }}</a>
                            </li>
                            @php
                                $active = '';
                            @endphp
                        @endif
                    @endforeach
                </ul>
                <div class="tab-content mb-3" id="pills-tabContent">
                    @foreach ($onedrive_modules as $key => $e_module)
                        @if((module_is_active($key)) || $key == 'General')
                            <div class="tab-pane fade {{ $loop->index == 0? 'active':'' }} show" id="pills-onedrive-{{ ($key) }}" role="tabpanel" aria-labelledby="pills-onedrive-{{ ($key) }}-tab">
                                <div class="row">
                                    @foreach ($e_module as $sub_module)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="d-flex align-items-center justify-content-between list_colume_notifi pb-2 mb-3">
                                            <div class="mb-3 mb-sm-0">
                                                <h6>
                                                    <label for="{{ $sub_module }}" class="form-label">{{ ($sub_module) }}</label>
                                                </h6>
                                            </div>
                                            <div class="text-end">
                                                <div class="form-check form-switch d-inline-block">
                                                    <input type="hidden" name="onedrive[{{ $sub_module.'_onedrive' }}]" value="0" />
                                                    <input class="form-check-input" {{(isset($company_settings[$sub_module.'_onedrive']) && $company_settings[$sub_module.'_onedrive'] == true) ? 'checked' : ''}} id="onedrive" name="onedrive[{{ $sub_module.'_onedrive' }}]" type="checkbox" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button class="btn-submit btn btn-primary" type="submit">
                {{__('Save Changes')}}
            </button>
        </div>
        {{Form::close()}}
</div>
<script>
    function openOneDriveAuthenticationWindow() {
        // Open a new window for authentication
        var authenticationWindow = window.open('{{ route('auth.onedrive') }}', '_blank', 'width=800,height=800');
    }
</script>
@endpermission