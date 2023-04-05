@extends('layouts.newapp', ['title' => 'Customer List'])

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="black" height="2" opacity="0.5" rx="1"
                                        transform="rotate(45 17.0365 15.1223)" width="8.15546" x="17.0365"
                                        y="15.1223" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input class="form-control form-control-solid w-250px ps-15"
                                data-kt-customer-table-filter="search" placeholder="Search Customers" type="text" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">

                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                            </div>
                            <button class="btn btn-danger" data-kt-customer-table-select="delete_selected"
                                type="button">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input"
                                            data-kt-check-target="#kt_customers_table .form-check-input"
                                            data-kt-check="true" type="checkbox" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">FULL NAME</th>
                                <th class="min-w-125px">ACCOUNT TYPE</th>
                                <th class="min-w-125px">PHONE</th>
                                <th class="min-w-125px"> Created Date</th>
                                <th class="min-w-125px">CODE</th>
                                <th class="min-w-125px">STATUS</th>
                                <!-- <th class="text-end min-w-70px">INVOICE</th> -->
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($dealers as $data)
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Name=-->
                                    <td>
                                        {{ $data->first_name }} {{ $data->last_name }}
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Email=-->
                                    <td>
                                        {{ $data->type }}
                                    </td>
                                    <!--end::Email=-->
                                    <!--begin::Company=-->
                                    <td>{{ $data->phone_no }}</td>
                                    <!--end::Company=-->
                                    <!--begin::Payment method=-->
                                    <td data-filter="mastercard">
                                        {{ $data->created_at }}
                                    </td>
                                    <!--end::Payment method=-->
                                    <!--begin::Date=-->
                                    <td>{{ $data->code }}</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a class="btn btn-sm btn-light btn-active-light-primary"
                                            href="{{ url('/buy', $data->id) }}">Buy Items
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a class="menu-link px-3" href="">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a class="menu-link px-3" data-kt-customer-table-filter="delete_row"
                                                    href="#">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action=-->
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->

    <!--begin::Modals-->
    <!--begin::Modal - Customers - Add-->
    <div aria-hidden="true" class="modal fade" id="kt_modal_add_customer" tabindex="-1">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form action="{{ url('/dstore') }}" class="form" enctype="multipart/form-data"
                    id="kt_modal_add_customer_form" method="Post">
                    @csrf
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_customer_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Add a Dealer</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_customer_close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="black" height="2" opacity="0.5" rx="1"
                                        transform="rotate(-45 6 17.3137)" width="16" x="6"
                                        y="17.3137" />
                                    <rect fill="black" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                        width="16" x="7.41422" y="6" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>

                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-max-height="auto"
                            data-kt-scroll-offset="300px" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                            data-kt-scroll="true" id="kt_modal_add_customer_scroll">
                            <!--begin::Input group-->

                            <input class="form-control form-control-lg form-control-solid" name="user_code"
                                type="hidden" value="DC" />
                            <input class="form-control form-control-lg form-control-solid" hidden name="user_type"
                                type="text" value="Dealer" />
                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="first_name" placeholder="" required="" type="text" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="last_name" placeholder="" required="" type="text" />
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('State') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="state" placeholder="" required="" type="text" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Local Gov') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="local_government" placeholder="" required="" type="text" />
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Address') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="address" placeholder="" required="" type="text" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Land Mark') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="landmark" placeholder="" required="" type="text" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Phone No') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="phone_number" placeholder="" required="" type="text" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Email') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="email" placeholder="" required="" type="email" />
                                </div>
                                <div class="fv-row mb-15">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">Photo</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="profile_image" placeholder=""
                                        type="file" />
                                    <!--end::Input-->
                                </div>

                                <!--end::Col-->
                            </div>
                            <!-- <center>
                                                    <button class="btn btn-primary" data-bs-dismiss="modal" id="kt_modal_select_location_button" type="button">Save process
                                                    </button>
                                                   </center> -->
                            <!--end::Input group-->
                            <!--begin::Input group-->

                            <!--end::Input group-->
                            <!--begin::Billing toggle-->
                            <div aria-controls="kt_customer_view_details" aria-expanded="false"
                                class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                href="#kt_modal_add_customer_billing_info" role="button">Corporate Registration Details
                                <span class="ms-2 rotate-180">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Billing toggle-->
                            <!--begin::Billing form-->
                            <div class="collapse show" id="kt_modal_add_customer_billing_info">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Store Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="store_name" placeholder=""
                                        type="text" value="101, Collins Street" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">Store Address</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="store_address" placeholder=""
                                        type="text" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Evidence of identity</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="idcard" placeholder=""
                                        type="file" value="Melbourne" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row g-9 mb-7">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">BANK ACC NO</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" name="bank_number"
                                            placeholder="2299833" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">BANK NAME</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" name="bank_name"
                                            placeholder="DANIEL" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">BANK</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" name="bank"
                                            placeholder="GTBANK" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Billing form-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button class="btn btn-light me-3" id="kt_modal_add_customer_cancel"
                            type="reset">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button class="btn btn-primary" id="kt_modal_add_customer_submit" type="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>

    <!-- Corporate model -->
    <!--begin::Modal - Customers - Add-->
    <div aria-hidden="true" class="modal fade" id="ckt_modal_add_customer" tabindex="-1">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->

                <form action="{{ url('/cstore') }}" class="form" enctype="multipart/form-data"
                    id="ckt_modal_add_customer_form" method="Post">
                    @csrf

                    <!--begin::Modal header-->
                    <div class="modal-header" id="ckt_modal_add_customer_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Add Corporate</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" id="ckt_modal_add_customer_close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="black" height="2" opacity="0.5" rx="1"
                                        transform="rotate(-45 6 17.3137)" width="16" x="6"
                                        y="17.3137" />
                                    <rect fill="black" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                        width="16" x="7.41422" y="6" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-dependencies="#ckt_modal_add_customer_header" data-kt-scroll-max-height="auto"
                            data-kt-scroll-offset="300px" data-kt-scroll-wrappers="#ckt_modal_add_customer_scroll"
                            data-kt-scroll="true" id="ckt_modal_add_customer_scroll">
                            <!--begin::Input group-->

                            <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                name="user_code" required="" type="hidden" value="CC" />
                            <input class="form-control form-control-lg form-control-solid" hidden name="user_type"
                                type="text" value="Corporate" />

                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="first_name" placeholder="Daniel" required="" type="text" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="last_name" placeholder="Sameul" required="" type="text" />
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('State') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="state" placeholder="Abuja" required="" type="text" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Local Gov') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="local_government" placeholder="Area 1" required="" type="text" />
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Address') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="address" placeholder=" behind firstbank" required="" type="text" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Land Mark') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="landmark" placeholder="" required="" type="text" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Phone No') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="phone_number" placeholder="08000000" required="" type="text" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <label class="form-label fw-bolder text-dark fs-6">{{ _('Email') }}</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="email" placeholder="em@gmail.com" required="" type="email" />
                                </div>
                            </div>
                            <!-- profile image -->
                            <div class="row fv-row mb-7">
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-12">
                                    <label class="form-label fw-bolder text-dark fs-6">Profile Image (Optional)</label>
                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="profile_image" placeholder="" type="file" />
                                </div>

                                <!--end::Col-->
                            </div>

                            <!-- 	<center>
                                                    <button class="btn btn-primary" data-bs-dismiss="modal" id="kt_modal_select_location_button" type="button">Save process
                                                    </button>
                                                   </center> -->

                            <!--end::Input group-->
                            <!--begin::Billing toggle-->
                            <div aria-controls="kt_customer_view_details" aria-expanded="false"
                                class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                                href="#ckt_modal_add_customer_billing_info" role="button">Corporate Registration Details
                                <span class="ms-2 rotate-180">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Billing toggle-->
                            <!--begin::Billing form-->
                            <div class="collapse show" id="ckt_modal_add_customer_billing_info">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Company Address</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="caddress"
                                        placeholder="Market square" value="101, Collins Street" />
                                    <!--end::Input-->
                                </div>

                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">TIN Number</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="tin"
                                        placeholder="1234567753" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">CAC DOC</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="cac" placeholder=""
                                        type="file" value="Melbourne" />
                                    <!--end::Input-->
                                </div>
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Evidence of identity</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" name="idcard" placeholder=""
                                        type="file" value="Melbourne" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->

                                <div class="row g-9 mb-7">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">BANK ACC NO</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" name="bank_number"
                                            placeholder="2299833" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">BANK NAME</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" name="bank_name"
                                            placeholder="DANIEL" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">BANK</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" name="bank"
                                            placeholder="GTBANK" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Billing form-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button class="btn btn-light me-3" id="ckt_modal_add_customer_cancel"
                            type="reset">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button class="btn btn-primary" id="ckt_modal_add_customer_submit" type="submit">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Modal - Customers - Add-->
    <!--end::Modals-->
@endsection
