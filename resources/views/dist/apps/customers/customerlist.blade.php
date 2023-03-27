@extends('layouts.newapp', ['title' => 'Customer List'])

@section('content')
    <!--end::Header-->
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
                        <div class="col-md-6 me-lg-20" style="margin-left: 20px;">
                            <a class="btn  btn-light btn-active-light-primary" href="{{ url('dealers') }}">Customer List
                            </a>
                        </div>
                        <div class="col-md-6" style="margin-left: 0px;">
                            <a class="btn  btn-light btn-active-light-primary" href="{{ url('invoice') }}">Invoice List
                            </a>
                        </div>
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
                                <th class="min-w-125px">Customer ID</th>
                                <th class="min-w-125px">Customer Name</th>
                                <th class="min-w-125px">Account Type</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">Created Date</th>
                                <th class="text-end min-w-70px">Actions</th>
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
                                        <a class="text-gray-800 text-hover-primary mb-1"
                                            href="{{ url('overv', $data->id) }}">
                                            {{ $data->code }}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="text-gray-800 text-hover-primary mb-1"
                                            href="{{ url('overv', $data->id) }}">
                                            {{ $data->first_name }}
                                            {{ $data->last_name }}
                                        </a>
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Email=-->
                                    <td>
                                        {{ $data->type }}
                                    </td>

                                    <td>
                                        <a class="text-gray-800 text-hover-primary mb-1"
                                            href="{{ url('overv', $data->id) }}">
                                            {{ $data->email }}
                                        </a>
                                    </td>
                                    <!--end::Email=-->
                                    <!--begin::Company=-->
                                    <td>
                                        @if ($data->status == 1)
                                            <button class="btn btn-primary">Pending</button>
                                        @elseif($data->status == 2)
                                            <button class="btn btn-success">Approved</button>
                                        @elseif($data->status == 1)
                                            <button class="btn btn-danger">Declined</button>
                                        @endif
                                    </td>
                                    <!--end::Company=-->
                                    <!--begin::Date=-->
                                    <td>{{ $data->created_at }}</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <a class="btn btn-sm btn-light btn-active-light-primary"
                                            data-kt-menu-placement="bottom-end" data-kt-menu-trigger=""
                                            href="{{ url('overv', $data->id) }}">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->

                                            <!--end::Svg Icon-->
                                        </a>

                                    </td>
                                    <!--end::Action=-->

                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    {{ $dealers->links() }}
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    <!--end::Modals-->
    <!--begin::Scrolltop-->
@endsection
