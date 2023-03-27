<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free."
        name="description" />
    <meta
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"
        name="keywords" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta charset="utf-8" />
    <meta content="en_US" property="og:locale" />
    <meta content="article" property="og:type" />
    <meta content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme"
        property="og:title" />
    <meta content="https://keenthemes.com/metronic" property="og:url" />
    <meta content="Keenthemes | Metronic" property="og:site_name" />
    <link href="https://preview.keenthemes.com/metronic8" rel="canonical" />
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <link href="https://gapaautoparts.com/gapalogo.png" rel="shortcut icon" />
    <!--begin::Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="https://stockmgt.gapaautoparts.com/public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="https://stockmgt.gapaautoparts.com/public/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="https://stockmgt.gapaautoparts.com/public/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />

    <link href="https://stockmgt.gapaautoparts.com/public/assets/plugins/custom/datatables/datatables.bundle.css"
        rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.js"
        integrity="sha512-vX/u24VoVNEFnY4hejf35cn0a3id3sciX/7WHtSO0DjjeViFQI0OgpGdQykHTjW+IKpLRDN6jWwvnGX98QiRIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <title>GAPA::.Stock Management System</title>
    <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <!-- Core build with no theme, formatting, non-essential modules -->
    <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>

</head>

<body>

    <body class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled" id="kt_body">
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            @if (Auth::check())
                <div class="page d-flex flex-row flex-column-fluid">
                    <!--begin::Aside-->
                    <div class="aside" data-kt-drawer-activate="{default: true, lg: false}"
                        data-kt-drawer-direction="start" data-kt-drawer-name="aside" data-kt-drawer-overlay="true"
                        data-kt-drawer-toggle="#kt_aside_toggle" data-kt-drawer-width="auto" data-kt-drawer="true"
                        id="kt_aside">
                        <!--begin::Logo-->
                        <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
                            <a href="/">
                                <img alt="Logo" class="h-40px" src="https://gapaautoparts.com/gapalogo.png" />
                            </a>
                        </div>
                        <!--end::Logo-->

                        <!--begin::Nav-->

                        <div class="aside-menu flex-column-fluid pt-5 pb-5 py-lg-5" id="kt_aside_menu">
                            <!--begin::Aside menu-->
                            <div class="w-100 hover-scroll-overlay-y scroll-ps d-flex"
                                data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                                data-kt-scroll-height="auto" data-kt-scroll-offset="0"
                                data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll="true"
                                id="kt_aside_menu_wrapper">
                                <div class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-bold fs-6"
                                    data-kt-menu="true" id="kt_aside_menu">

                                    <div class="menu-item py-5" style="marging-top:40px;">
                                        <a class="menu-link" data-bs-dismiss="click" data-bs-placement="right"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" href="/dealer"
                                            title="Dashboard">
                                            <span class="menu-icon" style="background-color:#492F92; color:#fff">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo13/dist/../src/media/svg/icons/Home/Cupboard.svg--><svg
                                                        height="24px" version="1.1" viewBox="0 0 24 24" width="24px"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g fill-rule="evenodd" fill="yellow" stroke-width="1"
                                                            stroke="none">
                                                            <rect height="24" width="24" x="0"
                                                                y="0" />
                                                            <path
                                                                d="M3.5,3 L9.5,3 C10.3284271,3 11,3.67157288 11,4.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L3.5,20 C2.67157288,20 2,19.3284271 2,18.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z M9,9 C8.44771525,9 8,9.44771525 8,10 L8,12 C8,12.5522847 8.44771525,13 9,13 C9.55228475,13 10,12.5522847 10,12 L10,10 C10,9.44771525 9.55228475,9 9,9 Z"
                                                                fill="#000000" opacity="0.3" />
                                                            <path
                                                                d="M14.5,3 L20.5,3 C21.3284271,3 22,3.67157288 22,4.5 L22,18.5 C22,19.3284271 21.3284271,20 20.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,4.5 C13,3.67157288 13.6715729,3 14.5,3 Z M20,9 C19.4477153,9 19,9.44771525 19,10 L19,12 C19,12.5522847 19.4477153,13 20,13 C20.5522847,13 21,12.5522847 21,12 L21,10 C21,9.44771525 20.5522847,9 20,9 Z"
                                                                fill="#000000"
                                                                transform="translate(17.500000, 11.500000) scale(-1, 1) translate(-17.500000, -11.500000) " />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </div>

                                    @php
                                        $menu = DB::table('user_menu')
                                            ->join('menu', 'menu.id', 'user_menu.menu_id')
                                            ->where('user_menu.status', '1')
                                            ->where('user_menu.user_id', Auth::user()->id)
                                            ->get();
                                    @endphp

                                    {{-- @foreach ($menu as $m)
                                        <div class="menu-item py-3">
                                            <a class="menu-link" data-bs-dismiss="click" data-bs-placement="right"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                href="{{ $m->link }}" title="{{ $m->title }}">
                                                <span class="menu-icon" style="background-color:#492F92; color:#fff">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                    <span class="svg-icon svg-icon-2x">

                                                        {!! $m->icon !!}

                                                    </span>
                                                    <!--end::Svg Icon-->

                                                </span>
                                                <!--end::Svg Icon-->
                                                </span>
                                            </a>
                                        </div>
                                    @endforeach --}}

                                    <div class="menu-item py-3">
                                        <a class="menu-link" data-bs-dismiss="click" data-bs-placement="right"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" href="/invoice"
                                            title="">
                                            <span class="menu-icon" style="background-color:#492F92; color:#fff">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-2x">
                                                    <svg fill="#ffffff" height="200px" width="200px" version="1.1"
                                                        id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 512.002 512.002" xml:space="preserve"
                                                        stroke="#ffffff">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="M128.257,392.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533s3.866,8.533,8.576,8.533s8.533-3.823,8.533-8.533 S132.967,392.533,128.257,392.533z">
                                                                        </path>
                                                                        <path
                                                                            d="M179.457,392.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533s3.866,8.533,8.576,8.533s8.533-3.823,8.533-8.533 S184.167,392.533,179.457,392.533z">
                                                                        </path>
                                                                        <path
                                                                            d="M247.468,273.067h-68.267c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h68.267 c4.719,0,8.533-3.823,8.533-8.533S252.187,273.067,247.468,273.067z">
                                                                        </path>
                                                                        <path
                                                                            d="M213.334,324.267h-34.133c-4.719,0-8.533,3.823-8.533,8.533c0,4.71,3.814,8.533,8.533,8.533h34.133 c4.719,0,8.533-3.823,8.533-8.533C221.868,328.09,218.053,324.267,213.334,324.267z">
                                                                        </path>
                                                                        <path
                                                                            d="M358.401,298.667c-9.412,0-17.067-7.654-17.067-17.067c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533 c0,15.855,10.914,29.107,25.6,32.922v1.212c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533v-1.212 c14.686-3.814,25.6-17.067,25.6-32.922c0-18.825-15.309-34.133-34.133-34.133c-9.412,0-17.067-7.654-17.067-17.067 c0-9.412,7.654-17.067,17.067-17.067c9.412,0,17.067,7.654,17.067,17.067c0,4.71,3.814,8.533,8.533,8.533 s8.533-3.823,8.533-8.533c0-15.855-10.914-29.107-25.6-32.922v-1.212c0-4.71-3.814-8.533-8.533-8.533 c-4.719,0-8.533,3.823-8.533,8.533v1.212c-14.686,3.814-25.6,17.067-25.6,32.922c0,18.825,15.309,34.133,34.133,34.133 c9.412,0,17.067,7.654,17.067,17.067C375.468,291.012,367.813,298.667,358.401,298.667z">
                                                                        </path>
                                                                        <path
                                                                            d="M333.057,392.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533s3.866,8.533,8.576,8.533c4.71,0,8.533-3.823,8.533-8.533 S337.768,392.533,333.057,392.533z">
                                                                        </path>
                                                                        <path
                                                                            d="M435.457,409.6c4.71,0,8.533-3.823,8.533-8.533s-3.823-8.533-8.533-8.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533 S430.747,409.6,435.457,409.6z">
                                                                        </path>
                                                                        <path
                                                                            d="M384.257,392.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533s3.866,8.533,8.576,8.533c4.71,0,8.533-3.823,8.533-8.533 S388.968,392.533,384.257,392.533z">
                                                                        </path>
                                                                        <path
                                                                            d="M349.868,102.4h34.133c4.719,0,8.533-3.823,8.533-8.533c0-4.71-3.814-8.533-8.533-8.533h-34.133 c-4.719,0-8.533,3.823-8.533,8.533C341.334,98.577,345.149,102.4,349.868,102.4z">
                                                                        </path>
                                                                        <path
                                                                            d="M230.657,392.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533s3.866,8.533,8.576,8.533s8.533-3.823,8.533-8.533 S235.367,392.533,230.657,392.533z">
                                                                        </path>
                                                                        <path
                                                                            d="M128.001,290.133h17.067c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-17.067 c-4.719,0-8.533,3.823-8.533,8.533S123.282,290.133,128.001,290.133z">
                                                                        </path>
                                                                        <path
                                                                            d="M128.001,341.333h17.067c4.719,0,8.533-3.823,8.533-8.533c0-4.71-3.814-8.533-8.533-8.533h-17.067 c-4.719,0-8.533,3.823-8.533,8.533C119.468,337.51,123.282,341.333,128.001,341.333z">
                                                                        </path>
                                                                        <path
                                                                            d="M469.334,0H42.668c-4.719,0-8.533,3.823-8.533,8.533v494.933c0,3.447,2.074,6.562,5.265,7.885 c1.058,0.435,2.167,0.648,3.268,0.648c2.219,0,4.403-0.87,6.033-2.5l45.167-45.167l45.167,45.167 c3.337,3.337,8.73,3.337,12.066,0l28.1-28.1l28.1,28.1c3.337,3.337,8.73,3.337,12.066,0l28.1-28.1l11.034,11.034 c3.337,3.336,8.73,3.336,12.066,0l28.1-28.1l28.1,28.1c3.337,3.336,8.73,3.336,12.066,0l19.567-19.567l19.567,19.567 c3.337,3.336,8.73,3.336,12.066,0l45.167-45.167l28.1,28.1c0.171,0.179,0.35,0.341,0.538,0.495c0,0.009,0.008,0.009,0.008,0.009 v0.009c1.399,1.169,3.174,1.894,5.112,1.98c0.316,0.009,0.631,0.009,0.964-0.009h0.009c1.724-0.128,3.311-0.751,4.599-1.749 c0.461-0.35,0.879-0.751,1.254-1.186c1.289-1.493,2.074-3.43,2.082-5.564v-0.017V8.533C477.868,3.823,474.053,0,469.334,0z M460.801,448.734l-19.567-19.567c-3.337-3.336-8.73-3.336-12.066,0l-45.167,45.167l-19.567-19.567 c-3.336-3.337-8.73-3.337-12.066,0l-19.567,19.567l-28.1-28.1c-3.336-3.337-8.73-3.337-12.066,0l-28.1,28.1L253.501,463.3 c-3.337-3.337-8.73-3.337-12.066,0l-28.1,28.1l-28.1-28.1c-1.664-1.664-3.849-2.5-6.033-2.5c-2.185,0-4.369,0.836-6.033,2.5 l-28.1,28.1l-45.167-45.167c-3.337-3.337-8.73-3.337-12.066,0l-36.634,36.634V17.067h409.6V448.734z">
                                                                        </path>
                                                                        <path
                                                                            d="M77.057,409.6c4.71,0,8.533-3.823,8.533-8.533s-3.823-8.533-8.533-8.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533 S72.347,409.6,77.057,409.6z">
                                                                        </path>
                                                                        <path
                                                                            d="M128.001,238.933h17.067c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-17.067 c-4.719,0-8.533,3.823-8.533,8.533S123.282,238.933,128.001,238.933z">
                                                                        </path>
                                                                        <path
                                                                            d="M281.857,409.6c4.71,0,8.533-3.823,8.533-8.533s-3.823-8.533-8.533-8.533h-0.085c-4.71,0-8.491,3.823-8.491,8.533 S277.147,409.6,281.857,409.6z">
                                                                        </path>
                                                                        <path
                                                                            d="M179.201,187.733h51.2c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-51.2 c-4.719,0-8.533,3.823-8.533,8.533S174.482,187.733,179.201,187.733z">
                                                                        </path>
                                                                        <path
                                                                            d="M128.001,187.733h17.067c4.719,0,8.533-3.823,8.533-8.533s-3.814-8.533-8.533-8.533h-17.067 c-4.719,0-8.533,3.823-8.533,8.533S123.282,187.733,128.001,187.733z">
                                                                        </path>
                                                                        <path
                                                                            d="M264.534,221.867h-85.333c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h85.333 c4.719,0,8.533-3.823,8.533-8.533S269.253,221.867,264.534,221.867z">
                                                                        </path>
                                                                        <path
                                                                            d="M128.001,102.4h136.533c4.719,0,8.533-3.823,8.533-8.533c0-4.71-3.814-8.533-8.533-8.533H128.001 c-4.719,0-8.533,3.823-8.533,8.533C119.468,98.577,123.282,102.4,128.001,102.4z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>


                                                </span>
                                                <!--end::Svg Icon-->

                                            </span>
                                            <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </div>

                                    <div class="menu-item py-3">
                                        <a class="menu-link" data-bs-dismiss="click" data-bs-placement="right"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" href="/dealers"
                                            title="">
                                            <span class="menu-icon" style="background-color:#492F92; color:#fff">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-2x">
                                                    <svg fill="#ffffff" height="200px" width="200px" version="1.1"
                                                        id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g transform="translate(0 1)">
                                                                <g>
                                                                    <g>
                                                                        <path
                                                                            d="M486.4,423.96c-50.93-27.008-89.996-42.152-124.772-47.958l3.599-4.948c1.707-1.707,2.56-4.267,1.707-6.827 l-7.997-31.987c2.898-4.097,5.632-8.333,8.193-12.688c31.8-10.823,47.881-29.118,50.583-56.054 c13.968-0.728,26.02-13.195,26.02-27.271v-64c0-14.012-11.147-26.429-25.75-27.26C416.104,95.671,394.368-1,256-1 c-30.505,0-59.497,6.046-84.14,18.129C154.392,5.665,133.469-1,110.933-1C49.493-1,0,48.493,0,109.933 c0,46.305,28.115,85.819,68.267,102.479v23.814c0,14.507,12.8,27.307,28.16,27.307h12.8c4.694,0,9.205-1.346,13.166-3.651 c4.84,25.68,15.519,50.937,30.671,72.357l-7.997,31.987c0,1.707,0,4.267,1.707,6.827l3.599,4.948 c-34.776,5.807-73.842,20.95-124.772,47.958C9.387,431.64,0,447.853,0,465.773v36.693C0,507.587,3.413,511,8.533,511h204.8h3.413 h78.507h3.413h204.8c5.12,0,8.533-3.413,8.533-8.533v-36.693C512,448.707,501.76,432.493,486.4,423.96z M256.047,404.441 l20.433,46.826h-41.245L256.047,404.441z M229.035,468.333h53.897l4.995,25.6h-64.013L229.035,468.333z M345.6,348.867 l3.413,15.36l-8.717,11.969c-0.556,0.455-1.071,1.006-1.523,1.684l-35.495,49.147l-11.262,15.464l-23.005-51.761 c28.058-3.422,53.044-17.722,73.077-38.212C343.272,351.324,344.444,350.111,345.6,348.867z M378.921,295.784 c4.813-11.711,8.441-23.884,10.735-36.154c3.249,1.968,6.948,3.283,10.936,3.729 C399.113,275.421,393.754,286.809,378.921,295.784z M425.813,171.373v64c0,5.12-4.267,10.24-10.24,10.24h-12.8 c-5.12,0-10.24-4.267-10.24-10.24V229.4v-58.027c0-5.12,4.267-10.24,10.24-10.24h12.8 C420.693,161.133,425.813,165.4,425.813,171.373z M256,16.067c52.597,0,141.118,17.17,144.924,128.992 c-3.576,0.367-7.001,1.454-10.099,3.124C380.441,83.202,323.787,33.133,256,33.133c-18.73,0-37.46,3.95-55.035,11.843 c-4.261-5.906-9.089-11.371-14.407-16.319C207.174,20.275,230.982,16.067,256,16.067z M17.067,109.933 c0-52.053,41.813-93.867,93.867-93.867c32.952,0,61.795,16.76,78.53,42.263c0.227,0.785,0.527,1.503,0.83,2.11 c8.742,13.511,13.778,29.243,14.429,45.816c0.008,0.197,0.016,0.395,0.022,0.592c0.034,1.026,0.055,2.053,0.055,3.085 c0,1.354-0.034,2.701-0.091,4.041c-0.005,0.128-0.009,0.256-0.014,0.384c-0.063,1.353-0.154,2.698-0.273,4.035 c-0.004,0.051-0.009,0.101-0.013,0.152c-3.85,42.184-35.737,76.352-78.114,83.548c-0.651,0.163-1.302,0.42-1.929,0.757 c-4.385,0.622-8.868,0.95-13.431,0.95C58.88,203.8,17.067,161.987,17.067,109.933z M118.613,235.373 c0,5.12-4.267,10.24-10.24,10.24h-12.8c-5.12,0-10.24-4.267-10.24-10.24v-17.458c2.656,0.623,5.35,1.151,8.077,1.581 c8.401,1.682,16.802,2.017,25.203,1.371V235.373z M136.533,217.915c45.899-10.771,80.645-49.902,84.888-98.036 c0.015-0.171,0.031-0.342,0.045-0.513c0.12-1.433,0.214-2.874,0.279-4.322c0.01-0.224,0.017-0.448,0.025-0.672 c0.057-1.473,0.095-2.951,0.095-4.439c0-1.056-0.018-2.108-0.047-3.157c-0.008-0.279-0.022-0.557-0.032-0.835 c-0.028-0.794-0.062-1.586-0.106-2.376c-0.015-0.27-0.034-0.538-0.051-0.808c-0.053-0.842-0.116-1.682-0.188-2.518 c-0.016-0.18-0.031-0.361-0.048-0.541c-0.997-10.98-3.579-21.487-7.521-31.295c-0.001-0.002-0.002-0.005-0.003-0.007 c-0.32-0.796-0.648-1.587-0.986-2.374c-0.227-0.533-0.46-1.063-0.694-1.592c-0.058-0.13-0.116-0.26-0.175-0.39 c-0.671-1.498-1.363-2.986-2.097-4.453C224.427,53.613,239.787,50.2,256,50.2c65.707,0,119.467,53.76,119.467,119.467V229.4 c0,28.232-7.35,54.079-19.266,75.887c-20.368,5.908-49.669,9.446-91.667,9.446c-5.12,0-8.533,3.413-8.533,8.533 s3.413,8.533,8.533,8.533c30.745,0,56.458-1.888,77.515-5.835c-0.523,0.523-1.046,1.046-1.569,1.569 c-4.293,5.724-8.824,10.943-13.558,15.649c-20.093,18.719-44.058,30.058-67.152,31.181c-1.162-0.499-2.465-0.75-3.77-0.75 c-1.312,0-2.494,0.257-3.554,0.761c-14.136-0.648-28.603-5.129-42.316-12.793c-13.893-7.982-26.962-19.489-38.61-34.048 c-0.853-0.853-1.707-1.707-2.56-2.56l-0.498-0.166c-19.164-25.134-31.929-58.199-31.929-95.407V217.915z M242.988,390.73 l-23.005,51.761l-11.262-15.464l-35.495-49.147c-0.272-0.272-0.572-0.541-0.884-0.806l-9.356-12.847l3.413-15.36 c1.155,1.244,2.327,2.456,3.509,3.649C189.942,373.006,214.93,387.307,242.988,390.73z M17.067,465.773 c0-11.093,5.973-21.333,16.213-26.453c54.393-28.896,93.548-43.399,128.428-47.731l50.922,70.018l-6.465,32.326H17.067V465.773z M494.933,493.933H305.835l-6.465-32.326l51.474-70.777c34.757,5.245,74.615,19.737,127.877,47.636 c10.24,5.973,16.213,16.213,16.213,27.307V493.933z">
                                                                        </path>
                                                                        <path
                                                                            d="M119.467,127H153.6v17.067c0,5.12,3.413,8.533,8.533,8.533s8.533-3.413,8.533-8.533V127h8.533 c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533h-8.533V67.267c0-3.413-2.56-6.827-5.973-8.533 c-3.413-0.853-6.827,0-9.387,2.56l-42.667,51.2c-1.707,2.56-2.56,5.973-0.853,9.387S116.053,127,119.467,127z M153.6,91.16 v18.773h-16.213L153.6,91.16z">
                                                                        </path>
                                                                        <path
                                                                            d="M102.4,136.387H67.413l29.867-25.6c8.533-8.533,11.093-22.187,6.827-33.28C98.987,65.56,89.6,58.733,76.8,58.733 c-18.773,0-34.133,15.36-34.133,34.133c0,5.12,3.413,8.533,8.533,8.533s8.533-3.413,8.533-8.533 c0-9.387,7.68-17.067,17.067-17.067c7.68,0,10.24,5.973,11.093,8.533c1.707,3.413,1.707,9.387-2.56,13.653l-38.4,33.28 c-4.267,3.413-5.12,8.533-3.413,13.653c2.56,4.267,6.827,7.68,11.947,7.68H102.4c5.12,0,8.533-2.56,8.533-7.68 C110.933,139.8,107.52,136.387,102.4,136.387z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg></span>
                                                <!--end::Svg Icon-->

                                            </span>
                                            <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </div>


                                    <div class="menu-item py-3">
                                        <a class="menu-link" data-bs-dismiss="click" data-bs-placement="right"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" href="/home"
                                            title="">
                                            <span class="menu-icon" style="background-color:#492F92; color:#fff">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-2x">
                                                    <svg version="1.1" id="Layer_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff"
                                                        stroke="#ffffff">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <rect x="75.374" y="42.973"
                                                                transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 141.2102 376.4686)"
                                                                style="fill:#ffffff;" width="146.4"
                                                                height="232.032"></rect>
                                                            <g>
                                                                <path style="fill:#ffffff;"
                                                                    d="M288.277,143.71l0.748-0.748l3.795-3.795l0.001-0.001l27.774-27.776l106.384,106.385l-21.864,21.866 l-72.169-72.171c-5.772-5.771-15.129-5.772-20.906,0c-5.772,5.772-5.772,15.132,0,20.905l82.623,82.623 c2.773,2.772,6.532,4.33,10.452,4.33c3.92,0,7.679-1.558,10.452-4.33l42.771-42.771c5.772-5.772,5.772-15.132,0-20.905 L331.049,80.033c-2.773-2.772-6.532-4.33-10.452-4.33s-7.679,1.558-10.452,4.33l-27.776,27.776l-93.068-93.064 c-5.771-5.772-15.132-5.772-20.905,0L4.329,178.813c-5.772,5.772-5.772,15.132,0,20.905l103.518,103.518 c2.885,2.887,6.67,4.33,10.452,4.33c3.783,0,7.567-1.444,10.452-4.33L288.277,143.71L288.277,143.71z M118.299,271.878 l-82.613-82.613L178.85,46.102l82.611,82.613L118.299,271.878z">
                                                                </path>
                                                                <path style="fill:#ffffff;"
                                                                    d="M512,352.65c0-3.92-1.558-7.681-4.33-10.452l-54.244-54.244c-5.774-5.772-15.131-5.772-20.906,0 c-5.772,5.772-5.772,15.132,0,20.906l43.792,43.792l-17.841,17.84L327.022,239.044c-5.774-5.772-15.131-5.772-20.906,0 c-5.772,5.772-5.772,15.132,0,20.906l141.901,141.901l15.211,15.211l-17.841,17.841l-15.197-15.197 c-0.004-0.004-0.007-0.009-0.012-0.013L288.277,277.791c-2.885-2.885-6.668-4.328-10.452-4.328c-3.31,0-6.621,1.104-9.33,3.314 c-0.387,0.316-0.763,0.653-1.123,1.014c-5.772,5.772-5.772,15.132,0,20.906l131.448,131.448l-17.84,17.841L249.53,316.538 c-3.335-3.335-7.866-4.732-12.211-4.213c-2.599,0.31-5.126,1.308-7.298,2.996c-0.09,0.069-0.185,0.129-0.273,0.201 c-0.115,0.095-0.222,0.204-0.334,0.302c-0.266,0.231-0.535,0.458-0.788,0.712l0,0l0,0c-0.278,0.278-0.529,0.571-0.781,0.863 c-0.075,0.087-0.161,0.168-0.234,0.259c-0.177,0.216-0.33,0.445-0.492,0.67c-0.129,0.176-0.269,0.347-0.387,0.528 c-0.074,0.112-0.133,0.231-0.203,0.343c-0.188,0.302-0.377,0.603-0.541,0.917c-0.065,0.123-0.114,0.253-0.174,0.377 c-0.152,0.309-0.306,0.618-0.433,0.934c-0.513,1.265-0.835,2.59-0.983,3.929c-0.007,0.072-0.024,0.145-0.031,0.217 c-0.407,4.241,1.014,8.622,4.262,11.87L339.246,448.06l-17.841,17.84l-145.93-145.932c-5.772-5.772-15.132-5.772-20.906,0 c-5.774,5.772-5.772,15.132,0,20.906l156.38,156.38c2.773,2.772,6.532,4.33,10.452,4.33c3.92,0,7.679-1.558,10.452-4.33 l28.291-28.293l10.38,10.38c2.887,2.887,6.67,4.33,10.452,4.33s7.565-1.444,10.452-4.33l28.293-28.293l15.209,15.209 c2.887,2.887,6.67,4.33,10.452,4.33c3.783,0,7.565-1.444,10.452-4.33l38.747-38.745c2.772-2.772,4.33-6.532,4.33-10.452 s-1.558-7.681-4.33-10.452l-15.211-15.211l28.293-28.293C510.442,360.329,512,356.57,512,352.65z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>

                                                </span>
                                                <!--end::Svg Icon-->

                                            </span>
                                            <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Aside menu-->
                        </div>
                        <!--end::Nav-->
                        <!--begin::Footer-->
                        <div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
                            <!--begin::Menu-->
                            <div class="d-flex flex-center w-100 scroll-px" data-bs-dismiss="click"
                                data-bs-placement="right" data-bs-toggle="tooltip" title="Logout">
                                <a class="btn btn-custom" data-kt-menu-overflow="true"
                                    data-kt-menu-placement="top-start" data-kt-menu-trigger="click"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    style="color:#492F92;">
                                    {{ __('Logout') }}

                                    <span class="svg-icon">
                                        <svg fill="none" height="24"
                                            style="background-color:#492F92; color:#fff" viewBox="0 0 24 24"
                                            width="24" xmlns="http://www.w3.org/2000/svg">
                                            <rect fill="black" height="2" opacity="0.3" rx="1"
                                                transform="matrix(-1 0 0 1 15.5 11)" width="12" />
                                            <path
                                                d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
                                                fill="black" />
                                            <path
                                                d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                                fill="#C4C4C4" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->

                                </a>
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->

                                <form action="{{ route('logout') }}" class="d-none" id="logout-form" method="POST">
                                    @csrf
                                </form>

                                <!--end::Menu 2-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Aside-->
                    <!--begin::Wrapper-->
                    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                        <!--begin::Header tablet and mobile-->
                        <div class="header-mobile py-3">
                            <!--begin::Container-->
                            <div class="container d-flex flex-stack">
                                <!--begin::Mobile logo-->
                                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                                    <a href="../../demo9/dist/index.html">
                                        <img alt="Logo" class="h-35px"
                                            src="https://www.pngitem.com/pimgs/m/80-800194_transparent-users-icon-png-flat-user-icon-png.png" />
                                    </a>
                                </div>
                                <!--end::Mobile logo-->
                                <!--begin::Aside toggle-->
                                <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2x me-n1">
                                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black" />
                                            <path
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="black" opacity="0.3" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Aside toggle-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Header tablet and mobile-->
            @endif

            @if (Auth::check())
                <!--begin::Header-->
                <div class="header py-6 py-lg-0" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}"
                    data-kt-sticky="true" id="kt_header" style="background-color:#492F92;">
                    <!--begin::Container-->
                    <div class="header-container container-xxl">
                        <!--begin::Page title-->
                        <div
                            class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
                            <!--begin::Heading-->
                            <h1 class="d-flex flex-column text-dark fw-bolder my-1">
                                <span class="text-white fs-1">
                                    @isset($title)
                                        Gapa Admin | {{ $title }}
                                    @endisset
                                </span>
                            </h1>
                            <!--end::Heading-->
                        </div>
                        <!--end::Page title=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center flex-wrap">

                            <!--begin::Action-->
                            <div class="d-flex align-items-center py-3 py-lg-0">
                                <div class="me-3">
                                    <a class="btn btn-icon btn-custom btn-active-color-primary position-relative"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-trigger="click" href="#" style="background-color:navy">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-white">
                                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z"
                                                    fill="black" opacity="0.3" />
                                                <path
                                                    d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <span
                                            class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-100 animation-blink"></span>
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                            style="background-image:url('assets/media/misc/pattern-1.jpg')">
                                            <!--begin::Title-->
                                            <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                                <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Tabs-->
                                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_1">Alerts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_2">Updates</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_3">Logs</a>
                                                </li>
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_1"
                                                role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                        <svg fill="none" height="24"
                                                                            viewBox="0 0 24 24" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder"
                                                                    href="#">Project Alice</a>
                                                                <div class="text-gray-400 fs-7">Phase 1 development
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">1 hr</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                                    <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                                        <svg fill="none" height="24"
                                                                            viewBox="0 0 24 24" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect fill="black" height="20"
                                                                                opacity="0.3" rx="10"
                                                                                width="20" x="2"
                                                                                y="2" />
                                                                            <rect fill="black" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-90 11 14)"
                                                                                width="7" x="11"
                                                                                y="14" />
                                                                            <rect fill="black" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-90 11 17)"
                                                                                width="2" x="11"
                                                                                y="17" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder"
                                                                    href="#">HR Confidential</a>
                                                                <div class="text-gray-400 fs-7">Confidential staff
                                                                    documents</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                                    <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                                        <svg fill="none" height="24"
                                                                            viewBox="0 0 24 24" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder"
                                                                    href="#">Company HR</a>
                                                                <div class="text-gray-400 fs-7">Corporeate staff
                                                                    profiles</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">5 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-success">
                                                                    <!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
                                                                    <span class="svg-icon svg-icon-2 svg-icon-success">
                                                                        <svg fill="none" height="24"
                                                                            viewBox="0 0 24 24" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder"
                                                                    href="#">Project Redux</a>
                                                                <div class="text-gray-400 fs-7">New frontend admin
                                                                    theme</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 days</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
                                                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                        <svg fill="none" height="24"
                                                                            viewBox="0 0 24 24" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder"
                                                                    href="#">Project Breafing</a>
                                                                <div class="text-gray-400 fs-7">Product launch status
                                                                    update</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">21 Jan</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-info">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                                                    <span class="svg-icon svg-icon-2 svg-icon-info">
                                                                        <svg fill="none" height="24"
                                                                            viewBox="0 0 24 24" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder"
                                                                    href="#">Banner Assets</a>
                                                                <div class="text-gray-400 fs-7">Collection of banner
                                                                    images</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">21 Jan</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                                                                    <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                                        <svg fill="none" height="25"
                                                                            viewBox="0 0 24 25" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder"
                                                                    href="#">Icon Assets</a>
                                                                <div class="text-gray-400 fs-7">Collection of SVG icons
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">20 March</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                                <!--begin::View more-->
                                                <div class="py-3 text-center border-top">
                                                    <a class="btn btn-color-gray-600 btn-active-color-primary"
                                                        href="../../demo9/dist/pages/profile/activity.html">View All
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-5">
                                                            <svg fill="none" height="24" viewBox="0 0 24 24"
                                                                width="24" xmlns="http://www.w3.org/2000/svg">
                                                                <rect fill="black" height="2" opacity="0.5"
                                                                    rx="1" transform="rotate(-180 18 13)"
                                                                    width="13" x="18" y="13" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                                role="tabpanel">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column px-9">
                                                    <!--begin::Section-->
                                                    <div class="pt-10 pb-0">
                                                        <!--begin::Title-->
                                                        <h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="text-center text-gray-600 fw-bold pt-1">Outlines
                                                            keep you honest. They stoping you from amazing poorly about
                                                            drive</div>
                                                        <!--end::Text-->
                                                        <!--begin::Action-->
                                                        <div class="text-center mt-5 mb-9">
                                                            <a class="btn btn-sm btn-primary px-6"
                                                                data-bs-target="#kt_modal_upgrade_plan"
                                                                data-bs-toggle="modal" href="#">Upgrade</a>
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Illustration-->
                                                    <div class="text-center px-4">
                                                        <img alt="image" class="mw-100 mh-200px"
                                                            src="assets/media/illustrations/sigma-1/1.png" />
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Tab panel-->
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_3"
                                                role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">New order</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Just now</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">New customer</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">Payment process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">5 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">Search query</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 days</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">API connection</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">1 week</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">Database restore</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Mar 5</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">System update</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">May 15</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">Server OS update</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Apr 3</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">API rollback</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Jun 30</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">Refund process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Jul 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">Withdrawal process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Sep 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->
                                                            <!--begin::Title-->
                                                            <a class="text-gray-800 text-hover-primary fw-bold"
                                                                href="#">Mail tasks</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Dec 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                                <!--begin::View more-->
                                                <div class="py-3 text-center border-top">
                                                    <a class="btn btn-color-gray-600 btn-active-color-primary"
                                                        href="../../demo9/dist/pages/profile/activity.html">View All
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-5">
                                                            <svg fill="none" height="24" viewBox="0 0 24 24"
                                                                width="24" xmlns="http://www.w3.org/2000/svg">
                                                                <rect fill="black" height="2" opacity="0.5"
                                                                    rx="1" transform="rotate(-180 18 13)"
                                                                    width="13" x="18" y="13" />
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <div class="me-3">
                                    <a class="btn btn-icon btn-custom btn-active-color-primary"
                                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-trigger="click" href="#">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-white">
                                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                    fill="black" />
                                                <rect fill="black" height="8" opacity="0.3" rx="4"
                                                    width="8" x="8" y="3" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="assets/media/avatars/150-26.jpg" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bolder d-flex align-items-center fs-5">
                                                        {{ Auth::user()->name }}
                                                        <span
                                                            class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                                    </div>
                                                    <a class="fw-bold text-muted text-hover-primary fs-7"
                                                        href="#"> {{ Auth::user()->email }}</a>
                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>

                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <div class="menu-content px-5">
                                                <div class="menu-item px-5">
                                                    <a class="menu-link px-5" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form action="{{ route('logout') }}" class="d-none"
                                                        id="logout-form" method="POST">
                                                        @csrf
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--<a class="btn btn-primary" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal" href="#">New Goal</a>-->
                            </div>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                    <div class="header-offset"></div>
                </div>
                <!--end::Header-->
            @endif
            @yield('content')
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-gray-400 fw-bold me-1">Created by</span>
                        <a class="text-muted text-hover-primary fw-bold me-2 fs-6" href="https://silexsecure.com"
                            target="_blank">Silexsecure</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->

                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
        </div>
        <!--end::Page-->
        </div>
        <!--end::Root-->

        <!--begin::Modals-->
        <!--begin::Modal - Invite Friends-->
        <div aria-hidden="true" class="modal fade" id="kt_modal_invite_friends" tabindex="-1">
            <!--begin::Modal dialog-->
            <div class="modal-dialog mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <!--begin::Heading-->
                        <div class="text-center mb-13">
                            <!--begin::Title-->
                            <h1 class="mb-3">Invite a Friend</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-bold fs-5">If you need more info, please check out
                                <a class="link-primary fw-bolder" href="#">FAQ Page</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Google Contacts Invite-->
                        <div class="btn btn-light-primary fw-bolder w-100 mb-8">
                            <img alt="Logo" class="h-20px me-3"
                                src="assets/media/svg/brand-logos/google-icon.svg" />Invite Gmail Contacts
                        </div>
                        <!--end::Google Contacts Invite-->
                        <!--begin::Separator-->
                        <div class="separator d-flex flex-center mb-8">
                            <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
                        </div>
                        <!--end::Separator-->
                        <!--begin::Textarea-->
                        <textarea class="form-control form-control-solid mb-8" placeholder="Type or paste emails here" rows="3"></textarea>
                        <!--end::Textarea-->
                        <!--begin::Users-->
                        <div class="mb-10">
                            <!--begin::Heading-->
                            <div class="fs-6 fw-bold mb-2">Your Invitations</div>
                            <!--end::Heading-->
                            <!--begin::List-->
                            <div class="mh-300px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Emma Smith</a>
                                            <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option selected="selected" value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Melody Macy</a>
                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option selected="selected" value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Max Smith</a>
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option selected="selected" value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Sean Bean</a>
                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option selected="selected" value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Brian Cox</a>
                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option selected="selected" value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Mikaela Collins</a>
                                            <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option selected="selected" value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Francis Mitcham</a>
                                            <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option selected="selected" value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Olivia Wild</a>
                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option selected="selected" value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Neil Owen</a>
                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option selected="selected" value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Dan Wilson</a>
                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option selected="selected" value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Emma Bold</a>
                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option selected="selected" value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Ana Crown</a>
                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option selected="selected" value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Robert Doe</a>
                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option selected="selected" value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">John Miller</a>
                                            <div class="fw-bold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option selected="selected" value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Lucy Kunic</a>
                                            <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option selected="selected" value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-10.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Ethan Wilder</a>
                                            <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option selected="selected" value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2"
                                                href="#">Emma Smith</a>
                                            <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                            data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option selected="selected" value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Users-->
                        <!--begin::Notice-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="me-5 fw-bold">
                                <label class="fs-6">Adding Users by Team Members</label>
                                <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input checked="checked" class="form-check-input" type="checkbox"
                                    value="1" />
                                <span class="form-check-label fw-bold text-muted">Allowed</span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Invite Friend-->
        <!--begin::Modal - Create App-->
        <div aria-hidden="true" class="modal fade" id="kt_modal_create_app" tabindex="-1">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>Create App</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                    <div class="modal-body py-lg-10 px-lg-10">
                        <!--begin::Stepper-->
                        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                            id="kt_modal_create_app_stepper">
                            <!--begin::Aside-->
                            <div
                                class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                                <!--begin::Nav-->
                                <div class="stepper-nav ps-lg-10">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item current" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Details</h3>
                                            <div class="stepper-desc">Name your App</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Frameworks</h3>
                                            <div class="stepper-desc">Define your app framework</div>
                                        </div>
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Database</h3>
                                            <div class="stepper-desc">Select the app database type</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Step 3-->
                                    <!--begin::Step 4-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Billing</h3>
                                            <div class="stepper-desc">Provide payment details</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Step 4-->
                                    <!--begin::Step 5-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Line-->
                                        <div class="stepper-line w-40px"></div>
                                        <!--end::Line-->
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Completed</h3>
                                            <div class="stepper-desc">Review and Submit</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Step 5-->
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--begin::Aside-->
                            <!--begin::Content-->
                            <div class="flex-row-fluid py-lg-5 px-lg-15">
                                <!--begin::Form-->
                                <form class="form" id="kt_modal_create_app_form" novalidate="novalidate">
                                    <!--begin::Step 1-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                    <span class="required">App Name</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify your unique app name"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-lg form-control-solid"
                                                    name="name" placeholder="" type="text"
                                                    value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                    <span class="required">Category</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Select your app category"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Options-->
                                                <div class="fv-row">
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-1 svg-icon-primary">
                                                                        <svg fill="none" height="24"
                                                                            viewBox="0 0 24 24" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Quick Online
                                                                    Courses</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure is just one SEO</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" name="category"
                                                                type="radio" value="1" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                                    <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                                        <svg height="24px" viewBox="0 0 24 24"
                                                                            width="24px"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g fill-rule="evenodd" fill="none"
                                                                                stroke-width="1" stroke="none">
                                                                                <rect fill="#000000" height="5"
                                                                                    rx="1" width="5"
                                                                                    x="5" y="5" />
                                                                                <rect fill="#000000" height="5"
                                                                                    opacity="0.3" rx="1"
                                                                                    width="5" x="14"
                                                                                    y="5" />
                                                                                <rect fill="#000000" height="5"
                                                                                    opacity="0.3" rx="1"
                                                                                    width="5" x="5"
                                                                                    y="14" />
                                                                                <rect fill="#000000" height="5"
                                                                                    opacity="0.3" rx="1"
                                                                                    width="5" x="14"
                                                                                    y="14" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Face to Face
                                                                    Discussions</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure is just one aspect</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" name="category"
                                                                type="radio" value="2" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-success">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-1 svg-icon-success">
                                                                        <svg fill="none" height="24"
                                                                            viewBox="0 0 24 24" width="24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                                                                fill="black" opacity="0.3" />
                                                                            <path
                                                                                d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Full Intro
                                                                    Training</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure copywriting</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" name="category"
                                                                type="radio" value="3" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end:Options-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                    <span class="required">Select Framework</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify your apps framework"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="fab fa-html5 text-warning fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">HTML5</span>
                                                            <span class="fs-7 text-muted">Base Web Projec</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input checked="checked" class="form-check-input"
                                                            name="framework" type="radio" value="1" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="fab fa-react text-success fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">ReactJS</span>
                                                            <span class="fs-7 text-muted">Robust and flexible app
                                                                framework</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" name="framework"
                                                            type="radio" value="2" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="fab fa-angular text-danger fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">Angular</span>
                                                            <span class="fs-7 text-muted">Powerful data
                                                                mangement</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" name="framework"
                                                            type="radio" value="3" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="fab fa-vuejs text-primary fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">Vue</span>
                                                            <span class="fs-7 text-muted">Lightweight and responsive
                                                                framework</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" name="framework"
                                                            type="radio" value="4" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="required fs-5 fw-bold mb-2">Database Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-lg form-control-solid"
                                                    name="dbname" placeholder="" type="text"
                                                    value="master_db" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                    <span class="required">Select Database Engine</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Select your app database engine"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="fas fa-database text-success fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">MySQL</span>
                                                            <span class="fs-7 text-muted">Basic MySQL database</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input checked="checked" class="form-check-input"
                                                            name="dbengine" type="radio" value="1" />
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="fab fa-google text-danger fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">Firebase</span>
                                                            <span class="fs-7 text-muted">Google based app data
                                                                management</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" name="dbengine"
                                                            type="radio" value="2" />
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="fab fa-amazon text-warning fs-2x"></i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bolder fs-6">DynamoDB</span>
                                                            <span class="fs-7 text-muted">Amazon Fast NoSQL
                                                                Database</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" name="dbengine"
                                                            type="radio" value="3" />
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 3-->
                                    <!--begin::Step 4-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">Name On Card</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify a card holder's name"></i>
                                                </label>
                                                <!--end::Label-->
                                                <input class="form-control form-control-solid" name="card_name"
                                                    placeholder="" type="text" value="Max Doe" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold form-label mb-2">Card
                                                    Number</label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid"
                                                        name="card_number" placeholder="Enter card number"
                                                        type="text" value="4111 1111 1111 1111" />
                                                    <!--end::Input-->
                                                    <!--begin::Card logos-->
                                                    <div
                                                        class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                        <img alt="" class="h-25px"
                                                            src="assets/media/svg/card-logos/visa.svg" />
                                                        <img alt="" class="h-25px"
                                                            src="assets/media/svg/card-logos/mastercard.svg" />
                                                        <img alt="" class="h-25px"
                                                            src="assets/media/svg/card-logos/american-express.svg" />
                                                    </div>
                                                    <!--end::Card logos-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-10">
                                                <!--begin::Col-->
                                                <div class="col-md-8 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-bold form-label mb-2">Expiration
                                                        Date</label>
                                                    <!--end::Label-->
                                                    <!--begin::Row-->
                                                    <div class="row fv-row">
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select class="form-select form-select-solid"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Month" name="card_expiry_month">
                                                                <option></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select class="form-select form-select-solid"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Year" name="card_expiry_year">
                                                                <option></option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                                <option value="2031">2031</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-4 fv-row">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                        <span class="required">CVV</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Enter a card CVV code"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative">
                                                        <!--begin::Input-->
                                                        <input class="form-control form-control-solid"
                                                            maxlength="4" minlength="3" name="card_cvv"
                                                            placeholder="CVV" type="text" />
                                                        <!--end::Input-->
                                                        <!--begin::CVV icon-->
                                                        <div
                                                            class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                            <span class="svg-icon svg-icon-2hx">
                                                                <svg fill="none" height="24"
                                                                    viewBox="0 0 24 24" width="24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M22 7H2V11H22V7Z" fill="black" />
                                                                    <path
                                                                        d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                        fill="black" opacity="0.3" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::CVV icon-->
                                                    </div>
                                                    <!--end::Input wrapper-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-bold form-label">Save Card for further
                                                        billing?</label>
                                                    <div class="fs-7 fw-bold text-muted">If you need more info, please
                                                        check budget planning</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <input checked="checked" class="form-check-input"
                                                        type="checkbox" value="1" />
                                                    <span class="form-check-label fw-bold text-muted">Save Card</span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 4-->
                                    <!--begin::Step 5-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100 text-center">
                                            <!--begin::Heading-->
                                            <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                                            <!--end::Heading-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-bold fs-3">Submit your app to kickstart your
                                                project.</div>
                                            <!--end::Description-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4 py-15">
                                                <img alt="" class="w-100 mh-300px"
                                                    src="assets/media/illustrations/sigma-1/9.png" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                    </div>
                                    <!--end::Step 5-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack pt-10">
                                        <!--begin::Wrapper-->
                                        <div class="me-2">
                                            <button class="btn btn-lg btn-light-primary me-3"
                                                data-kt-stepper-action="previous" type="button">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                                <span class="svg-icon svg-icon-3 me-1">
                                                    <svg fill="none" height="24" viewBox="0 0 24 24"
                                                        width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <rect fill="black" height="2" opacity="0.5"
                                                            rx="1" width="13" x="6"
                                                            y="11" />
                                                        <path
                                                            d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->Back
                                            </button>
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div>
                                            <button class="btn btn-lg btn-primary" data-kt-stepper-action="submit"
                                                type="button">
                                                <span class="indicator-label">Submit
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                        <svg fill="none" height="24" viewBox="0 0 24 24"
                                                            width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <rect fill="black" height="2" opacity="0.5"
                                                                rx="1" transform="rotate(-180 18 13)"
                                                                width="13" x="18" y="13" />
                                                            <path
                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <button class="btn btn-lg btn-primary" data-kt-stepper-action="next"
                                                type="button">Continue
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-1 me-0">
                                                    <svg fill="none" height="24" viewBox="0 0 24 24"
                                                        width="24" xmlns="http://www.w3.org/2000/svg">
                                                        <rect fill="black" height="2" opacity="0.5"
                                                            rx="1" transform="rotate(-180 18 13)"
                                                            width="13" x="18" y="13" />
                                                        <path
                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </button>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Stepper-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Create App-->
        <!--begin::Modal - Select Location-->
        <div aria-hidden="true" class="modal fade" id="kt_modal_select_location" tabindex="-1">
            <!--begin::Modal dialog-->
            <div class="modal-dialog mw-1000px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Title-->
                        <h2>Select Location</h2>
                        <!--end::Title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                    <div class="modal-body">
                        <div class="w-100 rounded" id="kt_modal_select_location_map" style="height:450px"></div>
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer d-flex justify-content-end">
                        <a class="btn btn-active-light me-5" data-bs-dismiss="modal" href="#">Cancel</a>
                        <button class="btn btn-primary" data-bs-dismiss="modal"
                            id="kt_modal_select_location_button" type="button">Apply</button>
                    </div>
                    <!--end::Modal footer-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Select Location-->
        <!--end::Modals-->
        <!--begin::Scrolltop-->
        <div class="scrolltop" data-kt-scrolltop="true" id="kt_scrolltop">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect fill="black" height="2" opacity="0.5" rx="1"
                        transform="rotate(90 13 6)" width="13" x="13" y="6" />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>

        </div>
        <!--end::Modal dialog-->
        </div>
        <script>
            function goback() {
                event.preventDefault()
                history.back()
            }
        </script>
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="https://stockmgt.gapaautoparts.com/public/assets/plugins/global/plugins.bundle.js"></script>
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/custom/authentication/sign-in/general.js"></script>
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->

        <script src="https://stockmgt.gapaautoparts.com/public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js">
        </script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/custom/widgets.js"></script>
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/custom/apps/chat/chat.js"></script>
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/custom/modals/create-app.js"></script>
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/custom/modals/upgrade-plan.js"></script>

        <script src="https://stockmgt.gapaautoparts.com/public/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/custom/pages/projects/project/project.js"></script>
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/custom/modals/users-search.js"></script>
        <script src="https://stockmgt.gapaautoparts.com/public/assets/js/custom/modals/new-target.js"></script>
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="assets/js/custom/apps/customers/list/export.js"></script>
        <script src="assets/js/custom/apps/customers/list/list.js"></script>
        <script src="assets/js/custom/apps/customers/add.js"></script>
        <script src="assets/js/custom/widgets.js"></script>
        <script src="assets/js/custom/apps/chat/chat.js"></script>
        <script src="assets/js/custom/modals/create-app.js"></script>
        <script src="assets/js/custom/modals/upgrade-plan.js"></script>
        <script>
            function getData(id) {

                let property_value = document.getElementById("property_" + id).value;
                let product_id = document.getElementById("product_id").value;



                $.post('/saveProductProperty', {

                    property_id: id,
                    property_value,
                    product_id,
                    "_token": "{{ csrf_token() }}",

                }).done((result) => {

                    Swal.fire("", result.message)
                    console.log(result.message)

                }).fail(() => {
                    Swal.fire("", "Sorry cant not find this product")
                })
            }



            function searchCode() {



                let search_code = document.getElementById("search_code").value;
                // Swal.fire({
                // title: 'Are you sure?',
                // text: "",
                // icon: 'warning',
                // showCancelButton: true,
                // confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                // confirmButtonText: 'Yes, Save comment Please!'
                // }).then((result) => {
                // if (result.isConfirmed) {



                // }
                // })
                $.post('/searchBarcode', {

                    search_code: search_code,
                    "_token": "{{ csrf_token() }}",

                }).done((result) => {

                    document.getElementById("part_id").innerHTML = result.message;
                    document.getElementById("btnClose").click();

                }).fail(() => {
                    Swal.fire("", "Sorry cant not find this product")
                })

            }


            function getSubSubCat() {
                let sub_category = document.getElementById("sub_category").value;
                $.post('/getSubSubCat', {

                    sub_category: sub_category,
                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    document.getElementById("sub_sub_category").innerHTML = result;

                }).fail(() => {
                    Swal.fire("", "Sorry cant not find this product")
                })
            }

            function GetSubModels() {
                let model = document.getElementById("model").value;
                $.post('/getSubModels', {

                    model: model,
                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    document.getElementById("sub_model").innerHTML = result;

                }).fail(() => {
                    Swal.fire("", "Sorry cant not find any record")
                })
            }

            function getCars() {
                let brand = document.getElementById("brand").value;
                $.post('/getCars', {

                    brand: brand,
                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    document.getElementById("car").innerHTML = result;

                }).fail(() => {
                    Swal.fire("", "Sorry cant not find any record")
                })
            }

            function getModels() {
                let car = document.getElementById("car").value;
                $.post('/getModels', {

                    car: car,
                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    document.getElementById("model").innerHTML = result;

                }).fail(() => {
                    Swal.fire("", "Sorry cant not find any record")
                })
            }

            function updateProductBrand() {
                let brand = document.getElementById("brand").value;
                let car = document.getElementById("car").value;
                let model = document.getElementById("model").value;
                let sub_model = document.getElementById("sub_model").value;
                let product_id = document.getElementById("product_id").value;

                $.post('/addrandmodel', {

                    brand: brand,
                    car: car,
                    model: model,
                    sub_model: sub_model,
                    product_id: product_id,

                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    Swal.fire("", result)


                }).fail(() => {
                    Swal.fire("", "Sorry cant not find any record")
                })
                location.reload();
            }




            function UpdatePolicy() {
                let aboutus = document.getElementById('editor_1').innerHTML;
                let teams = document.getElementById('editor_2').innerHTML;
                let policy = document.getElementById('editor').innerHTML;

                //update_website

                $.post('/update_website', {

                    about: aboutus,
                    terms: teams,
                    policy: policy,


                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    Swal.fire("", result)


                }).fail(() => {
                    Swal.fire("", "Sorry cant not find any record")
                })


            }



            function updateMessageSettings() {
                let welcome = document.getElementById('editor_3').innerHTML;
                let confirmation = document.getElementById('editor_4').innerHTML;
                let processing = document.getElementById('editor_5').innerHTML;

                //update_website

                $.post('/updateMessageSettings', {

                    welcome: welcome,
                    confirmation: confirmation,
                    processing: processing,


                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    Swal.fire("", result)


                }).fail(() => {
                    Swal.fire("", "Sorry cant not find any record")
                })


            }



            function update_sorting(cat) {
                let sort = document.getElementById('sorting_' + cat).value;
                let sub_cat_id = cat;
                $.post('/update_sorting', {

                    sub_cat_id: sub_cat_id,
                    sort: sort,


                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    Swal.fire("", result.message)


                }).fail(() => {
                    Swal.fire("", "Sorry cant not find any record")
                })


            }

            function getLgA() {
                let state_id = document.getElementById('state').value;



                document.getElementById('lga').innerHTML = '<option>----- Select LGA ------ </option>';
                $.get('/getLgA', {

                    state_id: state_id,


                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    document.getElementById('lga').innerHTML = result.data;


                }).fail(() => {
                    console.log("Something went wrong")
                })

            }

            function processOrder() {
                let order_id = document.getElementById('order_id').value;

                $.post('http://localhost:8001/api/processorder', {

                    order_id: order_id,
                    "_token": "{{ csrf_token() }}",

                }).done((result) => {

                    Swal.fire("", result.message)
                    location.reload();

                }).fail(() => {
                    Swal.fire("", "Sorry cant not Process Order at the moment")
                    console.log(result);
                })



            }


            function addSuitablityModel() {
                var model = document.getElementById('suitabilitymodel').value;
                var product_id = document.getElementById('suitabilityproduct_id').value;



                $.post('/addSuitablityModel', {

                    model: model,
                    product_id: product_id,


                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    Swal.fire("", result.message)


                }).fail((result) => {
                    Swal.fire("", 'Something went wrong, Please try again')
                })

                location.reload();

            }


            function AddSuitSubSubModel() {
                var submodel = document.getElementById('editor_2').innerHTML;
                var model_id = document.getElementById('model_id').value;

                console.log(submodel);

                $.post('/add_suitSubsubModel', {

                    submodel: submodel,
                    model_id: model_id,


                    "_token": "{{ csrf_token() }}",

                }).done((result) => {
                    Swal.fire("", result.error)
                    location.reload();

                }).fail((result) => {
                    Swal.fire("", 'Something went wrong, Please try again')
                })



            }
        </script>

        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
            var quill = new Quill('#editor', {
                theme: 'snow'
            });

            var quill2 = new Quill('#editor_2', {
                theme: 'snow'
            });

            var quill1 = new Quill('#editor_1', {
                theme: 'snow'
            });

            var quill = new Quill('#editor_3', {
                theme: 'snow'
            });

            var quill2 = new Quill('#editor_4', {
                theme: 'snow'
            });

            var quill1 = new Quill('#editor_5', {
                theme: 'snow'
            });
        </script>

    </body>

</html>
