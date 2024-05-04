<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="dark-style layout-navbar-fixed layout-menu-fixed layout-compact customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="public/materialize/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('public/materialize/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/fonts/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('public/materialize/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/libs/swiper/swiper.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />



    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/css/pages/cards-statistics.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/materialize/assets/vendor/css/pages/cards-analytics.css') }}" />

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}">



    <!-- Helpers -->
    <script src="{{ asset('public/materialize/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('public/materialize/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('public/materialize/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ base_url('dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <span style="color: var(--bs-primary)">
                                <svg width="268" height="150" viewBox="0 0 38 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                                        fill="currentColor" />
                                    <path
                                        d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                                        fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
                                    <path
                                        d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                        fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
                                    <path
                                        d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                                        fill="currentColor" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138"
                                            x2="10.532" y2="24.104" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-opacity="1" />
                                            <stop offset="1" stop-opacity="0" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139"
                                            x2="10.3357" y2="24.1155" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-opacity="1" />
                                            <stop offset="1" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">{{ env('APP_NAME') }}</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                                fill="currentColor" fill-opacity="0.6" />
                            <path
                                d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                                fill="currentColor" fill-opacity="0.38" />
                        </svg>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active">
                        <a href="javascript:void(0);" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ base_url('landing-page') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-airplane-landing"></i>
                            <div data-i18n="Landing Page">Landing Page</div>
                        </a>
                    </li>


                    <!-- Apps & Pages -->
                    <li class="menu-header fw-medium mt-4">
                        <span class="menu-header-text" data-i18n="DB Managements">DB Managements</span>
                    </li>
                    <!-- manage-maps menu start -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-leaf-maple"></i>
                            <div data-i18n="Manage Maps">Manage Maps</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link">
                                    <div data-i18n="Institution List">Institution List</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link">
                                    <div data-i18n="Marking List">Marking List</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- manage-maps menu end -->





                    <!-- user-account menu start -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-account-group-outline"></i>
                            <div data-i18n="User Accounts">User Accounts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link">
                                    <div data-i18n="User Levels">User Levels</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link">
                                    <div data-i18n="User List">User List</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- user-account menu end -->

                    <!-- Misc -->
                    <li class="menu-header fw-medium mt-4">
                        <span class="menu-header-text" data-i18n="Misc">Misc</span>
                    </li>
                    <li class="menu-item" data-bs-toggle="modal" data-bs-target="#aboutUsModal">
                        <a href="javascript:void(0);" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-slack"></i>
                            <div data-i18n="About">About</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link" id="supportSideMenu" onclick='showAlert(this.id, "System", "info", "Sorry, support not available :(")'>
                            <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
                            <div data-i18n="Support">Support</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link" id="docSideMenu" onclick='showAlert(this.id, "System", "info", "Sorry, documentations not available :(")'>
                            <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                            <div data-i18n="Documentation">Documentation</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="mdi mdi-menu mdi-24px"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                                    <i class="mdi mdi-magnify mdi-24px scaleX-n1-rtl"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Language -->
                            <li class="nav-item dropdown-language dropdown me-1 me-xl-0">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="mdi mdi-translate mdi-24px"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="en"
                                            data-text-direction="ltr">
                                            <span class="align-middle">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="fr"
                                            data-text-direction="ltr">
                                            <span class="align-middle">French</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="ar"
                                            data-text-direction="rtl">
                                            <span class="align-middle">Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="de"
                                            data-text-direction="ltr">
                                            <span class="align-middle">German</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Language -->

                            <!-- Style Switcher -->
                            <li class="nav-item dropdown-style-switcher dropdown me-1 me-xl-0">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class="mdi mdi-24px"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span class="align-middle"><i
                                                    class="mdi mdi-weather-sunny me-2"></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span class="align-middle"><i
                                                    class="mdi mdi-weather-night me-2"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span class="align-middle"><i
                                                    class="mdi mdi-monitor me-2"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- / Style Switcher-->


                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1 d-none">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-expanded="false">
                                    <i class="mdi mdi-bell-outline mdi-24px"></i>
                                    <span
                                        class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h6 class="mb-0 me-auto">Notification</h6>
                                            <span class="badge rounded-pill bg-label-primary">8 New</span>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <img src="{{ asset('public/materialize/assets/img/avatars/1.png') }}"
                                                                alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1 text-truncate">Congratulation Lettie 🎉</h6>
                                                        <small class="text-truncate text-body">Won the monthly best
                                                            seller gold badge</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown-menu-footer border-top p-2">
                                        <a href="javascript:void(0);"
                                            class="btn btn-primary d-flex justify-content-center">
                                            View all notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('public/materialize/assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('public/materialize/assets/img/avatars/1.png') }}"
                                                            alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-profile-user.html">
                                            <i class="mdi mdi-account-outline me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                            <i class="mdi mdi-logout me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search..." />
                        <i class="mdi mdi-close search-toggler cursor-pointer"></i>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row gy-4">
                            <!-- Gamification Card -->
                            <div class="col-md-12 col-lg-8">
                                <div class="card h-100">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-md-6 order-2 order-md-1">
                                            <div class="card-body">
                                                <h4 class="card-title pb-xl-2">Congratulations John!🎉</h4>
                                                <p class="mb-0">You have done <span class="h6 mb-0">68%</span>😎
                                                    more sales today.</p>
                                                <p>Check your new badge in your profile.</p>
                                                <a href="javascript:;" class="btn btn-primary">View Profile</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                                            <div class="card-body pb-0 px-0 px-md-4 ps-0">
                                                <img src="{{ asset('public/materialize/assets/img/illustrations/illustration-john-light.png') }}"
                                                    height="180" alt="View Profile"
                                                    data-app-light-img="illustrations/illustration-john-light.png"
                                                    data-app-dark-img="illustrations/illustration-john-dark.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Gamification Card -->

                            <!-- Statistics Total Order -->
                            <div class="col-lg-2 col-sm-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-primary rounded">
                                                    <i class="mdi mdi-cart-plus mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 text-success me-1">+22%</p>
                                                <i class="mdi mdi-chevron-up text-success"></i>
                                            </div>
                                        </div>
                                        <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                                            <h5 class="mb-2">155k</h5>
                                            <p class="mb-lg-2 mb-xl-3">Total Orders</p>
                                            <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Statistics Total Order -->

                            <!-- Sessions line chart -->
                            <div class="col-lg-2 col-sm-6">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                            <h4 class="mb-0 me-2">$38.5k</h4>
                                            <p class="mb-0 text-success">+62%</p>
                                        </div>
                                        <span class="d-block mb-2 text-body">Sessions</span>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div id="sessions"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sessions line chart -->

                            <!-- Total Transactions & Report Chart -->
                            <div class="col-12 col-xl-8">
                                <div class="card h-100">
                                    <div class="row">
                                        <div class="col-md-7 col-12 order-2 order-md-0">
                                            <div class="card-header">
                                                <h5 class="mb-0">Total Transactions</h5>
                                            </div>
                                            <div class="card-body">
                                                <div id="totalTransactionChart"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-12 border-start">
                                            <div class="card-header">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="mb-1">Report</h5>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="totalTransaction"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="totalTransaction">
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Refresh</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Share</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Update</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-0 text-body">Last month transactions $234.40k</p>
                                            </div>
                                            <div class="card-body pt-3">
                                                <div class="row">
                                                    <div class="col-6 border-end">
                                                        <div class="d-flex flex-column align-items-center">
                                                            <div class="avatar">
                                                                <div class="avatar-initial bg-label-success rounded">
                                                                    <div class="mdi mdi-trending-up mdi-24px"></div>
                                                                </div>
                                                            </div>
                                                            <p class="my-2">This Week</p>
                                                            <h6 class="mb-0">+82.45%</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex flex-column align-items-center">
                                                            <div class="avatar">
                                                                <div class="avatar-initial bg-label-primary rounded">
                                                                    <div class="mdi mdi-trending-down mdi-24px"></div>
                                                                </div>
                                                            </div>
                                                            <p class="my-2">This Week</p>
                                                            <h6 class="mb-0">-24.86%</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-4" />
                                                <div class="d-flex justify-content-around flex-wrap gap-2">
                                                    <div>
                                                        <p class="mb-1">Performance</p>
                                                        <h6 class="mb-0">+94.15%</h6>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary" type="button">view
                                                            report</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Total Transactions & Report Chart -->

                            <!-- Performance Chart -->
                            <div class="col-12 col-xl-4 col-md-6">
                                <div class="card h-100">
                                    <div class="card-header pb-1">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Performance</h5>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="performanceDropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="performanceDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Last 28
                                                        Days</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0 pt-1">
                                        <div id="performanceChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Performance Chart -->

                            <!-- Project Statistics -->
                            <div class="col-md-6 col-xl-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title m-0 me-2">Project Statistics</h5>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="projectStatus"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="projectStatus">
                                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between py-2 px-4 border-bottom">
                                        <h6 class="mb-0 small">NAME</h6>
                                        <h6 class="mb-0 small">BUDGET</h6>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4">
                                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                                    <div class="avatar-initial bg-lighter rounded">
                                                        <div>
                                                            <img src="{{ asset('public/materialize/assets/img/icons/misc/3d-illustration.png') }}"
                                                                alt="User" class="h-25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">3D Illustration</h6>
                                                        <small>Blender Illustration</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$6,500</div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4">
                                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                                    <div class="avatar-initial bg-lighter rounded">
                                                        <div>
                                                            <img src="{{ asset('public/materialize/assets/img/icons/misc/finance-app-design.png') }}"
                                                                alt="User" class="h-25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Finance App Design</h6>
                                                        <small>Figma UI Kit</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$4,290</div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4">
                                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                                    <div class="avatar-initial bg-lighter rounded">
                                                        <div>
                                                            <img src="{{ asset('public/materialize/assets/img/icons/misc/4-square.png') }}"
                                                                alt="User" class="h-25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">4 Square</h6>
                                                        <small>Android Application</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$44,500</div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4">
                                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                                    <div class="avatar-initial bg-lighter rounded">
                                                        <div>
                                                            <img src="{{ asset('public/materialize/assets/img/icons/misc/delta-web-app.png') }}"
                                                                alt="User" class="h-25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Delta Web App</h6>
                                                        <small>React Dashboard</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$12,690</div>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div class="avatar avatar-md flex-shrink-0 me-3">
                                                    <div class="avatar-initial bg-lighter rounded">
                                                        <div>
                                                            <img src="{{ asset('public/materialize/assets/img/icons/misc/ecommerce-website.png') }}"
                                                                alt="User" class="h-25" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">eCommerce Website</h6>
                                                        <small>Vue + Laravel</small>
                                                    </div>
                                                    <div class="badge bg-label-primary rounded-pill">$10,850</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Project Statistics -->

                            <!-- Multiple widgets -->
                            <div class="col-md-6 col-xl-4">
                                <div class="row g-4">
                                    <!-- Total Revenue chart -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-header pb-0">
                                                <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                                    <h4 class="mb-0 me-2">$42.5k</h4>
                                                    <p class="mb-0 text-danger">-22%</p>
                                                </div>
                                                <span class="d-block mb-2 text-body">Total Revenue</span>
                                            </div>
                                            <div class="card-body">
                                                <div id="totalRevenue"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Total Revenue chart -->

                                    <div class="col-md-6 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                                    <div class="avatar">
                                                        <div class="avatar-initial bg-label-success rounded">
                                                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 text-success me-1">+38%</p>
                                                        <i class="mdi mdi-chevron-up text-success"></i>
                                                    </div>
                                                </div>
                                                <div class="card-info mt-4 pt-3">
                                                    <h5 class="mb-2">$13.4k</h5>
                                                    <p class="text-body">Total Sales</p>
                                                    <div class="badge bg-label-secondary rounded-pill mt-1">Last Six
                                                        Month</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                                                    <div class="avatar">
                                                        <div class="avatar-initial bg-label-info rounded">
                                                            <i class="mdi mdi-link mdi-24px"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 text-success me-1">+62%</p>
                                                        <i class="mdi mdi-chevron-up text-success"></i>
                                                    </div>
                                                </div>
                                                <div class="card-info mt-4 pt-4">
                                                    <h5 class="mb-2">142.8k</h5>
                                                    <p class="text-body">Total Impression</p>
                                                    <div class="badge bg-label-secondary rounded-pill">Last One Year
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- overview Radial chart -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="card h-100">
                                            <div class="card-header pb-0">
                                                <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                                                    <h4 class="mb-0 me-2">$67.1k</h4>
                                                    <p class="mb-0 text-success">+49%</p>
                                                </div>
                                                <span class="d-block mb-2 text-body">Overview</span>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div id="overviewChart" class="d-flex align-items-center"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ overview Radial chart -->
                                </div>
                            </div>
                            <!--/ Multiple widgets -->

                            <!-- Sales Country Chart -->
                            <div class="col-12 col-xl-4 col-md-6">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Sales Country</h5>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="salesCountryDropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="salesCountryDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Last 28
                                                        Days</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 text-body">Total $42,580 Sales</p>
                                    </div>
                                    <div class="card-body pb-1 px-0">
                                        <div id="salesCountryChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Sales Country Chart -->

                            <!-- Top Referral Source  -->
                            <div class="col-12 col-xl-8">
                                <div class="card h-100">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-title m-0">
                                            <h5 class="mb-1">Top Referral Sources</h5>
                                            <p class="text-body mb-0">82% Activity Growth</p>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="earningReportsTabsId"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="earningReportsTabsId">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-3">
                                        <ul class="nav nav-tabs nav-tabs-widget pb-3 gap-4 mx-1 d-flex flex-nowrap"
                                            role="tablist">
                                            <li class="nav-item">
                                                <div class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab"
                                                    data-bs-target="#navs-orders-id" aria-controls="navs-orders-id"
                                                    aria-selected="true">
                                                    <button type="button"
                                                        class="btn btn-icon rounded-pill btn-label-google-plus">
                                                        <i class="mdi mdi-google mdi-20px"></i>
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab"
                                                    data-bs-target="#navs-sales-id" aria-controls="navs-sales-id"
                                                    aria-selected="false">
                                                    <button type="button"
                                                        class="btn btn-icon rounded-pill btn-label-facebook">
                                                        <i class="mdi mdi-facebook mdi-20px"></i>
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab"
                                                    data-bs-target="#navs-profit-id" aria-controls="navs-profit-id"
                                                    aria-selected="false">
                                                    <button type="button"
                                                        class="btn btn-icon rounded-pill btn-label-instagram">
                                                        <i class="mdi mdi-instagram mdi-20px"></i>
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                                    role="tab" data-bs-toggle="tab"
                                                    data-bs-target="#navs-income-id" aria-controls="navs-income-id"
                                                    aria-selected="false">
                                                    <button type="button"
                                                        class="btn btn-icon rounded-pill btn-label-twitter">
                                                        <i class="mdi mdi-twitter mdi-20px"></i>
                                                    </button>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="nav-link btn d-flex align-items-center justify-content-center disabled"
                                                    role="tab" data-bs-toggle="tab" aria-selected="false">
                                                    <button type="button"
                                                        class="btn btn-icon rounded bg-label-secondary">
                                                        <i class="mdi mdi-plus mdi-20px"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="tab-content p-0 ms-0 ms-sm-2">
                                            <div class="tab-pane fade show active" id="navs-orders-id"
                                                role="tabpanel">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-borderless">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th class="fw-medium ps-0 text-heading">Parameter</th>
                                                                <th class="pe-0 fw-medium text-heading">Status</th>
                                                                <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                                <th class="pe-0 text-end text-heading">total revenue
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="h6 ps-0">Email Marketing Campaign</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-primary">Active</span>
                                                                </td>
                                                                <td class="pe-0 text-success">+24%</td>
                                                                <td class="pe-0 text-end h6">$42,857</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Google Workspace</td>
                                                                <td class="pe-0">
                                                                    <span
                                                                        class="badge rounded-pill bg-label-warning">Completed</span>
                                                                </td>
                                                                <td class="text-danger pe-0">-12%</td>
                                                                <td class="pe-0 text-end h6">$850</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Affiliation Program</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-primary">Active</span>
                                                                </td>
                                                                <td class="text-success pe-0">+24%</td>
                                                                <td class="pe-0 text-end h6">$5,576</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Google Adsense</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-info">In
                                                                        Draft</span></td>
                                                                <td class="text-success pe-0">0%</td>
                                                                <td class="pe-0 text-end h6">$0</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-borderless">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th class="fw-medium ps-0 text-heading">parameter</th>
                                                                <th class="pe-0 fw-medium text-heading">Status</th>
                                                                <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                                <th class="pe-0 text-end text-heading">total revenue
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="h6 ps-0">Create Audiences in Ads Manager
                                                                </td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-primary">Active</span>
                                                                </td>
                                                                <td class="pe-0 text-danger">-8%</td>
                                                                <td class="pe-0 text-end h6">$322</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Facebook page advertising</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-primary">Active</span>
                                                                </td>
                                                                <td class="text-success pe-0">+19%</td>
                                                                <td class="pe-0 text-end h6">$5,634</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Messenger advertising</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-danger">Expired</span>
                                                                </td>
                                                                <td class="text-danger pe-0">-23%</td>
                                                                <td class="pe-0 text-end h6">$751</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Video campaign</td>
                                                                <td class="pe-0">
                                                                    <span
                                                                        class="badge rounded-pill bg-label-warning">Completed</span>
                                                                </td>
                                                                <td class="text-success pe-0">+21%</td>
                                                                <td class="pe-0 text-end h6">$3,585</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-borderless">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th class="fw-medium ps-0 text-heading">parameter</th>
                                                                <th class="pe-0 fw-medium text-heading">Status</th>
                                                                <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                                <th class="pe-0 text-end text-heading">total revenue
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="h6 ps-0">Create shopping advertising</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-info">In
                                                                        Draft</span></td>
                                                                <td class="pe-0 text-danger">-15%</td>
                                                                <td class="pe-0 text-end h6">$599</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">IGTV advertising</td>
                                                                <td class="pe-0">
                                                                    <span
                                                                        class="badge rounded-pill bg-label-warning">Completed</span>
                                                                </td>
                                                                <td class="text-success pe-0">+37%</td>
                                                                <td class="pe-0 text-end h6">$1,467</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Collection advertising</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-info">In
                                                                        Draft</span></td>
                                                                <td class="text-danger pe-0">0%</td>
                                                                <td class="pe-0 text-end h6">$0</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Stories advertising</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-primary">Active</span>
                                                                </td>
                                                                <td class="text-success pe-0">+29%</td>
                                                                <td class="pe-0 text-end h6">$4,546</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-borderless">
                                                        <thead class="border-bottom">
                                                            <tr>
                                                                <th class="fw-medium ps-0 text-heading">Parameter</th>
                                                                <th class="pe-0 fw-medium text-heading">Status</th>
                                                                <th class="pe-0 fw-medium text-heading">Conversion</th>
                                                                <th class="pe-0 text-end text-heading">total revenue
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="h6 ps-0">Interests advertising</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-danger">Expired</span>
                                                                </td>
                                                                <td class="pe-0 text-success">+2%</td>
                                                                <td class="pe-0 text-end h6">$404</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Community advertising</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-primary">Active</span>
                                                                </td>
                                                                <td class="text-success pe-0">+25%</td>
                                                                <td class="pe-0 text-end h6">$399</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Device advertising</td>
                                                                <td class="pe-0">
                                                                    <span
                                                                        class="badge rounded-pill bg-label-warning">Completed</span>
                                                                </td>
                                                                <td class="text-success pe-0">+21%</td>
                                                                <td class="pe-0 text-end h6">$177</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="h6 ps-0">Campaigning</td>
                                                                <td class="pe-0"><span
                                                                        class="badge rounded-pill bg-label-primary">Active</span>
                                                                </td>
                                                                <td class="text-danger pe-0">-5%</td>
                                                                <td class="pe-0 text-end h6">$1,139</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Top Referral Source  -->

                            <!-- Weekly Sales Chart-->
                            <div class="col-12 col-xl-4 col-md-6">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Weekly Sales</h5>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="weeklySalesDropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="weeklySalesDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-body mb-0">Total 85.4k Sales</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-6 d-flex align-items-center">
                                                <div class="avatar">
                                                    <div class="avatar-initial bg-label-primary rounded">
                                                        <i class="mdi mdi-trending-up mdi-24px"></i>
                                                    </div>
                                                </div>
                                                <div class="ms-3 d-flex flex-column">
                                                    <small class="text-body mb-1">Net Income</small>
                                                    <h6 class="mb-0">$438.5K</h6>
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex align-items-center">
                                                <div class="avatar">
                                                    <div class="avatar-initial bg-label-warning rounded">
                                                        <i class="mdi mdi-currency-usd mdi-24px"></i>
                                                    </div>
                                                </div>
                                                <div class="ms-3 d-flex flex-column">
                                                    <small class="text-body mb-1">Expense</small>
                                                    <h6 class="mb-0">$22.4K</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="weeklySalesChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Weekly Sales Chart-->

                            <!-- visits By Day Chart-->
                            <div class="col-12 col-xl-4 col-md-6">
                                <div class="card h-100">
                                    <div class="card-header pb-1">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Visits by Day</h5>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="visitsByDayDropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="visitsByDayDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-0 text-body">Total 248.5k Visits</p>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div id="visitsByDayChart"></div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <h6 class="mb-1">Most Visited Day</h6>
                                                <p class="mb-0">Total 62.4k Visits on Thursday</p>
                                            </div>
                                            <div class="avatar">
                                                <div class="avatar-initial bg-label-warning rounded">
                                                    <i class="mdi mdi-chevron-right mdi-24px scaleX-n1-rtl"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ visits By Day Chart-->

                            <!-- Activity Timeline -->
                            <div class="col-12 col-xl-8">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-1">Activity Timeline</h5>
                                            <div class="dropdown">
                                                <button class="btn p-0" type="button" id="timelineDropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="timelineDropdown">
                                                    <a class="dropdown-item" href="javascript:void(0);">Last 28
                                                        Days</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4 pb-1">
                                        <ul class="timeline card-timeline mb-0">
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-primary"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-2">Create youtube video for next product 😎
                                                        </h6>
                                                        <small class="text-muted">Tomorrow</small>
                                                    </div>
                                                    <p class="mb-2">Product introduction and details video</p>
                                                    <div class="d-flex">
                                                        <a href="https://www.youtube.com/@pixinvent1515"
                                                            target="_blank" class="text-truncate">
                                                            <span
                                                                class="badge badge-center rounded-pill bg-danger w-px-20 h-px-20 me-2">
                                                                <i class="mdi mdi-play text-white"></i>
                                                            </span>
                                                            <span
                                                                class="fw-medium">https://www.youtube.com/@pixinvent1515</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-info"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-2">Received payment from usa client 😍</h6>
                                                        <small class="text-muted">January, 18</small>
                                                    </div>
                                                    <p class="mb-2">Received payment $1,490 for banking ios app</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent border-transparent">
                                                <span class="timeline-point timeline-point-warning"></span>
                                                <div class="timeline-event pb-1">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-2">Meeting with joseph morgan for next project
                                                        </h6>
                                                        <small class="text-muted">April, 23</small>
                                                    </div>
                                                    <p class="mb-2">Meeting Video call on zoom at 9pm</p>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0)" class="me-3">
                                                            <img src="{{ asset('public/materialize/assets/img/icons/misc/pdf.png') }}"
                                                                alt="PDF image" width="20" class="me-2" />
                                                            <span class="fw-medium">presentation.pdf</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Activity Timeline -->
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">
                                    <span class="footer-text">
                                        © {{ env('APP_YEAR') == date('Y') ? env('APP_YEAR') :  env('APP_YEAR') . '-' . date('Y') }}
                                    </span>
                                    , made with <span class="text-danger"><i
                                            class="tf-icons mdi mdi-heart"></i></span> by
                                    <a href="{{ env('APP_URL') }}" target="_blank"
                                        class="footer-link fw-medium">{{ env('APP_NAME') }}</a>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <div
                                        class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP
                                        v{{ PHP_VERSION }})
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->



    {{-- MODALS --}}
    <!-- Modal: AboutUS / about modal -->
    {{-- <div class="modal fade" id="aboutUsModal" data-bs-backdrop="static" tabindex="-1"> --}}
    <div class="modal fade" id="aboutUsModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="backDropModalTitle">About US</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="col-md-12 col-md-6 mb-4 text-center mt-3">
                            <h3 class=""><u class="cust-u">{{ env('APP_ALIAS') }}</u></h3>
                        </div>
                        <div class="row">
                            <!-- Group Logo  -->
                            <div class="col-xl-12 col-md-6 mb-4 justify-content-center">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 mr-1 Group3Logo">
                                                <table>
                                                    <tr>
                                                        <td
                                                            class="d-flex align-content-sm-between justify-content-center align-middle">
                                                            <img src="{{ asset('public/img/app_logo.ico') }}" alt="AppLogo"
                                                                style="height: 83%; width: 62%">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1 mt-1 justify-content-center"
                                                                style="color:#f6503b; font-size: 0.8rem;">
                                                                <a><b>{{ env('APP_INSTITUTION') }}</b></a>
                                                                <div
                                                                    class="text-center text-xs font-weight-lighter text-uppercase mb-1 mt-1">
                                                                    <a><i>{{ env('APP_PURPOSE') }}</i></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>

                                            </div>
                                            <div class="col-7">
                                                <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                                <div class="text-md text-green font-weight-bold text-uppercase mb-1">
                                                    <a class="text-orange">
                                                        Made By:
                                                    </a>
                                                </div>

                                                {{-- <style>
                                                .li-mem {
                                                    font-size: small;
                                                }
                                                </style> --}}

                                                @php
                                                    $groupMembersJson = env('GROUP_MEMBER');
                                                    $groupMembers = json_decode($groupMembersJson, true);
                                                @endphp
                                                @if (is_array($groupMembers))
                                                    <div class="cust-ul pl-0 ml-4 grad-txt-2 text-md">
                                                        <div class="row">
                                                            @foreach ($groupMembers as $member)
                                                                <span class="li-mem" style="font-size: 0.8rem;">
                                                                    <i class="cust-j mdi mdi-drama-masks mdi-24px"></i>
                                                                    <i class="fa-duotone mdi mdi-arrow-expand-right mdi-12px"></i>
                                                                    {{ $member[0] }}
                                                                </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div> --}}
            </form>
        </div>
    </div>


    {{-- Custom JS --}}
    <script src="{{ asset('public/js/custom.js') }}"></script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('public/materialize/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('public/materialize/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/vendor/libs/swiper/swiper.js') }}"></script>


    <!-- alert:js assets vendor & page -->
    <script src="{{ asset('public/materialize/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('public/materialize/assets/js/extended-ui-sweetalert2.js') }}"></script>
    <!-- endalert -->


    <!-- Main JS -->
    <script src="{{ asset('public/materialize/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('public/materialize/assets/js/dashboards-analytics.js') }}"></script>
</body>

</html>
