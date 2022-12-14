<div>
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('text.sales') }}
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                </h1>
            </div>
        </div>
    </div>
    <br><br><br>
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack" wire:ignore.self>
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">                        
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <x-date-filter />
            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="row g-5 g-xl-10">
                <div class="col-xl-4 mb-xl-10">
                    <div class="card card-flush h-xl-100">
                        <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('/metronic8/demo1/assets/media/svg/shapes/top-green.png" data-theme="light">
                            <h3 class="card-title align-items-start flex-column text-white pt-15">
                                <span class="fw-bold fs-2x mb-3" style="color:black">Hello, {{ $sales->name }}</span>
                            </h3>
                        </div>
                        <div class="card-body mt-n20">
                            <div class="mt-n20 position-relative">
                                <div class="row g-3 g-lg-6">
                                    <div class="col-6">
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <div class="symbol symbol-30px me-5 mb-8">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="currentColor"></path>
                                                            <path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-0">
                                                <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $menu_count_active }}</span>
                                                <span class="text-gray-500 fw-semibold fs-6">{{ __('text.MenuActive') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <div class="symbol symbol-30px me-5 mb-8">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-0">
                                                <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $menu_count_not }}</span>
                                                <span class="text-gray-500 fw-semibold fs-6">{{ __('text.MenuNotActive') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <div class="symbol symbol-30px me-5 mb-8">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14 18V16H10V18L9 20H15L14 18Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="m-0">
                                                <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $menu_sum }}</span>
                                                <span class="text-gray-500 fw-semibold fs-6">{{ __('text.MenuTotalJD') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <div class="row g-5 g-xl-10">
                        <div class="card h-xl-100">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">{{{ __('text.last_menu') }}}</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="/mune/list" class="btn btn-sm btn-light">{{ __('text.all_menu') }}</a>
                                </div>
                            </div>
                            <div class="card-body pt-6">
                                @foreach ($menu as $m)
                                <div class="d-flex flex-stack">
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                        <div class="flex-grow-1 me-2">
                                            <a href="/metronic8/demo1/../demo1/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">{{ $m->name }}</a>
                                            <span class="text-muted fw-semibold d-block fs-7">{{ $m->staus }}</span>
                                        </div>
                                        <a href="/{{ $m->name }}/{{ $m->id }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
                                                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-4"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>