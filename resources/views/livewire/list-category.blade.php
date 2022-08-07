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
                                                <input type="text" class="form-control form-control-solid ps-10" wire:model="name_en_search" placeholder="name en">
                                            </div>
                                            <div class="position-relative w-md-400px me-md-2">
                                                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <input type="text" class="form-control form-control-solid ps-10" name="search" wire:model="name_ar_search" placeholder="name ar">
                                            </div>
                                            <div class="position-relative w-md-400px me-md-2">
                                                <select class="form-control form-control-solid ps-10" wire:model="status_search">
                                                    <option value="">status</option>
                                                    <option value="active" selected>active</option>
                                                    <option value="not_active">not_active</option>
                                                </select> 
                                            </div>
                                        
                                            <div class="position-relative w-md-400px me-md-2">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Modal-->
                            <div class="modal fade" tabindex="-1" id="kt_modal_1" wire:ignore.self>
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Add</h3>
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-1"></span>
                                            </div>
                                        </div>
                            
                                        <div class="modal-body">
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">Name AR</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Example input" wire:model="name_ar"/>
                                                <br>
                                                @error('name_ar') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">Name En</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Example input" wire:model="name_en"/>
                                                <br>
                                                @error('name_en') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="mb-10">
                                                <label for="exampleFormControlInput1" class="required form-label">status</label>
                                                <select class="form-control form-control-solid ps-10" wire:model="status">
                                                    <option value="active" selected>active</option>
                                                    <option value="not_active">not_active</option>
                                                </select>                                            
                                            </div>
                                        </div>
                            
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" wire:click="save">Save changes</button>
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
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th>ID</th>
                                                        <th>Name ar</th>
                                                        <th>Name en</th>
                                                        <th>Status</th>
                                                        <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                            colspan="1" aria-label="Actions" style="width: 143.5px;">
                                                            Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    @foreach ($list as $item)
                                                    <tr class="odd">
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->id }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->name_ar }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            <a class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->name_en }}</a>
                                                        </td>
                                                        <td data-kt-ecommerce-order-filter="order_id">
                                                            @if ($item->staus == 'active')
                                                                <a class="badge badge-light-success">{{ $item->staus }}</a>
                                                            @else
                                                                <a class="badge badge-light-danger">{{ $item->staus }}</a>
                                                            @endif
                                                        </td>
                                                        <td class="text-end">
                                                            <a wire:click="set_data({{ $item->id }})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#edit_{{ $item->id }}">
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
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" tabindex="-1" id="edit_{{ $item->id }}" wire:ignore.self>
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title">Add</h3>
                                                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                                        <span class="svg-icon svg-icon-1"></span>
                                                                    </div>
                                                                </div>
                                                    
                                                                <div class="modal-body">
                                                                    <div class="mb-10">
                                                                        <label for="exampleFormControlInput1" class="required form-label">Name AR</label>
                                                                        <input type="text" class="form-control form-control-solid" placeholder="Example input" wire:model="name_ar"/>
                                                                        <br>
                                                                        @error('name_ar') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                                                    </div>
                                                                    <div class="mb-10">
                                                                        <label for="exampleFormControlInput1" class="required form-label">Name En</label>
                                                                        <input type="text" class="form-control form-control-solid" placeholder="Example input" wire:model="name_en"/>
                                                                        <br>
                                                                        @error('name_en') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                                                    </div>
                                                                    <div class="mb-10">
                                                                        <label for="exampleFormControlInput1" class="required form-label">status</label>
                                                                        <select class="form-control form-control-solid ps-10" wire:model="status">
                                                                            <option value="active" selected>active</option>
                                                                            <option value="not_active">not_active</option>
                                                                        </select>                                            
                                                                    </div>
                                                                </div>
                                                    
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary" wire:click="edit({{ $item->id }})">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
