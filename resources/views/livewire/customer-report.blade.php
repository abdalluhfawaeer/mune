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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
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
                                                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <input type="text" class="form-control form-control-solid ps-10" wire:model="name" placeholder="{{ __('text.name') }}">
                                            </div>
                                            <div class="position-relative w-md-400px me-md-2">
                                                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <input type="text" class="form-control form-control-solid ps-10" name="search" wire:model="mobile" placeholder="{{ __('text.Mobile') }}">
                                            </div>
                                            <div class="position-relative w-md-400px me-md-2">
                                                <div class="mb-0">
                                                    <input class="form-control form-control" placeholder="Pick date rage" id="kt_daterangepicker_4"/>
                                                </div>
                                                <script>
                                                    var start = moment();
                                                    var end = moment().endOf("month");
                                
                                                    function cb(start, end) {
                                                        $("#kt_daterangepicker_4").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
                                                        @this.setDate(start.format("YYYY-MM-DD"),end.format("YYYY-MM-DD"));
                                                    }
                                
                                                    $("#kt_daterangepicker_4").daterangepicker({
                                                        startDate: start,
                                                        endDate: end,
                                                        ranges: {
                                                        "Today": [moment(), moment()],
                                                        "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
                                                        "Last 7 Days": [moment().subtract(6, "days"), moment()],
                                                        "Last 30 Days": [moment().subtract(29, "days"), moment()],
                                                        "This Month": [moment().startOf("month"), moment().endOf("month")],
                                                        "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
                                                        }
                                                    }, cb);
                                
                                                    cb(start, end);
                                                </script>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </form>
                            <div class="card card-flush">
                                <div class="card-body pt-0">
                                    <div id="kt_ecommerce_sales_table_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="table-responsive">
                                            <table
                                                class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                                id="kt_ecommerce_sales_table">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th>{{ __('text.name')}} </th>
                                                        <th>{{ __('text.Mobile') }}</th>
                                                        <th>{{ __('text.OrderCount') }}</th>
                                                        <th>{{ __('text.OrderTotal') }}</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    @foreach ($list as $item)
                                                    <tr class="odd">
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->name }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->mobile }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->order_count }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->total }}</a>
                                                        </td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                <div class="dataTables_paginate paging_simple_numbers"id="kt_ecommerce_sales_table_paginate">
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
