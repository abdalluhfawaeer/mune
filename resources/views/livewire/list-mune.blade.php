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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('text.all_menu') }}
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
                                                <input type="text" class="form-control form-control-solid ps-10" name="search" wire:model="name" placeholder="{{ __('text.name') }}">
                                            </div>
                                            <div class="position-relative w-md-400px me-md-2">
                                                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <input type="text" class="form-control form-control-solid ps-10" name="search" wire:model="b_name" placeholder="{{ __('text.MenuName') }}">
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
                                                    <select class="form-control form-control-solid ps-10" wire:model="status">
                                                        <option value="" selected>{{ __('text.status') }}</option>
                                                        <option value="active">{{ __('text.active') }}</option>
                                                        <option value="not_active">{{ __('text.not_active') }}</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-7">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="position-relative w-md-400px me-md-2">
                                                <select class="form-control form-control-solid ps-10" wire:model="type">
                                                    <option value="" selected>{{ __('text.type') }}</option>
                                                    <option value="order">order</option>
                                                    <option value="viwe" selected>view</option>
                                                </select>
                                            </div>
                                            @if (auth()->user()->role == 'admin')
                                            <div class="position-relative w-md-400px me-md-2">
                                                <select class="form-control form-control-solid ps-10" wire:model="sales">
                                                    <option value="" selected>{{ __('text.sales') }}</option>
                                                    @foreach ($user_sales as $sales)
                                                        <option value="{{ $sales->id }}">{{ $sales->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @endif
                                            <div class="position-relative w-md-400px me-md-2">
                                                <x-date-filter />
                                            </div>
                                            <div class="position-relative w-md-400px me-md-2" wire:ignore>
                                                <x-contray country='JO'/>
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
                                                        <th>{{ __('text.name')}}</th>
                                                        <th>{{ __('text.MenuName') }}</th>
                                                        <th>{{ __('text.Mobile') }}</th>
                                                        <th>{{ __('text.status') }}</th>
                                                        <th>{{ __('text.StartDate') }}</th>
                                                        <th>{{ __('text.EndDate') }}</th>
                                                        <th>theme</th>
                                                        <th>{{ __('text.type') }}</th>
                                                        <th>{{ __('text.Price') }}</th>
                                                        <th>{{ __('text.country') }}</th>
                                                        <th>{{ __('text.By') }}</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    @foreach ($list as $item)
                                                    <tr class="odd">
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->id }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->user->name }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->name }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->user->mobile }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            @if ($item->staus == 'active')
                                                                <a class="badge badge-light-success">{{ __('text.'.$item->staus) }}</a>
                                                            @else
                                                                <a class="badge badge-light-danger">{{ __('text.'.$item->staus) }}</a>
                                                            @endif
                                                        </td> 
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->start_date }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->end_date }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->additions->theme ?? 1 }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->additions->type ?? 'order' }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->price }}JD</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->user->country }} - {{ $item->user->state }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $this->currintUser($item->currint_user) }}</a>
                                                        </td>
                                                        <td class="d-flex">
                                                            <a href="/{{ $item->name }}/{{ $item->id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" target="blank">
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
                                                                        <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            @if (auth()->user()->role == 'admin')
                                                            <a href="/mune/edit/{{ $item->id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            <a href="#" wire:click="delete({{ $item->id }})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                            @endif
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
