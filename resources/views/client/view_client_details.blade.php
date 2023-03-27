@extends('layouts.newapp', ['title' => 'View Clint Details'])

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
                        <div class="flex-row-fluid">
                            <table border="1px" style="width:100%">
                                <tr>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">First Name</span>

                                        </label>
                                        <input type="text" value="{{ $clients->first_name }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Last Name</span>

                                        </label>
                                        <input type="text" value="{{ $clients->last_name }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                </tr>



                                <tr>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">State</span>

                                        </label>
                                        <input type="text" value="{{ $clients->first_name }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">LGA</span>

                                        </label>
                                        <input type="text" value="{{ $clients->last_name }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                </tr>



                                <tr>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Address</span>

                                        </label>

                                        <img src="" width="120px" hiegth="120px" />
                                    </td>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Landmark</span>

                                        </label>
                                        <input type="text" value="{{ $clients->landmark }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                </tr>


                                <tr>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Phone Number</span>

                                        </label>
                                        <input type="text" value="{{ $clients->phone_no }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Email</span>

                                        </label>
                                        <input type="text" value="{{ $clients->email }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                </tr>




                                <tr>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Picture</span>

                                        </label>
                                        <input type="text" value="{{ $clients->phone_no }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">ID</span>

                                        </label>
                                        <input type="text" value="{{ $clients->code }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                </tr>



                            </table>

                            <p style="margin-top:50px;">============= Corporate Registration Details
                                ===========================================</p>

                            @if ($clients->type == 'Dealers')
                                <table class="table" border="1px">
                                    <tr>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Store Name</span>

                                            </label>
                                            <input type="text" value="{{ $clients->first_name }}" disabled
                                                class="form-control form-control-lg form-control-solid">
                                        </td>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Store Address</span>

                                            </label>
                                            <input type="text" value="{{ $clients->store_address }}" disabled
                                                class="form-control form-control-lg form-control-solid">
                                        </td>


                                    </tr>



                                    <tr>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">ID</span>

                                            </label>

                                            <img src="https://stockmgt.gapaautoparts.com/public/uploads/clientDoc/{{ $clients->id_card }}"
                                                width:150px; height="150px" />
                                        </td>



                                    </tr>

                                </table>
                            @else
                                <table class="table" border="1px">
                                    <tr>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Company Name</span>

                                            </label>
                                            <input type="text" value="{{ $clients->company_name }}" disabled
                                                class="form-control form-control-lg form-control-solid">
                                        </td>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">CAC</span>

                                            </label>
                                            <input type="text" value="{{ $clients->cac_number }}" disabled
                                                class="form-control form-control-lg form-control-solid">
                                        </td>


                                    </tr>


                                    <tr>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Company Address</span>

                                            </label>
                                            <input type="text" value="{{ $clients->company_address }}" disabled
                                                class="form-control form-control-lg form-control-solid">
                                        </td>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">TIN Number</span>

                                            </label>
                                            <input type="text" value="{{ $clients->tin_number }}" disabled
                                                class="form-control form-control-lg form-control-solid">
                                        </td>


                                    </tr>

                                    <tr>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">ID</span>

                                            </label>

                                            <img src="https://stockmgt.gapaautoparts.com/public/uploads/clientDoc/{{ $clients->id_card }}"
                                                width:150px; height="150px" />
                                        </td>



                                    </tr>


                                    <tr>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">CAC Doc</span>

                                            </label>

                                            <img src="https://stockmgt.gapaautoparts.com/public/uploads/clientDoc/{{ $clients->cac_doc }}"
                                                width:150px; height="150px" />
                                        </td>



                                    </tr>


                                    <tr>


                                        <td>
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">CAC Form 7</span>

                                            </label>

                                            <img src="https://stockmgt.gapaautoparts.com/public/uploads/clientDoc/{{ $clients->cac_7 }}"
                                                width:150px; height="150px" />
                                        </td>



                                    </tr>

                                </table>
                            @endif



                            <table class="table" border="1px">
                                <tr>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Bank Name</span>

                                        </label>
                                        <input type="text" value="{{ $clients->bank_name }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Account Name </span>

                                        </label>
                                        <input type="text" value="{{ $clients->account_name }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>


                                </tr>


                                <tr>


                                    <td>
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">Account Number</span>

                                        </label>
                                        <input type="text" value="{{ $clients->account_number }}" disabled
                                            class="form-control form-control-lg form-control-solid">
                                    </td>




                                </tr>



                            </table>

                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Approve</a>
                                        <a href="" class="btn btn-info btn-sm">Suspend</a>
                                        <a href="" class="btn btn-danger btn-sm">Decline</a>
                                    </td>

                                </tr>
                            </table>

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
