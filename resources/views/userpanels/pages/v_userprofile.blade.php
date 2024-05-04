<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="layout-navbar-fixed layout-compact dark-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="public/materialize/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ env('APP_NAME') }} | User Profile</title>
    <meta name="description" content="" />

    @include('css.v_cssheader_collections')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
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
                        <span class="app-brand-text demo menu-text fw-bold ms-2">Materialize</span>
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
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                            <div class="badge bg-primary rounded-pill ms-auto">5</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-ecommerce-dashboard.html" class="menu-link">
                                    <div data-i18n="eCommerce">eCommerce</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="dashboards-crm.html" class="menu-link">
                                    <div data-i18n="CRM">CRM</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <div data-i18n="Analytics">Analytics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-logistics-dashboard.html" class="menu-link">
                                    <div data-i18n="Logistics">Logistics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-academy-dashboard.html" class="menu-link">
                                    <div data-i18n="Academy">Academy</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                            <div data-i18n="Layouts">Layouts</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="layouts-collapsed-menu.html" class="menu-link">
                                    <div data-i18n="Collapsed menu">Collapsed menu</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-content-navbar.html" class="menu-link">
                                    <div data-i18n="Content navbar">Content navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                                    <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                                    <div data-i18n="Horizontal">Horizontal</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-without-menu.html" class="menu-link">
                                    <div data-i18n="Without menu">Without menu</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-without-navbar.html" class="menu-link">
                                    <div data-i18n="Without navbar">Without navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-fluid.html" class="menu-link">
                                    <div data-i18n="Fluid">Fluid</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-container.html" class="menu-link">
                                    <div data-i18n="Container">Container</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="layouts-blank.html" class="menu-link">
                                    <div data-i18n="Blank">Blank</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                            <div data-i18n="Front Pages">Front Pages</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
                                    <div data-i18n="Landing">Landing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
                                    <div data-i18n="Pricing">Pricing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                                    <div data-i18n="Payment">Payment</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                                    <div data-i18n="Checkout">Checkout</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
                                    <div data-i18n="Help Center">Help Center</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Apps & Pages -->
                    <li class="menu-header fw-medium mt-4">
                        <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
                    </li>
                    <li class="menu-item">
                        <a href="app-email.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
                            <div data-i18n="Email">Email</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-chat.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-message-outline"></i>
                            <div data-i18n="Chat">Chat</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-calendar.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
                            <div data-i18n="Calendar">Calendar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
                            <div data-i18n="Kanban">Kanban</div>
                        </a>
                    </li>
                    <!-- e-commerce-app menu start -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-cart-outline"></i>
                            <div data-i18n="eCommerce">eCommerce</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-ecommerce-dashboard.html" class="menu-link">
                                    <div data-i18n="Dashboard">Dashboard</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Products">Products</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-ecommerce-product-list.html" class="menu-link">
                                            <div data-i18n="Product List">Product List</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-product-add.html" class="menu-link">
                                            <div data-i18n="Add Product">Add Product</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-category-list.html" class="menu-link">
                                            <div data-i18n="Category List">Category List</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Order">Order</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-ecommerce-order-list.html" class="menu-link">
                                            <div data-i18n="Order List">Order List</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-order-details.html" class="menu-link">
                                            <div data-i18n="Order Details">Order Details</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Customer">Customer</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-ecommerce-customer-all.html" class="menu-link">
                                            <div data-i18n="All Customers">All Customers</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <div data-i18n="Customer Details">Customer Details</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="app-ecommerce-customer-details-overview.html"
                                                    class="menu-link">
                                                    <div data-i18n="Overview">Overview</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-customer-details-security.html"
                                                    class="menu-link">
                                                    <div data-i18n="Security">Security</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-customer-details-billing.html"
                                                    class="menu-link">
                                                    <div data-i18n="Address & Billing">Address & Billing</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="app-ecommerce-customer-details-notifications.html"
                                                    class="menu-link">
                                                    <div data-i18n="Notifications">Notifications</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                                    <div data-i18n="Manage Reviews">Manage Reviews</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-ecommerce-referral.html" class="menu-link">
                                    <div data-i18n="Referrals">Referrals</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Settings">Settings</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-ecommerce-settings-detail.html" class="menu-link">
                                            <div data-i18n="Store Details">Store Details</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-settings-payments.html" class="menu-link">
                                            <div data-i18n="Payments">Payments</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                                            <div data-i18n="Checkout">Checkout</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                                            <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-settings-locations.html" class="menu-link">
                                            <div data-i18n="Locations">Locations</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                                            <div data-i18n="Notifications">Notifications</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- e-commerce-app menu end -->
                    <!-- Academy menu start -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
                            <div data-i18n="Academy">Academy</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-academy-dashboard.html" class="menu-link">
                                    <div data-i18n="Dashboard">Dashboard</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-academy-course.html" class="menu-link">
                                    <div data-i18n="My Course">My Course</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-academy-course-details.html" class="menu-link">
                                    <div data-i18n="Course Details">Course Details</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Academy menu end -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-truck-outline"></i>
                            <div data-i18n="Logistics">Logistics</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-logistics-dashboard.html" class="menu-link">
                                    <div data-i18n="Dashboard">Dashboard</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-logistics-fleet.html" class="menu-link">
                                    <div data-i18n="Fleet">Fleet</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
                            <div data-i18n="Invoice">Invoice</div>
                            <div class="badge bg-danger rounded-pill ms-auto">4</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-invoice-list.html" class="menu-link">
                                    <div data-i18n="List">List</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-preview.html" class="menu-link">
                                    <div data-i18n="Preview">Preview</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-edit.html" class="menu-link">
                                    <div data-i18n="Edit">Edit</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-invoice-add.html" class="menu-link">
                                    <div data-i18n="Add">Add</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                            <div data-i18n="Users">Users</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-user-list.html" class="menu-link">
                                    <div data-i18n="List">List</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="View">View</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="app-user-view-account.html" class="menu-link">
                                            <div data-i18n="Account">Account</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-security.html" class="menu-link">
                                            <div data-i18n="Security">Security</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-billing.html" class="menu-link">
                                            <div data-i18n="Billing & Plans">Billing & Plans</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-notifications.html" class="menu-link">
                                            <div data-i18n="Notifications">Notifications</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="app-user-view-connections.html" class="menu-link">
                                            <div data-i18n="Connections">Connections</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-shield-outline"></i>
                            <div data-i18n="Roles & Permissions">Roles & Permissions</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-access-roles.html" class="menu-link">
                                    <div data-i18n="Roles">Roles</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-access-permission.html" class="menu-link">
                                    <div data-i18n="Permission">Permission</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-file-outline"></i>
                            <div data-i18n="Pages">Pages</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item active open">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="User Profile">User Profile</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item active">
                                        <a href="pages-profile-user.html" class="menu-link">
                                            <div data-i18n="Profile">Profile</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-profile-teams.html" class="menu-link">
                                            <div data-i18n="Teams">Teams</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-profile-projects.html" class="menu-link">
                                            <div data-i18n="Projects">Projects</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-profile-connections.html" class="menu-link">
                                            <div data-i18n="Connections">Connections</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Account Settings">Account Settings</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="pages-account-settings-account.html" class="menu-link">
                                            <div data-i18n="Account">Account</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-account-settings-security.html" class="menu-link">
                                            <div data-i18n="Security">Security</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-account-settings-billing.html" class="menu-link">
                                            <div data-i18n="Billing & Plans">Billing & Plans</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-account-settings-notifications.html" class="menu-link">
                                            <div data-i18n="Notifications">Notifications</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-account-settings-connections.html" class="menu-link">
                                            <div data-i18n="Connections">Connections</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="pages-faq.html" class="menu-link">
                                    <div data-i18n="FAQ">FAQ</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-pricing.html" class="menu-link">
                                    <div data-i18n="Pricing">Pricing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Misc">Misc</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="pages-misc-error.html" class="menu-link" target="_blank">
                                            <div data-i18n="Error">Error</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-misc-under-maintenance.html" class="menu-link"
                                            target="_blank">
                                            <div data-i18n="Under Maintenance">Under Maintenance</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                                            <div data-i18n="Coming Soon">Coming Soon</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                                            <div data-i18n="Not Authorized">Not Authorized</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="pages-misc-server-error.html" class="menu-link" target="_blank">
                                            <div data-i18n="Server Error">Server Error</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-lock-outline"></i>
                            <div data-i18n="Authentications">Authentications</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Login">Login</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-login-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Register">Register</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-register-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                                            <div data-i18n="Multi-steps">Multi-steps</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Verify Email">Verify Email</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Reset Password">Reset Password</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Forgot Password">Forgot Password</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Two Steps">Two Steps</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                                            <div data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-transit-connection-horizontal"></i>
                            <div data-i18n="Wizard Examples">Wizard Examples</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="wizard-ex-checkout.html" class="menu-link">
                                    <div data-i18n="Checkout">Checkout</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="wizard-ex-property-listing.html" class="menu-link">
                                    <div data-i18n="Property Listing">Property Listing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="wizard-ex-create-deal.html" class="menu-link">
                                    <div data-i18n="Create Deal">Create Deal</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-vector-arrange-below"></i>
                            <div data-i18n="Modal Examples">Modal Examples</div>
                        </a>
                    </li>

                    <!-- Components -->
                    <li class="menu-header fw-medium mt-4">
                        <span class="menu-header-text" data-i18n="Components">Components</span>
                    </li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                            <div data-i18n="Cards">Cards</div>
                            <div class="badge bg-primary rounded-pill ms-auto">6</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="cards-basic.html" class="menu-link">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-advance.html" class="menu-link">
                                    <div data-i18n="Advance">Advance</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-statistics.html" class="menu-link">
                                    <div data-i18n="Statistics">Statistics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-analytics.html" class="menu-link">
                                    <div data-i18n="Analytics">Analytics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-gamifications.html" class="menu-link">
                                    <div data-i18n="Gamifications">Gamifications</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="cards-actions.html" class="menu-link">
                                    <div data-i18n="Actions">Actions</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-archive-outline"></i>
                            <div data-i18n="User interface">User interface</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="ui-accordion.html" class="menu-link">
                                    <div data-i18n="Accordion">Accordion</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-alerts.html" class="menu-link">
                                    <div data-i18n="Alerts">Alerts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-badges.html" class="menu-link">
                                    <div data-i18n="Badges">Badges</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-buttons.html" class="menu-link">
                                    <div data-i18n="Buttons">Buttons</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-carousel.html" class="menu-link">
                                    <div data-i18n="Carousel">Carousel</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-collapse.html" class="menu-link">
                                    <div data-i18n="Collapse">Collapse</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-dropdowns.html" class="menu-link">
                                    <div data-i18n="Dropdowns">Dropdowns</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-footer.html" class="menu-link">
                                    <div data-i18n="Footer">Footer</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-list-groups.html" class="menu-link">
                                    <div data-i18n="List Groups">List groups</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-modals.html" class="menu-link">
                                    <div data-i18n="Modals">Modals</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-navbar.html" class="menu-link">
                                    <div data-i18n="Navbar">Navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-offcanvas.html" class="menu-link">
                                    <div data-i18n="Offcanvas">Offcanvas</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                                    <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-progress.html" class="menu-link">
                                    <div data-i18n="Progress">Progress</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-spinners.html" class="menu-link">
                                    <div data-i18n="Spinners">Spinners</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tabs-pills.html" class="menu-link">
                                    <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-toasts.html" class="menu-link">
                                    <div data-i18n="Toasts">Toasts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-tooltips-popovers.html" class="menu-link">
                                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="ui-typography.html" class="menu-link">
                                    <div data-i18n="Typography">Typography</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Extended components -->
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-star-outline"></i>
                            <div data-i18n="Extended UI">Extended UI</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="extended-ui-avatar.html" class="menu-link">
                                    <div data-i18n="Avatar">Avatar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-blockui.html" class="menu-link">
                                    <div data-i18n="BlockUI">BlockUI</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-drag-and-drop.html" class="menu-link">
                                    <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-media-player.html" class="menu-link">
                                    <div data-i18n="Media Player">Media Player</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                                    <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-star-ratings.html" class="menu-link">
                                    <div data-i18n="Star Ratings">Star Ratings</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-sweetalert2.html" class="menu-link">
                                    <div data-i18n="SweetAlert2">SweetAlert2</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-text-divider.html" class="menu-link">
                                    <div data-i18n="Text Divider">Text Divider</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <div data-i18n="Timeline">Timeline</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="extended-ui-timeline-basic.html" class="menu-link">
                                            <div data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                                            <div data-i18n="Fullscreen">Fullscreen</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-tour.html" class="menu-link">
                                    <div data-i18n="Tour">Tour</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-treeview.html" class="menu-link">
                                    <div data-i18n="Treeview">Treeview</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="extended-ui-misc.html" class="menu-link">
                                    <div data-i18n="Miscellaneous">Miscellaneous</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Icons -->
                    <li class="menu-item">
                        <a href="icons-mdi.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                            <div data-i18n="Icons">Icons</div>
                        </a>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="menu-header fw-medium mt-4">
                        <span class="menu-header-text" data-i18n="Forms & Tables">Forms &amp; Tables</span>
                    </li>
                    <!-- Forms -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                            <div data-i18n="Form Elements">Form Elements</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="forms-basic-inputs.html" class="menu-link">
                                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-input-groups.html" class="menu-link">
                                    <div data-i18n="Input groups">Input groups</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-custom-options.html" class="menu-link">
                                    <div data-i18n="Custom Options">Custom Options</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-editors.html" class="menu-link">
                                    <div data-i18n="Editors">Editors</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-file-upload.html" class="menu-link">
                                    <div data-i18n="File Upload">File Upload</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-pickers.html" class="menu-link">
                                    <div data-i18n="Pickers">Pickers</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-selects.html" class="menu-link">
                                    <div data-i18n="Select & Tags">Select &amp; Tags</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-sliders.html" class="menu-link">
                                    <div data-i18n="Sliders">Sliders</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-switches.html" class="menu-link">
                                    <div data-i18n="Switches">Switches</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="forms-extras.html" class="menu-link">
                                    <div data-i18n="Extras">Extras</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                            <div data-i18n="Form Layouts">Form Layouts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="form-layouts-vertical.html" class="menu-link">
                                    <div data-i18n="Vertical Form">Vertical Form</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-layouts-horizontal.html" class="menu-link">
                                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-layouts-sticky.html" class="menu-link">
                                    <div data-i18n="Sticky Actions">Sticky Actions</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-dots-horizontal"></i>
                            <div data-i18n="Form Wizard">Form Wizard</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="form-wizard-numbered.html" class="menu-link">
                                    <div data-i18n="Numbered">Numbered</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="form-wizard-icons.html" class="menu-link">
                                    <div data-i18n="Icons">Icons</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="form-validation.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                            <div data-i18n="Form Validation">Form Validation</div>
                        </a>
                    </li>
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-table"></i>
                            <div data-i18n="Tables">Tables</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-grid"></i>
                            <div data-i18n="Datatables">Datatables</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="tables-datatables-basic.html" class="menu-link">
                                    <div data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-datatables-advanced.html" class="menu-link">
                                    <div data-i18n="Advanced">Advanced</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="tables-datatables-extensions.html" class="menu-link">
                                    <div data-i18n="Extensions">Extensions</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Charts & Maps -->
                    <li class="menu-header fw-medium mt-4">
                        <span class="menu-header-text" data-i18n="Charts & Maps">Charts &amp; Maps</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons mdi mdi-chart-pie-outline"></i>
                            <div data-i18n="Charts">Charts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="charts-apex.html" class="menu-link">
                                    <div data-i18n="Apex Charts">Apex Charts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="charts-chartjs.html" class="menu-link">
                                    <div data-i18n="ChartJS">ChartJS</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-map-outline"></i>
                            <div data-i18n="Leaflet Maps">Leaflet Maps</div>
                        </a>
                    </li>

                    <!-- Misc -->
                    <li class="menu-header fw-medium mt-4">
                        <span class="menu-header-text" data-i18n="Misc">Misc</span>
                    </li>
                    <li class="menu-item">
                        <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
                            <div data-i18n="Support">Support</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
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

                            <!-- Quick links  -->
                            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-1 me-xl-0">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="mdi mdi-view-grid-plus-outline mdi-24px"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                            <a href="javascript:void(0)" class="dropdown-shortcuts-add text-muted"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Add shortcuts"><i
                                                    class="mdi mdi-view-grid-plus-outline mdi-24px"></i></a>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-calendar fs-4"></i>
                                                </span>
                                                <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                                <small class="text-muted mb-0">Appointments</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-file-document-outline fs-4"></i>
                                                </span>
                                                <a href="app-invoice-list.html" class="stretched-link">Invoice
                                                    App</a>
                                                <small class="text-muted mb-0">Manage Accounts</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-account-outline fs-4"></i>
                                                </span>
                                                <a href="app-user-list.html" class="stretched-link">User App</a>
                                                <small class="text-muted mb-0">Manage Users</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-shield-check-outline fs-4"></i>
                                                </span>
                                                <a href="app-access-roles.html" class="stretched-link">Role
                                                    Management</a>
                                                <small class="text-muted mb-0">Permission</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-chart-pie-outline fs-4"></i>
                                                </span>
                                                <a href="index.html" class="stretched-link">Dashboard</a>
                                                <small class="text-muted mb-0">Analytics</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-cog-outline fs-4"></i>
                                                </span>
                                                <a href="pages-account-settings-account.html"
                                                    class="stretched-link">Setting</a>
                                                <small class="text-muted mb-0">Account Settings</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-help-circle-outline fs-4"></i>
                                                </span>
                                                <a href="pages-faq.html" class="stretched-link">FAQs</a>
                                                <small class="text-muted mb-0">FAQs & Articles</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="mdi mdi-dock-window fs-4"></i>
                                                </span>
                                                <a href="modal-examples.html" class="stretched-link">Modals</a>
                                                <small class="text-muted mb-0">Useful Popups</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Quick links -->

                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-2 me-xl-1">
                                <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                    href="javascript:void(0);" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
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
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1 text-truncate">Charles Franklin</h6>
                                                        <small class="text-truncate text-body">Accepted your
                                                            connection</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">12hr ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <img src="{{ asset('public/materialize/assets/img/avatars/2.png') }}"
                                                                alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1 text-truncate">New Message ✉️</h6>
                                                        <small class="text-truncate text-body">You have new message
                                                            from Natalie</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="mdi mdi-cart-outline"></i></span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1 text-truncate">Whoo! You have new order 🛒
                                                        </h6>
                                                        <small class="text-truncate text-body">ACME Inc. made new
                                                            order $1,154</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">1 day ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <img src="{{ asset('public/materialize/assets/img/avatars/9.png') }}"
                                                                alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1 text-truncate">Application has been approved
                                                            🚀</h6>
                                                        <small class="text-truncate text-body">Your ABC project
                                                            application has been approved.</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="mdi mdi-chart-pie-outline"></i></span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1 text-truncate">Monthly report is generated
                                                        </h6>
                                                        <small class="text-truncate text-body">July monthly financial
                                                            report is generated </small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <img src="{{ asset('public/materialize/assets/img/avatars/5.png') }}"
                                                                alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1 text-truncate">Send connection request</h6>
                                                        <small class="text-truncate text-body">Peter sent you
                                                            connection request</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <img src="{{ asset('public/materialize/assets/img/avatars/6.png') }}"
                                                                alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1 text-truncate">New message from Jane</h6>
                                                        <small class="text-truncate text-body">Your have new message
                                                            from Jane</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar me-1">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-warning"><i
                                                                    class="mdi mdi-alert-circle-outline"></i></span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column flex-grow-1 overflow-hidden w-px-200">
                                                        <h6 class="mb-1">CPU is running high</h6>
                                                        <small class="text-truncate text-body">CPU Utilization Percent
                                                            is currently at 88.63%,</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <small class="text-muted">5 days ago</small>
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
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <i class="mdi mdi-cog-outline me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 mdi mdi-credit-card-outline me-2"></i>
                                                <span class="flex-grow-1 align-middle ms-1">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-faq.html">
                                            <i class="mdi mdi-help-circle-outline me-2"></i>
                                            <span class="align-middle">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-pricing.html">
                                            <i class="mdi mdi-currency-usd me-2"></i>
                                            <span class="align-middle">Pricing</span>
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
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>

                        <!-- Header -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="user-profile-header-banner">
                                        <img src="{{ asset('public/materialize/assets/img/pages/profile-banner.png') }}"
                                            alt="Banner image" class="rounded-top" />
                                    </div>
                                    <div
                                        class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                                        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                            <img src="{{ asset('public/materialize/assets/img/avatars/1.png') }}"
                                                alt="user image"
                                                class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
                                        </div>
                                        <div class="flex-grow-1 mt-3 mt-sm-5">
                                            <div
                                                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                                <div class="user-profile-info">
                                                    <h4>John Doe</h4>
                                                    <ul
                                                        class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                                        <li class="list-inline-item">
                                                            <i class="mdi mdi-invert-colors me-1 mdi-20px"></i><span
                                                                class="fw-medium">UX Designer</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i
                                                                class="mdi mdi-map-marker-outline me-1 mdi-20px"></i><span
                                                                class="fw-medium">Vatican City</span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i
                                                                class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i><span
                                                                class="fw-medium"> Joined April 2021</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="javascript:void(0)" class="btn btn-primary">
                                                    <i class="mdi mdi-account-check-outline me-1"></i>Connected
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Header -->

                        <!-- Navbar pills -->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0);"><i
                                                class="mdi mdi-account-outline me-1 mdi-20px"></i>Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-profile-teams.html"><i
                                                class="mdi mdi-account-multiple-outline me-1 mdi-20px"></i>Teams</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-profile-projects.html"><i
                                                class="mdi mdi-view-grid-outline me-1 mdi-20px"></i>Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-profile-connections.html"><i
                                                class="mdi mdi-link me-1 mdi-20px"></i>Connections</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/ Navbar pills -->

                        <!-- User Profile Content -->
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <!-- About User -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <small class="card-text text-uppercase">About</small>
                                        <ul class="list-unstyled my-3 py-1">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-account-outline mdi-24px"></i><span
                                                    class="fw-medium mx-2">Full Name:</span> <span>John Doe</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-check mdi-24px"></i><span
                                                    class="fw-medium mx-2">Status:</span>
                                                <span>Active</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-star-outline mdi-24px"></i><span
                                                    class="fw-medium mx-2">Role:</span>
                                                <span>Developer</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-flag-outline mdi-24px"></i><span
                                                    class="fw-medium mx-2">Country:</span>
                                                <span>USA</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-translate mdi-24px"></i><span
                                                    class="fw-medium mx-2">Languages:</span>
                                                <span>English</span>
                                            </li>
                                        </ul>
                                        <small class="card-text text-uppercase">Contacts</small>
                                        <ul class="list-unstyled my-3 py-1">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-phone-outline mdi-24px"></i><span
                                                    class="fw-medium mx-2">Contact:</span>
                                                <span>(123) 456-7890</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-message-outline mdi-24px"></i><span
                                                    class="fw-medium mx-2">Skype:</span>
                                                <span>john.doe</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-email-outline mdi-24px"></i><span
                                                    class="fw-medium mx-2">Email:</span>
                                                <span>john.doe@example.com</span>
                                            </li>
                                        </ul>
                                        <small class="card-text text-uppercase">Teams</small>
                                        <ul class="list-unstyled mb-0 mt-3 pt-1">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-github mdi-24px text-secondary me-2"></i>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fw-medium me-2">Backend Developer</span><span>(126
                                                        Members)</span>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="mdi mdi-react mdi-24px text-info me-2"></i>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fw-medium me-2">React Developer</span><span>(98
                                                        Members)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ About User -->
                                <!-- Profile Overview -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <small class="card-text text-uppercase">Overview</small>
                                        <ul class="list-unstyled mb-0 mt-3 pt-1">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-check mdi-24px"></i><span
                                                    class="fw-medium mx-2">Task Compiled:</span>
                                                <span>13.5k</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="mdi mdi-account-outline mdi-24px"></i><span
                                                    class="fw-medium mx-2">Projects Compiled:</span> <span>146</span>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="mdi mdi-view-grid-outline mdi-24px"></i><span
                                                    class="fw-medium mx-2">Connections:</span> <span>897</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ Profile Overview -->
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <!-- Activity Timeline -->
                                <div class="card card-action mb-4">
                                    <div class="card-header align-items-center">
                                        <h5 class="card-action-title mb-0">
                                            <i class="mdi mdi-format-list-bulleted mdi-24px me-2"></i>Activity
                                            Timeline
                                        </h5>
                                        <div class="card-action-element">
                                            <div class="dropdown">
                                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical mdi-24px text-muted"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Share
                                                            timeline</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Suggest
                                                            edits</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider" />
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Report
                                                            bug</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3 pb-0">
                                        <ul class="timeline mb-0">
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-danger"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-0">Client Meeting</h6>
                                                        <small class="text-muted">Today</small>
                                                    </div>
                                                    <p class="mb-2">Project meeting with john @10:15am</p>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="avatar me-3">
                                                            <img src="{{ asset('public/materialize/assets/img/avatars/3.png') }}"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                                            <span>CEO of Infibeam</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-primary"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-0">Create a new project for client</h6>
                                                        <small class="text-muted">2 Day Ago</small>
                                                    </div>
                                                    <p class="mb-0">Add files to new design folder</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-warning"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-0">Shared 2 New Project Files</h6>
                                                        <small class="text-muted">6 Day Ago</small>
                                                    </div>
                                                    <p class="mb-2">
                                                        Sent by Mollie Dixon
                                                        <img src="{{ asset('public/materialize/assets/img/avatars/4.png') }}"
                                                            class="rounded-circle me-3" alt="avatar"
                                                            height="24" width="24" />
                                                    </p>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <a href="javascript:void(0)" class="me-3">
                                                            <img src="{{ asset('public/materialize/assets/img/icons/misc/doc.png') }}"
                                                                alt="Document image" width="15"
                                                                class="me-2" />
                                                            <span class="fw-medium text-body">App Guidelines</span>
                                                        </a>
                                                        <a href="javascript:void(0)">
                                                            <img src="{{ asset('public/materialize/assets/img/icons/misc/xls.png') }}"
                                                                alt="Excel image" width="15" class="me-2" />
                                                            <span class="fw-medium text-body">Testing Results</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent border-transparent">
                                                <span class="timeline-point timeline-point-info"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-0">Project status updated</h6>
                                                        <small class="text-muted">10 Day Ago</small>
                                                    </div>
                                                    <p class="mb-0">Woocommerce iOS App Completed</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ Activity Timeline -->
                                <div class="row">
                                    <!-- Connections -->
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="card card-action mb-4">
                                            <div class="card-header align-items-center">
                                                <h5 class="card-action-title mb-0">Connections</h5>
                                                <div class="card-action-element">
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn dropdown-toggle hide-arrow p-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical mdi-24px text-muted"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Share connections</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Suggest edits</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider" />
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Report bug</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/avatars/2.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">Cecilia Payne</h6>
                                                                    <small>45 Connections</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <button class="btn btn-outline-primary btn-icon">
                                                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/avatars/3.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">Curtis Fletcher</h6>
                                                                    <small>1.32k Connections</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <button class="btn btn-primary btn-icon">
                                                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/avatars/8.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">Alice Stone</h6>
                                                                    <small>125 Connections</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <button class="btn btn-primary btn-icon">
                                                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/avatars/7.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">Darrell Barnes</h6>
                                                                    <small>456 Connections</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <button class="btn btn-outline-primary btn-icon">
                                                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/avatars/12.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">Eugenia Moore</h6>
                                                                    <small>1.2k Connections</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <button class="btn btn-outline-primary btn-icon">
                                                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="text-center">
                                                        <a href="javascript:;">View all connections</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Connections -->
                                    <!-- Teams -->
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="card card-action mb-4">
                                            <div class="card-header align-items-center">
                                                <h5 class="card-action-title mb-0">Teams</h5>
                                                <div class="card-action-element">
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn dropdown-toggle hide-arrow p-0"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-vertical mdi-24px text-muted"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Share teams</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Suggest edits</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider" />
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="javascript:void(0);">Report bug</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/icons/brands/react-label.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">React Developers</h6>
                                                                    <small>72 Members</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span
                                                                        class="badge bg-label-danger rounded-pill">Developer</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/icons/brands/support-label.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">Support Team</h6>
                                                                    <small>122 Members</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span
                                                                        class="badge bg-label-primary rounded-pill">Support</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/icons/brands/figma-label.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">UI Designers</h6>
                                                                    <small>7 Members</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span
                                                                        class="badge bg-label-info rounded-pill">Designer</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/icons/brands/vue-label.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">Vue.js Developers</h6>
                                                                    <small>289 Members</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span
                                                                        class="badge bg-label-danger rounded-pill">Developer</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-start">
                                                                <div class="avatar me-3">
                                                                    <img src="{{ asset('public/materialize/assets/img/icons/brands/twitter-label.png') }}"
                                                                        alt="Avatar" class="rounded-circle" />
                                                                </div>
                                                                <div class="me-w">
                                                                    <h6 class="mb-0">Digital Marketing</h6>
                                                                    <small>24 Members</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span
                                                                        class="badge bg-label-secondary rounded-pill">Marketing</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="text-center">
                                                        <a href="javascript:;">View all teams</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Teams -->
                                </div>

                                <!-- Projects table -->
                                <div class="card mb-4">
                                    <div class="card-datatable table-responsive">
                                        <table class="datatable-project table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Project</th>
                                                    <th class="text-nowrap">Total Task</th>
                                                    <th>Progress</th>
                                                    <th>Hours</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <!--/ Projects table -->
                            </div>
                        </div>
                        <!--/ User Profile Content -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with <span class="text-danger"><i
                                            class="tf-icons mdi mdi-heart"></i></span> by
                                    <a href="https://pixinvent.com" target="_blank"
                                        class="footer-link fw-medium">Pixinvent</a>
                                </div>
                                <div class="d-none d-lg-inline-block">
                                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                        target="_blank">License</a>
                                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                        class="footer-link me-4">More Themes</a>

                                    <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                                        target="_blank" class="footer-link me-4">Documentation</a>

                                    <a href="https://pixinvent.ticksy.com/" target="_blank"
                                        class="footer-link d-none d-sm-inline-block">Support</a>
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



    @include('js.v_jsbody_collections')
</body>

</html>