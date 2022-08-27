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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Order Details
                                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                                </h1>
                            </div>
                        </div> 
                    </div>
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                                href="#kt_ecommerce_sales_order_summary" aria-selected="true"
                                                role="tab">Order Summary</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                                href="#kt_ecommerce_sales_order_history" aria-selected="false"
                                                role="tab" tabindex="-1">Order History</a>
                                        </li>
                                    </ul>
                                   
                                    <button href="/metronic8/demo1/../demo1/apps/ecommerce/sales/edit-order.html"
                                        class="btn btn-success btn-sm me-lg-n7">Edit Order</button>
                                    <button href="/metronic8/demo1/../demo1/apps/ecommerce/sales/add-order.html"
                                        class="btn btn-primary btn-sm">Add New Order</button>
                                    <button href="/metronic8/demo1/../demo1/apps/ecommerce/sales/edit-order.html"
                                        class="btn btn-success btn-sm me-lg-n7">Edit Order</button>
                                    <button href="/metronic8/demo1/../demo1/apps/ecommerce/sales/add-order.html"
                                        class="btn btn-primary btn-sm">Add New Order</button>
                                </div>
                                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                    <div class="card card-flush py-4 flex-row-fluid">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Order Details #{{ $order->id }}</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table
                                                    class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                    <tbody class="fw-semibold text-gray-600">
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="svg-icon svg-icon-2 me-2">
                                                                        <svg width="20" height="21"
                                                                            viewBox="0 0 20 21" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    Date Added
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">{{ $order->created_at }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="svg-icon svg-icon-2 me-2">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    Order ID
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">#{{ $order->id }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-flush py-4 flex-row-fluid">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Customer Details</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table
                                                    class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                    <tbody class="fw-semibold text-gray-600">
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="svg-icon svg-icon-2 me-2">
                                                                        <svg width="18" height="18"
                                                                            viewBox="0 0 18 18" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
                                                                                fill="currentColor"></path>
                                                                            <rect x="7" y="6"
                                                                                width="4" height="4"
                                                                                rx="2" fill="currentColor">
                                                                            </rect>
                                                                        </svg>
                                                                    </span>
                                                                    Customer
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                <div class="d-flex align-items-center justify-content-end">
                                                                    <a class="text-gray-600 text-hover-primary">{{ $order->customer->name }}</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="svg-icon svg-icon-2 me-2">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z"
                                                                                fill="currentColor"></path>
                                                                            <path opacity="0.3" d="M19 4H5V20H19V4Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    Phone
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">{{ $order->customer->mobile }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-flush py-4 flex-row-fluid">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Documents</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table
                                                    class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                    <tbody class="fw-semibold text-gray-600">
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="svg-icon svg-icon-2 me-2">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z"
                                                                                fill="currentColor"></path>
                                                                            <path opacity="0.3"
                                                                                d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    Type
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                <a href="#"
                                                                    class="text-gray-600 text-hover-primary">{{ $order->type }}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-muted">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="svg-icon svg-icon-2 me-2">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    Status
                                                                </div>
                                                            </td>
                                                            <td class="fw-bold text-end">
                                                                <a href="#"
                                                                    class="text-gray-600 text-hover-primary">{{ $order->status }}</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="kt_ecommerce_sales_order_summary"
                                        role="tab-panel">
                                        <div class="d-flex flex-column gap-7 gap-lg-10">
                                            <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Order #{{ $order->id }}</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                            <thead>
                                                                <tr
                                                                    class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                    <th>{{ __('text.item') }}</th>
                                                                    <th>{{ __('text.qty') }}</th>
                                                                    <th>{{ __('text.Price') }}</th>
                                                                    <th>{{ __('text.additions') }}</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-semibold text-gray-600">
                                                                @foreach ($order_details as $details)    
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <a class="symbol symbol-50px">
                                                                                    <span class="symbol-label"
                                                                                        style="background-image:url({{ asset('storage/' . $details->item_img) }});"></span>
                                                                                </a>
                                                                                <div class="ms-5">
                                                                                    <a class="fw-bold text-gray-600 text-hover-primary">{{ $details->item_title }}</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>{{ $details->qty }}</td>
                                                                        <td>{{ $details->price }} JD</td>
                                                                        <td>{{ $details->item_title }}</td>
                                                                        <td>
                                                                            <a href="/mune/item/edit/{{ $details->id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" target="blank">
                                                                                <span class="svg-icon svg-icon-3">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                            <a href="#" wire:click="delete({{ $details->id }})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                                <span class="svg-icon svg-icon-3">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td colspan="4"
                                                                        class="fs-3 text-dark text-end">Grand Total
                                                                    </td>
                                                                    <td class="text-dark fs-3 fw-bolder text-end">
                                                                       {{ $order_details->sum('price') }} JD</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_ecommerce_sales_order_history"
                                        role="tab-panel">
                                        <div class="d-flex flex-column gap-7 gap-lg-10">
                                            <div class="card card-flush py-4 flex-row-fluid">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Order History</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                            <thead>
                                                                <tr
                                                                    class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-100px">{{ __('text.date') }}</th>
                                                                    <th class="min-w-175px">{{ __('text.type') }}</th>
                                                                    <th class="min-w-70px">{{ __('text.status') }}</th>
                                                                    <th class="min-w-100px">{{ __('text.total') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-semibold text-gray-600">
                                                                @foreach ($order_history as $order)
                                                                    <tr>
                                                                        <td>{{ $order->created_at }}</td>
                                                                        <td>{{ $order->type }}</td>
                                                                        <td>
                                                                            <div class="badge badge-light-success">
                                                                                {{ $order->status }}</div>
                                                                        </td>
                                                                        <td>{{ $order->total }} JD</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
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
</div>