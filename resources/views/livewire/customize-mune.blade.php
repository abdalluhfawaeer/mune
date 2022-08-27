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
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('text.customize') }}
                                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <div id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" data-kt-redirect="/metronic8/demo1/../demo1/apps/ecommerce/catalog/products.html">
                                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                        <div class="card card-flush py-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>{{ __('text.logo') }}</h2>
                                                </div>
                                            </div>
                                            <div class="card-body text-center pt-0">
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true" style="background-image:url({{ asset("storage/".$this->img) }})">
                                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-kt-initialized="1">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" wire:model="photo">
                                                        <input type="hidden" name="avatar_remove">
                                                    </label>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-kt-initialized="1">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-kt-initialized="1">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                                <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image accepted</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">{{ __('text.customize') }}</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <div class="card card-flush py-4">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>{{ __('text.customize') }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">{{ __('text.MenuName') }}</label>
                                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="{{ __('text.MenuName') }}" wire:model.dafer="product_name">
                                                                @error('product_name') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">{{ __('text.color') }}</label>
                                                                <input type="color" name="product_name" class="form-control mb-2" placeholder="{{ __('text.color') }}" wire:model.dafer="color">
                                                                @error('color') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">{{ __('text.color_text') }}</label>
                                                                <input type="color" name="color_text" class="form-control mb-2" placeholder="{{ __('text.color_text') }}" wire:model.dafer="color_text">
                                                                @error('color_text') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">{{ __('text.Mobile') }}</label>
                                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="{{ __('text.Mobile') }}" wire:model.dafer="mobile">
                                                                @error('mobile') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">{{ __('text.Description') }}</label>
                                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="{{ __('text.Description') }}" wire:model.dafer="desc">
                                                                @error('desc') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">{{ __('text.Email') }}</label>
                                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="{{ __('text.Email') }}" wire:model.dafer="email" disabled>
                                                                @error('email') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">faecbook</label>
                                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="Password" wire:model.dafer="faecbook">
                                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">youtube</label>
                                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="Password" wire:model.dafer="youtube">
                                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">instagram</label>
                                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="Password" wire:model.dafer="instagram">
                                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="required form-label">twitter</label>
                                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="Password" wire:model.dafer="twitter">
                                                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary" wire:click="save">
                                                <span class="indicator-label">{{ __('text.SaveChanges') }}</span>
                                                <span class="indicator-progress">Please wait... 
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    </div>
                                <div></div></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
