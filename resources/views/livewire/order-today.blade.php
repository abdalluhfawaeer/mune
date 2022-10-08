<div wire:poll.750ms>
    <audio id="myAudio">
        <source src="horse.ogg" type="audio/ogg">
        <source src="{{ asset('alert.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <button onclick="playAudio()" type="button" class="btn btn-danger btn-lg">Play Audio</button>
    <div class="d-flex flex-column flex-root">
        <div>
            <div>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="toolbar" id="kt_toolbar">
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('text.OrderToday') }}
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
                                                <input type="text" class="form-control form-control-solid ps-10" wire:model="id_mune" placeholder="ID">
                                            </div>
                                            <div class="position-relative w-md-400px me-md-2">
                                                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <input type="text" class="form-control form-control-solid ps-10" name="search" wire:model="name" placeholder="{{ __('text.name') }}">
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
                                                <select class="form-control form-control-solid ps-10" wire:model="type">
                                                    <option value="" selected>{{ __('text.type') }}</option>
                                                    <option value="delvairy">{{ __('text.Delivery') }}</option>
                                                    <option value="table">{{ __('text.from_the_table') }}</option>
                                                    <option value="from_restaurant">{{ __('text.restaurant') }}</option>
                                                </select>
                                            </div>
                                            <div class="position-relative w-md-400px me-md-2">
                                                <select class="form-control form-control-solid ps-10" wire:model="type">
                                                    <option value="" selected>{{ __('text.status') }}</option>
                                                        <option value="Cancel">{{ __('text.Cancel') }}</option>
                                                        <option value="Complete">{{ __('text.Complete') }}</option>
                                                        <option value="new">{{ __('text.new') }}</option>
                                                        <option value="Received">{{ __('text.Received') }}</option>
                                                        <option value="WithCaptain">{{ __('text.WithCaptain') }}</option>
                                                </select>
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
                                                        <th>ID</th>
                                                        <th>{{ __('text.name') }}</th>
                                                        <th>{{ __('text.Mobile') }}</th>
                                                        <th>{{ __('text.type') }}</th>
                                                        <th>{{ __('text.status') }}</th>
                                                        <th>{{ __('text.total') }}</th>
                                                        <th>{{ __('text.date') }}</th>
                                                        @if($type == 'delvairy')
                                                        <th>{{ __('text.address') }}</th>
                                                        @elseif($type == 'table')
                                                        <th>{{ __('text.tablenumber') }}</th>
                                                        @endif
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    @foreach ($list as $item)
                                                    <tr class="odd">
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->order_id }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->name }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->mobile }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            @if ($item->type == 'from_restaurant')
                                                                <a class="badge badge-light-success">{{ __('text.restaurant') }}</a>
                                                            @elseif($item->type == 'delvairy')
                                                                <a class="badge badge-light-danger">{{ __('text.Delivery') }}</a>
                                                            @else
                                                                <a class="badge badge-light-info">{{ __('text.from_the_table') }}</a>
                                                            @endif
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            @if ($item->status == 'Cancel')
                                                                    <a class="badge badge-light-danger">{{ __('text.Cancel') }}</a>
                                                                @elseif($item->status == 'Complete')
                                                                    <a class="badge badge-light-success">{{ __('text.Complete') }}</a>
                                                                @elseif($item->status == 'new')
                                                                    <a class="badge badge-light-primary">{{ __('text.new') }}</a>
                                                                @elseif($item->status == 'Received')
                                                                    <a class="badge badge-light-info">{{ __('text.Received') }}</a>
                                                                @elseif($item->status == 'WithCaptain')
                                                                    <a class="badge badge-light-warning">{{ __('text.WithCaptain') }}</a>
                                                                @endif
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->total }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->order_date }}</a>
                                                        </td>
                                                        @if($type == 'delvairy')
                                                            <td data-kt-ecommerce-order-filter="order_id">
                                                                <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->address }}</a>
                                                            </td>
                                                        @elseif($type == 'table')
                                                            <td data-kt-ecommerce-order-filter="order_id">
                                                                <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->table_number }}</a>
                                                            </td>                                                        
                                                        @endif
                                                        <td class="text-end">
                                                            <a href="/order/detail/{{ $item->order_id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" target="blank">
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
                                                                        <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
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
    <script>
        var x = document.getElementById("myAudio");
        function playAudio() {
            x.play();
        }
        window.addEventListener('refreshOrderList', event => {
            playAudio();
        });
        function pauseAudio() {
            x.pause();
        }
    </script>
</div>
