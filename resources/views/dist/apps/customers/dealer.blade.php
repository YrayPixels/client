@extends('layouts.newapp', ['title' => 'Customer List'])

@section('content')
    <!--end::Header-->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body p-0">

                    <div class="card-px text py-10 my-10">
                        <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                            @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button class="close" data-dismiss="alert" type="button">×</button>
                                    {{ Session::get('success') }}
                                </div>
                            @elseif(Session::has('failed'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button class="close" data-dismiss="alert" type="button">×</button>
                                    {{ Session::get('failed') }}
                                </div>
                            @endif
                        </div>
                        <!--begin::Title-->
                        <!--end::Description-->
                        <!--begin::Action-->
                        <a class="btn btn-primary" href="{{ url('dealers') }}">View List</a>

                        <a class="btn btn-warning" data-bs-target="#ckt_modal_add_customer" data-bs-toggle="modal"
                            href="#"> Corporate clients</a>
                        <!-- DEALLER -->
                        <a class="btn btn-success" data-bs-target="#kt_modal_add_customer" data-bs-toggle="modal"
                            href="#">Dealers clients</a>
                        <!--end::Action-->
                    </div>

                    <!--end::Wrapper-->
                    <!--begin::Illustration-->
                    <div class="text-center px-4">
                        <img alt="" class="mw-100 mh-300px" src="assets/media/illustrations/sigma-1/2.png" />
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Card body-->
            </div>

            <!--end::Card-->
            <!--begin::Modals-->
            <!--begin::Modal - Customers - Add-->
            <div aria-hidden="true" class="modal fade" id="kt_modal_add_customer" tabindex="-1">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form action="/dstore" class="" enctype="multipart/form-data" id="" method="Post">
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
                                            <rect fill="black" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" width="16" x="7.41422"
                                                y="6" />
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
                                    data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                    data-kt-scroll-max-height="auto" data-kt-scroll-offset="300px"
                                    data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll="true"
                                    id="kt_modal_add_customer_scroll">
                                    <!--begin::Input group-->

                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="user_code" required="" type="hidden"
                                        value="{{ __('DC') }}{{ date('yMHs') }}" />
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
                                            <input class="form-control form-control-solid" name="profile_image"
                                                placeholder="" type="file" />
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
                                        href="#kt_modal_add_customer_billing_info" role="button">Corporate Registration
                                        Details
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
                                            <input class="form-control form-control-solid" name="store_name"
                                                placeholder="enter your address" type="text" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">Store Address</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" name="store_address"
                                                placeholder="" type="text" value="" />
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
                                <button class="btn btn-primary" id="" type="submit">
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
                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                    id="ckt_modal_add_customer_close">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect fill="black" height="2" opacity="0.5" rx="1"
                                                transform="rotate(-45 6 17.3137)" width="16" x="6"
                                                y="17.3137" />
                                            <rect fill="black" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" width="16" x="7.41422"
                                                y="6" />
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
                                    data-kt-scroll-dependencies="#ckt_modal_add_customer_header"
                                    data-kt-scroll-max-height="auto" data-kt-scroll-offset="300px"
                                    data-kt-scroll-wrappers="#ckt_modal_add_customer_scroll" data-kt-scroll="true"
                                    id="ckt_modal_add_customer_scroll">
                                    <!--begin::Input group-->

                                    <input autocomplete="" class="form-control form-control-lg form-control-solid"
                                        name="user_code" required="" type="hidden"
                                        value="{{ __('CC') }}{{ date('yMHs') }}" />

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
                                            <label
                                                class="form-label fw-bolder text-dark fs-6">{{ _('Local Gov') }}</label>
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
                                            <label
                                                class="form-label fw-bolder text-dark fs-6">{{ _('Land Mark') }}</label>
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
                                    </div>
                                    <!-- profile image -->
                                    <div class="row fv-row mb-7">
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-12">
                                            <label class="form-label fw-bolder text-dark fs-6">Profile Image
                                                (Optional)</label>
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
                                        href="#ckt_modal_add_customer_billing_info" role="button">Corporate Registration
                                        Details
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
                                            <input class="form-control form-control-solid" name="caddress" placeholder=""
                                                value="101, Collins Street" />
                                            <!--end::Input-->
                                        </div>

                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">TIN Number</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" name="tin" placeholder=""
                                                value="" />
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
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection
