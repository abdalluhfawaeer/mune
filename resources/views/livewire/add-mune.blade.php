<div>
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span></h1>
            </div>
        </div>
    </div>
    <br><br><br>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div id="kt_ecommerce_add_product_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                <form wire:submit.prevent="save" class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">General</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Email</label>
                                            <input type="email" name="product_name" class="form-control mb-2"
                                                placeholder="Email" wire:model.dafer="email" @if($id_m > 0) disabled @endif>
                                            <br>
                                            @error('email') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">name</label>
                                            <input type="name" name="product_name" class="form-control mb-2"
                                                placeholder="Email" wire:model.dafer="name">
                                            <br>
                                            @error('name') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Product Name</label>
                                            <input type="text" name="product_name" class="form-control mb-2"
                                                placeholder="Product name" wire:model.dafer="product_name">
                                                <br>
                                            @error('product_name') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Mobile</label>
                                            <input type="text" name="product_name" class="form-control mb-2"
                                                placeholder="Mobile" wire:model.dafer="mobile">
                                                <br>
                                                @error('mobile') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Password</label>
                                            <input type="text" name="Password" class="form-control mb-2"
                                            livewire                           placeholder="Password" wire:model.dafer="password">
                                                <br>
                                                @error('password') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Start Date</label>
                                            <input type="date" name="product_name" class="form-control mb-2"
                                                placeholder="Start Date" wire:model.dafer="start_date">
                                                <br>
                                                @error('start_date') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">End Date</label>
                                            <input type="date" name="product_name" class="form-control mb-2"
                                                placeholder="End Date" wire:model.dafer="end_date">
                                                <br>
                                                @error('end_date') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">Price</label>
                                            <input type="text" name="product_name" class="form-control mb-2"
                                                placeholder="Price" wire:model.dafer="price">
                                                <br>
                                                @error('price') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/products.html"
                            id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress" wire:loading>Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div></div>
            </form>
        </div>
    </div>
</div>
