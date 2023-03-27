@extends('layouts.newapp', ['title' => 'View Clint'])

@section('content')
    <div class="card card-flush m-20">
        <!--begin::Card header-->
        <div class="card-header mt-5">

            <div class="card-toolbar my-1">


                <div class="d-flex align-items-center position-relative my-1">
                    <a href="/dealer" class="btn btn-lg btn-info">Back</a>

                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->


                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper">
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">

                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form" method="POST"
                                action="{{ route('update_client', ['id' => $clients->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Step 1-->


                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">First Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="first_name" value="{{ $clients->first_name }}" required />

                                            <!--end::Input-->




                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Last Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="last_name" value="{{ $clients->last_name }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Phone Number</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="phone_no"value="{{ $clients->phone_no }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Email</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-lg form-control-solid"
                                                name="email" value="{{ $clients->email }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Address</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="address" value="{{ $clients->address }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Land Mark</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="landmark" value="{{ $clients->landmark }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">State</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-control form-control-lg form-control-solid" name="state"
                                                id="state" required onchange="getLgA()">
                                                <option>---- Select State-----</option>
                                                @foreach ($states as $state)
                                                    @if ($state->id == $clients->state)
                                                        <option selected value="{{ $state->id }}">{{ $state->title }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $state->id }}">{{ $state->title }}</option>
                                                    @endif
                                                @endforeach

                                            </select>

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">LGA</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-control form-control-lg form-control-solid" name="lga"
                                                required id="lga">
                                                <option>{{ $clients->lga }}</option>
                                            </select>

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>




                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Type</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-control form-control-lg form-control-solid" name="type"
                                                required>
                                                <option>-------- Select Type--------</option>
                                                @if ($clients->type == 'Corporate Clients')
                                                    <option selected value="Corporate Clients">Corporate Clients</option>
                                                    <option value="Dealers">Dealers</option>
                                                @else
                                                    <option value="Corporate Clients">Corporate Clients</option>
                                                    <option selected value="Dealers">Dealers</option>
                                                @endif

                                            </select>

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>


                                <button type="submit" class="btn btn-lg btn-primary">Update
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-1 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
                                                fill="black" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>



                            </form>
                            <!--end::Form-->




                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form" method="POST"
                                action="{{ route('update_coperate_client2', ['id' => $clients->id]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <!--begin::Step 1-->


                                <div class="row" style="margin-top:80px">
                                    <p>============= Corporate Registration Details
                                        ===========================================
                                    <p>
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Store Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="store_name" value="{{ $clients->store_name }}" required />

                                            <!--end::Input-->




                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Store Address</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="store_address" value="{{ $clients->store_address }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>






                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Bank Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="bank_name" value="{{ $clients->bank_name }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>




                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Account Number</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="account_number" value="{{ $clients->account_number }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Account Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="account_name" value="{{ $clients->account_name }}" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>





                                <div class="row">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Evidence of Identity</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="file" class="form-control form-control-lg form-control-solid"
                                                name="evidence" required />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>






                                <button type="submit" class="btn btn-lg btn-primary">Update
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-1 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
                                                fill="black" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>



                            </form>


                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>


                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Card body-->
    </div>
@endsection
