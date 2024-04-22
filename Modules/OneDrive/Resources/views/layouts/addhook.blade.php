@permission('onedrive manage')
    @if(company_setting($module.'_onedrive'))
        @if($module == 'Projects')
            <div class="col-sm-auto">
                <a href="{{ route('onedrive.index',$module) }}" data-bs-original-title="{{ __('OneDrive') }}" data-bs-toggle="tooltip" class="btn btn-xs btn-primary btn-icon-only width-auto ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="96" height="62" viewBox="0 0 96 62" fill="none">
                        <g clip-path="url(#clip0)">
                        <path d="M36.6083 17.0787L36.6093 17.0754L56.7622 29.1468L68.771 24.0933L68.7715 24.0953C71.2117 23.0404 73.8425 22.4974 76.501 22.5C76.9439 22.5 77.3817 22.5201 77.8173 22.5491C76.3735 16.9194 73.3256 11.8302 69.0441 7.89997C64.7625 3.96975 59.4315 1.36772 53.699 0.410087C47.9665 -0.547546 42.0793 0.180446 36.7527 2.5056C31.4262 4.83075 26.8896 8.65295 23.6943 13.5077C23.797 13.5064 23.8981 13.5 24.001 13.5C28.4549 13.494 32.8218 14.7336 36.6083 17.0787Z" fill="#0364B8"/>
                        <path d="M36.6083 17.0755L36.6073 17.0788C32.8208 14.7336 28.4539 13.494 24 13.5C23.8971 13.5 23.796 13.5065 23.6933 13.5078C19.334 13.5617 15.0718 14.8026 11.3648 17.0969C7.65772 19.3913 4.64595 22.6525 2.65311 26.53C0.660277 30.4074 -0.238291 34.7547 0.0539791 39.1045C0.346249 43.4543 1.81831 47.6423 4.31196 51.2183L22.0839 43.7395L29.9842 40.415L47.5748 33.0126L56.7612 29.1468L36.6083 17.0755Z" fill="#0078D4"/>
                        <path d="M77.8158 22.5492C77.3802 22.5201 76.9424 22.5 76.4995 22.5C73.841 22.4974 71.2103 23.0404 68.7701 24.0953L68.7695 24.0933L56.7607 29.1468L60.2431 31.2327L71.6578 38.07L76.6381 41.0531L93.6671 51.2533C95.2144 48.3809 96.0162 45.1661 95.9991 41.9035C95.9821 38.6408 95.1467 35.4346 93.5694 32.5785C91.9922 29.7224 89.7235 27.3076 86.9713 25.5555C84.219 23.8033 81.0711 22.7697 77.8158 22.5494V22.5492Z" fill="#1490DF"/>
                        <path d="M76.6391 41.0525L71.6588 38.0694L60.244 31.2321L56.7617 29.1462L47.5753 33.012L29.9847 40.4144L22.0845 43.7389L4.3125 51.2177C6.52099 54.3929 9.46515 56.9865 12.8935 58.7769C16.322 60.5673 20.1327 61.5014 24.0005 61.4994H76.5005C80.0205 61.5004 83.4752 60.5484 86.4978 58.7443C89.5204 56.9402 91.9981 54.3514 93.668 51.2527L76.6391 41.0525Z" fill="#28A8EA"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="95.9996" height="61.4994" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                </a>
            </div>
        @else
            <a href="{{ route('onedrive.index',$module) }}"  data-bs-toggle="tooltip" data-bs-original-title="{{__('OneDrive')}}" id="onedrive" class="btn btn-sm btn-primary" >
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="62" viewBox="0 0 96 62" fill="none">
                    <g clip-path="url(#clip0)">
                    <path d="M36.6083 17.0787L36.6093 17.0754L56.7622 29.1468L68.771 24.0933L68.7715 24.0953C71.2117 23.0404 73.8425 22.4974 76.501 22.5C76.9439 22.5 77.3817 22.5201 77.8173 22.5491C76.3735 16.9194 73.3256 11.8302 69.0441 7.89997C64.7625 3.96975 59.4315 1.36772 53.699 0.410087C47.9665 -0.547546 42.0793 0.180446 36.7527 2.5056C31.4262 4.83075 26.8896 8.65295 23.6943 13.5077C23.797 13.5064 23.8981 13.5 24.001 13.5C28.4549 13.494 32.8218 14.7336 36.6083 17.0787Z" fill="#0364B8"/>
                    <path d="M36.6083 17.0755L36.6073 17.0788C32.8208 14.7336 28.4539 13.494 24 13.5C23.8971 13.5 23.796 13.5065 23.6933 13.5078C19.334 13.5617 15.0718 14.8026 11.3648 17.0969C7.65772 19.3913 4.64595 22.6525 2.65311 26.53C0.660277 30.4074 -0.238291 34.7547 0.0539791 39.1045C0.346249 43.4543 1.81831 47.6423 4.31196 51.2183L22.0839 43.7395L29.9842 40.415L47.5748 33.0126L56.7612 29.1468L36.6083 17.0755Z" fill="#0078D4"/>
                    <path d="M77.8158 22.5492C77.3802 22.5201 76.9424 22.5 76.4995 22.5C73.841 22.4974 71.2103 23.0404 68.7701 24.0953L68.7695 24.0933L56.7607 29.1468L60.2431 31.2327L71.6578 38.07L76.6381 41.0531L93.6671 51.2533C95.2144 48.3809 96.0162 45.1661 95.9991 41.9035C95.9821 38.6408 95.1467 35.4346 93.5694 32.5785C91.9922 29.7224 89.7235 27.3076 86.9713 25.5555C84.219 23.8033 81.0711 22.7697 77.8158 22.5494V22.5492Z" fill="#1490DF"/>
                    <path d="M76.6391 41.0525L71.6588 38.0694L60.244 31.2321L56.7617 29.1462L47.5753 33.012L29.9847 40.4144L22.0845 43.7389L4.3125 51.2177C6.52099 54.3929 9.46515 56.9865 12.8935 58.7769C16.322 60.5673 20.1327 61.5014 24.0005 61.4994H76.5005C80.0205 61.5004 83.4752 60.5484 86.4978 58.7443C89.5204 56.9402 91.9981 54.3514 93.668 51.2527L76.6391 41.0525Z" fill="#28A8EA"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="95.9996" height="61.4994" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
            </a>
        @endif
    @endif
@endpermission

