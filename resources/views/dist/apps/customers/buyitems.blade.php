@extends('layouts.newapp')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <div class="d-flex">
                        <button class="btn btn-sm btn-light btn-active-light-primary">Total
                            Items({{ $order }})
                        </button>
                    </div>
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search"
                                class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <div class="d-flex">
                        <a href="{{ url('invoice', $user->id) }}" class="btn btn-warning">Generate
                            invoice({{ $order }})
                        </a>
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
                            <button type="button" class="btn btn-danger"
                                data-kt-customer-table-select="delete_selected">Delete Selected</button>
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
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Product Name</th>
                                <th class="min-w-125px">Price</th>
                                <th class="min-w-125px">Product Number</th>
                                <th class="min-w-125px">Image</th>
                                <th class="min-w-125px">Created Date</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($products as $data)
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
                                        {{ $data->name }}
                                    </td>
                                    <!--end::Name=-->
                                    <!--begin::Email=-->
                                    <td>
                                        {{ $data->price }}
                                    </td>
                                    <!--end::Email=-->
                                    <!--begin::Company=-->
                                    <td>{{ $data->article_number }}</td>
                                    <!--end::Company=-->
                                    <!--begin::Payment method=-->
                                    <td data-filter="mastercard">
                                        <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px me-3"
                                            alt="" />**** 1386
                                    </td>
                                    <!--end::Payment method=-->
                                    <!--begin::Date=-->
                                    <td>{{ $data->createdAt }}</td>
                                    <!--end::Date=-->
                                    <!--begin::Action=-->
                                    <td class="text-end">
                                        <form method="POST" action="{{ url('order') }}">
                                            @csrf
                                            <input type="text" name="user_id" value="{{ $user->id }}" hidden>
                                            <input type="text" name="product_id" value="{{ $data->id }}" hidden>
                                            <input type="text" name="product_price" value="{{ $data->price }}" hidden>
                                            <button type="submit"
                                                class="btn btn-sm btn-light btn-active-light-primary">Select
                                                Item
                                            </button>
                                        </form>


                                    </td>
                                    <!--end::Action=-->

                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                    {{ $products->links() }}
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->


            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->

    <!--end::Modals-->
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
@endsection
