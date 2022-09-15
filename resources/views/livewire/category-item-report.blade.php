<div>
    <div class="d-flex flex-column flex-root">
        <div>
            <div>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="toolbar" id="kt_toolbar">
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
                                    {{ __('text.Itemsreport') }}
                                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <div>
                                <div class="card mb-7">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative w-md-400px me-md-2">
                                                <select class="form-control form-control-solid ps-10"
                                                    wire:model="menu_id">
                                                    <option value="" selected>{{ __('text.menu') }}</option>
                                                    @foreach ($menu as $name)
                                                        <option value="{{ $name->id }}">{{ $name->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-5 g-xl-10">
                                    <div class="col-sm-6 col-xl-6 mb-xl-10">
                                        <div class="card h-lg-100">
                                            <div
                                                class="card-body d-flex justify-content-between align-items-start flex-column">
                                                <div class="m-0">
                                                    <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-7">
                                                    <span
                                                        class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $count_act }}</span>
                                                    <div class="m-0">
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-400">{{ __('text.category') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-6 mb-xl-10">
                                        <div class="card h-lg-100">
                                            <div
                                                class="card-body d-flex justify-content-between align-items-start flex-column">
                                                <div class="m-0">
                                                    <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-column my-7">
                                                    <span
                                                        class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $count_item }}</span>
                                                    <div class="m-0">
                                                        <span
                                                            class="fw-semibold fs-6 text-gray-400">{{ __('text.item') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush">
                                    <div class="card-body pt-0">
                                        <div id="kt_ecommerce_sales_table_wrapper"
                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="table-responsive">
                                                <table
                                                    class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                                    id="kt_ecommerce_sales_table">
                                                    <thead>
                                                        <tr
                                                            class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                            <th>{{ __('text.name_ar') }}</th>
                                                            <th>{{ __('text.name_en') }}</th>
                                                            <th>{{ __('text.item') }}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-semibold text-gray-600">
                                                        @foreach ($list as $item)
                                                            <tr class="odd">
                                                                <td data-kt-ecommerce-order-filter="order_id">
                                                                    <a
                                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->name_ar }}</a>
                                                                </td>
                                                                <td data-kt-ecommerce-order-filter="order_id">
                                                                    <a
                                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->name_en }}</a>
                                                                </td>
                                                                <td data-kt-ecommerce-order-filter="order_id">
                                                                    <a
                                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->count_avtive }}</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                    <div
                                                        class="dataTables_paginate paging_simple_numbers"id="kt_ecommerce_sales_table_paginate">
                                                        {{ $list->links() }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
