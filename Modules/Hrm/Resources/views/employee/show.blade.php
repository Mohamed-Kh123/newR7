@extends('layouts.main')
@section('page-title')
    {{ __('Employee') }}
@endsection
@section('page-breadcrumb')
    {{ __('Employee') }}
@endsection
<style>
    .emp-card {
        min-height: 193px !important;
    }
</style>
@push('css')
    <link rel="stylesheet" href="{{ asset('Modules/Hrm/Resources/assets/css/custom.css') }}">
@endpush
@php
    $company_settings = getCompanyAllSetting();
@endphp
@section('page-action')
    <div class="col-auto p-0">
        <div class="d-flex justify-content-end drp-languages">
            <ul class="list-unstyled mb-0 m-2">
                <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="drp-text hide-mob text-primary"> {{ __('Joining Letter') }}
                            <i class="ti ti-chevron-down drp-arrow nocolor hide-mob"></i>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown">
                        <a href="{{ route('joiningletter.download.pdf', $employee->employee_id) }}"
                            class=" btn-icon dropdown-item" data-bs-toggle="tooltip" data-bs-placement="top"
                            target="_blanks"><i class="ti ti-download ">&nbsp;</i>{{ __('PDF') }}</a>

                        <a href="{{ route('joininglatter.download.doc', $employee->employee_id) }}"
                            class=" btn-icon dropdown-item" data-bs-toggle="tooltip" data-bs-placement="top"
                            target="_blanks"><i class="ti ti-download ">&nbsp;</i>{{ __('DOC') }}</a>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled mb-0 m-2">
                <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="drp-text hide-mob text-primary"> {{ __('Experience Certificate') }}
                            <i class="ti ti-chevron-down drp-arrow nocolor hide-mob"></i>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown">
                        <a href="{{ route('exp.download.pdf', $employee->employee_id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('PDF') }}</a>

                        <a href="{{ route('exp.download.doc', $employee->employee_id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('DOC') }}</a>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled mb-0 m-2">
                <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span class="drp-text hide-mob text-primary"> {{ __('NOC') }}
                            <i class="ti ti-chevron-down drp-arrow nocolor hide-mob"></i>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown">
                        <a href="{{ route('noc.download.pdf', $employee->employee_id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('PDF') }}</a>

                        <a href="{{ route('noc.download.doc', $employee->employee_id) }}" class=" btn-icon dropdown-item"
                            data-bs-toggle="tooltip" data-bs-placement="top" target="_blanks"><i
                                class="ti ti-download ">&nbsp;</i>{{ __('DOC') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @if ($employee->user->is_disable == 1)
        <div class="col-auto pe-0 pt-3">
            @permission('designation create')
                <a href="{{ route('employee.edit', \Illuminate\Support\Facades\Crypt::encrypt($employee->user_id)) }}"
                    class="btn btn-sm btn-primary p-2" data-toggle="tooltip" title="{{ __('Edit') }}">
                    <i class="ti ti-pencil"></i>
                </a>
            @endpermission
        </div>
    @endif
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="col-md-12 d-flex align-items-center justify-content-between justify-content-md-end mb-4">
                <div class="col-md-6">
                    <ul class="nav nav-pills nav-fill cust-nav information-tab" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="personal-details" data-bs-toggle="pill"
                                data-bs-target="#personal-details-tab" type="button">{{ __('Personal Details') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="company" data-bs-toggle="pill" data-bs-target="#company-tab"
                                type="button">{{ __('Company Details') }}</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="payslip" data-bs-toggle="pill" data-bs-target="#payslip-tab"
                                type="button">{{ __('Payslip Details') }}</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="personal-details-tab" role="tabpanel"
                            aria-labelledby="pills-user-tab-1">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card ">
                                        <div class="card-body employee-detail-body fulls-card emp-card">
                                            <h5>{{ __('Personal Details') }}</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong class="font-bold">{{ __('Name') }} :</strong>
                                                        <span>{{ !empty($employee->name) ? $employee->name : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Phone') }} :</strong>
                                                        <span>{{ !empty($employee->phone) ? $employee->phone : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Date of Birth') }} :</strong>
                                                        <span>{{ !empty($employee->dob) ? company_date_formate($employee->dob) : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong class="font-bold">{{ __('Gender') }} :</strong>
                                                        <span>{{ !empty($employee->gender) ? $employee->gender : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong class="font-bold">{{ __('Email') }} :</strong>
                                                        <span>{{ !empty($employee->email) ? $employee->email : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong class="font-bold">{{ __('Passport Country') }} :</strong>
                                                        <span>{{ !empty($employee->passport_country) ? $employee->passport_country : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Salary Type') }} :</strong>
                                                        <span>{{ !empty($employee->salaryType) ? $employee->salaryType->name : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong class="font-bold">{{ __('Passport') }} :</strong>
                                                        <span>{{ !empty($employee->passport) ? $employee->passport : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Basic Salary') }} :</strong>
                                                        <span>{{ !empty($employee->salary) ? $employee->salary : '-' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card ">
                                        <div class="card-body employee-detail-body fulls-card emp-card">
                                            <h5>{{ __('Location Details') }}</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong class="font-bold">{{ __('Location Type') }} :</strong>
                                                        <span>{{ !empty($employee->location_type) ? $employee->location_type : '-' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong class="font-bold">{{ __('Address') }} :</strong>
                                                        <span>{{ !empty($employee->country) && !empty($employee->state) && !empty($employee->city) && !empty($employee->address) && !empty($employee->zipcode) ? $employee->address . ', ' . $employee->country . ', ' . $employee->state . ', ' . $employee->city . '-' . $employee->zipcode : '-' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card ">
                                        <div class="card-body employee-detail-body fulls-card emp-card">
                                            <h5>{{ __('Document Detail') }}</h5>
                                            <hr>
                                            <div class="row">
                                                @if (count($documents) > 0)
                                                    @php
                                                        $employeedoc = $employee
                                                            ->documents()
                                                            ->pluck('document_value', 'document_id');
                                                    @endphp
                                                    @foreach ($documents as $key => $document)
                                                        <div class="col-md-6">
                                                            <div class="info text-sm">
                                                                <strong class="font-bold">{{ $document->name }} :
                                                                </strong>
                                                                <span><a href="{{ !empty($employeedoc[$document->id]) ? get_file($employeedoc[$document->id]) : '' }}"
                                                                        target="_blank">{{ !empty($employeedoc[$document->id]) ? $employeedoc[$document->id] : '' }}</a></span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="text-center">
                                                        {{ __('No Document Type Added.!') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card ">
                                        <div class="card-body employee-detail-body fulls-card emp-card">
                                            <h5>{{ __('Bank Account Detail') }}</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Account Holder Name') }} :
                                                        </strong>
                                                        <span>{{ $employee->account_holder_name }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong class="font-bold">{{ __('Account Number') }} :</strong>
                                                        <span>{{ $employee->account_number }}</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Bank Name') }} :</strong>
                                                        <span>{{ $employee->bank_name }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Bank Identifier Code') }}
                                                            :</strong>
                                                        <span>{{ $employee->bank_identifier_code }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Branch Location') }} :</strong>
                                                        <span>{{ $employee->branch_location }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Tax Payer Id') }} :</strong>
                                                        <span>{{ $employee->tax_payer_id }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="company-tab" role="tabpanel" aria-labelledby="pills-user-tab-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card ">
                                        <div class="card-body employee-detail-body fulls-card emp-card">
                                            <h5>{{ __('Company Detail') }}</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong
                                                            class="font-bold">{{ !empty($company_settings['hrm_branch_name']) ? $company_settings['hrm_branch_name'] : __('Branch') }}
                                                            : </strong>
                                                        <span>{{ !empty($employee->branch) ? $employee->branch->name : '' }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm font-style">
                                                        <strong
                                                            class="font-bold">{{ !empty($company_settings['hrm_department_name']) ? $company_settings['hrm_department_name'] : __('Department') }}
                                                            :</strong>
                                                        <span>{{ !empty($employee->department) ? $employee->department->name : '' }}</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong
                                                            class="font-bold">{{ !empty($company_settings['hrm_designation_name']) ? $company_settings['hrm_designation_name'] : __('Designation') }}
                                                            :</strong>
                                                        <span>{{ !empty($employee->designation) ? $employee->designation->name : '' }}</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Date Of Joining') }} :</strong>
                                                        <span>{{ !empty($employee->company_doj) ? company_date_formate($employee->company_doj) : '' }}</span>
                                                    </div>
                                                </div>
                                                @if (!empty($customFields) && count($employee->customField) > 0)
                                                    @foreach ($customFields as $field)
                                                        <div class="info text-sm">
                                                            <strong class="font-bold">{{ $field->name }} :</strong>
                                                            @if ($field->type == 'attachment')
                                                                <a href="{{ isset($employee->customField[$field->id]) ? get_file($employee->customField[$field->id]) : '#' }}"
                                                                    target="_blank">
                                                                    @if (isset($employee->customField[$field->id]))
                                                                        <img src="{{ get_file($employee->customField[$field->id]) }}"
                                                                            class="wid-40 rounded me-3">
                                                                    @endif
                                                                </a>
                                                            @else
                                                                <span>{{ !empty($employee->customField) ? (isset($employee->customField[$field->id]) ? $employee->customField[$field->id] : '-') : '-' }}</span>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card ">
                                        <div class="card-body employee-detail-body fulls-card emp-card">
                                            <h5>{{ __('Hours and Rates Detail') }}</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6>{{ __('Hours') }}</h6>
                                                    <hr>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>{{ __('Rates') }}</h6>
                                                    <hr>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Hours Per Day') }} :</strong>
                                                        <span>{{ $employee->hours_per_day }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Annual Salary') }} :</strong>
                                                        <span>{{ $employee->annual_salary }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Days Per Week') }} :</strong>
                                                        <span>{{ $employee->days_per_week }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Fixed Salary') }} :</strong>
                                                        <span>{{ $employee->fixed_salary }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Hours Per Month') }} :</strong>
                                                        <span>{{ $employee->hours_per_month }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Rate Per Day') }} :</strong>
                                                        <span>{{ $employee->rate_per_day }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Days Per Month') }} :</strong>
                                                        <span>{{ $employee->days_per_month }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="info text-sm">
                                                        <strong class="font-bold">{{ __('Rate Per Hour') }} :</strong>
                                                        <span>{{ $employee->rate_per_hour }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="payslip-tab" role="tabpanel" aria-labelledby="pills-user-tab-2">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5>{{ __('Payslip Detail') }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>{{ __('Salary Month') }}</th>
                                                            <th>{{ __('Salary') }}</th>
                                                            <th>{{ __('Net Salary') }}</th>
                                                            <th>{{ __('Status') }}</th>
                                                            <th>{{ __('Salary Payslip') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (count($payslips) > 0)
                                                            @forelse ($payslips as $payslip)
                                                                <tr>
                                                                    <td>{{ !empty($payslip->salary_month) ? $payslip->salary_month : '' }}
                                                                    </td>
                                                                    <td>{{ !empty($payslip->basic_salary) ? $payslip->basic_salary : '' }}
                                                                    </td>
                                                                    <td>{{ !empty($payslip->net_payble) ? $payslip->net_payble : '' }}
                                                                    </td>
                                                                    <td>
                                                                        @if ($payslip->status == '1')
                                                                            <div
                                                                            class="badge bg-success p-2 px-3 rounded text-white">
                                                                                {{ $payslip->status == 1 ? __('Paid') : '' }}</div>
                                                                        @else
                                                                            <div
                                                                            class="badge bg-danger p-2 px-3 rounded text-white">
                                                                                {{ $payslip->status == 0 ? __('UnPaid') : '' }}</div>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <a href="#"
                                                                            data-url="{{ route('payslip.pdf', ['id' => $payslip->employee_id, 'm' => $payslip->salary_month]) }}"
                                                                            data-size="lg" data-ajax-popup="true"
                                                                            class=" btn-sm btn btn-warning"
                                                                            data-title="{{ __('Employee Payslip') }}"
                                                                            data-title="{{ __('Employee Payslip') }}">
                                                                            {{ __('Payslip') }}
                                                                        </a>

                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                @include('layouts.nodatafound')
                                                            @endforelse
                                                        @else
                                                            @include('layouts.nodatafound')
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone-amd-module.min.js') }}"></script>
    <script>
        function changetab(tabname) {
            var someTabTriggerEl = document.querySelector('button[data-bs-target="' + tabname + '"]');
            var actTab = new bootstrap.Tab(someTabTriggerEl);
            actTab.show();
        }
    </script>
@endpush
