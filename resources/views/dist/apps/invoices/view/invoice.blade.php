<?php
$da = strtotime('+1 week');

?>
@extends('layouts.newapp', ['title' => 'Customer List'])

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!-- begin::Invoice 1-->
            <div class="card">
                <!-- begin::Body-->
                <div class="card-body py-20">
                    <!-- begin::Wrapper-->
                    <div class="mw-lg-950px mx-auto w-100">
                        <!-- begin::Header-->
                        <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                            <h4 class="fw-boldest text-gray-800 fs-2qx pe-2 pb-7">INVOICE #{{ date('ydhs') }}
                            </h4>
                            <!--end::Logo-->
                            <div class="text-sm-end">
                                <!--begin::Logo-->
                                <img alt="Logo" class="img-fluid" src="https://gapaautoparts.com/gapalogo.png"
                                    style="height:100px;" />
                                <!--end::Logo-->
                                <!--begin::Text-->

                                <div class="text-sm-end fw-bold fs-4 text-muted mt-7">
                                    <div>NAME : {{ $dealer->first_name }} {{ $dealer->last_name }}</div>
                                    <div>ID : {{ $dealer->code }}</div>
                                </div>
                                <!--end::Text-->

                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="border-bottom pb-8">
                            <!--begin::Image-->

                            <!--end::Image-->
                            <!--begin::Wrapper-->
                            <div class="d-flex justify-content-between flex-column flex-md-row">
                                <!--begin::Content-->
                                <div class="flex-grow-1 pt-8 mb-10">
                                    <!--begin::Table-->
                                    <div class="table-responsive border-bottom mb-14">
                                        <table class="table">
                                            <thead>
                                                <tr class="border-bottom fs-6 fw-bolder text-muted text-uppercase">
                                                    <th class="min-w-175px pb-9">Product Name</th>
                                                    <th class="min-w-70px pb-9 text-end">Hours</th>
                                                    <th class="min-w-80px pb-9 text-end">Rate</th>
                                                    <th class="min-w-100px pe-lg-6 pb-9 text-end">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $data)
                                                    <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                        <td class="d-flex align-items-center pt-11">
                                                            <i
                                                                class="fa fa-genderless text-danger fs-1 me-2"></i>{{ $data->name }}
                                                        </td>
                                                        <td class="pt-11">80</td>
                                                        <td class="pt-11"> ₦{{ $data->price }}</td>
                                                        <td class="pt-11 fs-5 pe-lg-6 text-dark fw-boldest">
                                                            ₦{{ $data->price }}</td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column mw-md-300px w-100">
                                        <h5>Account Details</h5>
                                        <div class="d-flex text-start">
                                            <p class="fw-bold pe-3">
                                                Account Number:
                                            </p>
                                            <p>
                                                0504340052
                                            </p>
                                        </div>
                                        <div class="d-flex text-start">
                                            <p class="fw-bold pe-3">
                                                Account Name:
                                            </p>
                                            <p>
                                                Georgie Auto Parts & Accessories Ltd
                                            </p>
                                        </div>
                                        <div class="d-flex text-start">
                                            <p class="fw-bold pe-3">
                                                Bank Name:
                                            </p>
                                            <p>
                                                Sterling Bank
                                            </p>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="border-end d-none d-md-block mh-400px mx-5"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="text-end pt-10">
                                    <!--begin::Total Amount-->
                                    <div class="fs-3 fw-bolder text-muted mb-3">TOTAL AMOUNT</div>
                                    <div class="fs-xl-2x fs-2 fw-boldest">
                                        ₦{{ $sumTotal }}
                                    </div>
                                    <!--form storing invoice -->
                                    <form action="{{ url('/invoice') }}" method="POST">
                                        @csrf
                                        <div class="text-muted fw-bold">Taxes included<input class="form-control "
                                                type="number" name="added_price" value="{{ $sumTotal }}"></div>
                                        <!--end::Total Amount-->
                                        <div class="border-bottom w-100 my-7 my-lg-16"></div>
                                        <!--begin::Invoice To-->
                                        <div class="text-gray-600 fs-6 fw-bold mb-3">INVOICE TO.</div>
                                        <div class="fs-6 text-gray-800 fw-bold mb-8">
                                            {{ $dealer->first_name . ' ' . $dealer->last_name }}

                                        </div>
                                        <!--end::Invoice To-->
                                        <!--begin::Invoice No-->

                                        <div class="fw-bold pe-5">Issue Date</div>
                                        <div class="text-end fw-norma">{{ date('d M Y') }} </div>
                                        <!--end::Invoice No-->
                                        <!--begin::Invoice Date-->
                                        <div class="fw-bold pe-5 pt-6">Due Date</div>
                                        <div class="text-end fw-norma">{{ date('d M Y', $da) }}
                                            <!--end::Item-->
                                        </div>

                                        <!--end::Invoice Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Body-->
                        <!-- begin::Footer-->
                        <div class="d-flex flex-stack flex-wrap mt-lg-16 pt-6">
                            <!-- begin::Actions-->
                            <div class="my-1 me-1">
                                <input type="" hidden name="invoice" value="#{{ date('ydhs') }}">
                                <input type="" hidden name="buyer_name"
                                    value="{{ $dealer->first_name }} {{ $dealer->last_name }}">
                                <input type="" hidden name="user_code" value="{{ $dealer->code }}">
                                <input type="" hidden name="user_id" value="{{ $dealer->id }}">
                                <input type="" hidden name="total_price" value="{{ $sumTotal }}">
                                <input type="" hidden name="issue_date" value="{{ date('d M Y') }}">
                                <input type="" hidden name="due_date" value="{{ date('d M Y', $da) }}">
                                <!-- begin::Pint-->
                                <button type="submit" class="btn btn-success my-1 me-6">Save Invoice</button>
                                </form>
                                <!-- end::Pint-->
                                <!-- begin::Download-->
                                <button type="button"
                                    class="btn btn-light-success my-1"onclick="window.print();">Download</button>
                                <!-- end::Download-->
                            </div>
                            <!-- end::Actions-->
                            <!-- begin::Action-->

                            <!-- end::Action-->
                        </div>
                        <!-- end::Footer-->
                    </div>
                    <!-- end::Wrapper-->
                </div>
                <!-- end::Body-->
            </div>
            <!-- end::Invoice 1-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
@endsection
