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
                                    {{ __('text.customize') }}
                                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <div id="kt_ecommerce_add_product_form"
                                    class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
                                    data-kt-redirect="/metronic8/demo1/../demo1/apps/ecommerce/catalog/products.html">
                                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                        <div class="card card-flush py-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>{{ __('text.logo') }}</h2>
                                                </div>
                                            </div>
                                            <div class="card-body text-center pt-0">
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                    data-kt-image-input="true"
                                                    style="background-image:url({{ method_exists($this->img, 'temporaryUrl') ? $this->img->temporaryUrl() : asset('storage/' . $this->img) }})">
                                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        data-kt-initialized="1">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg"
                                                            wire:model="img">
                                                        <input type="hidden" name="avatar_remove">
                                                    </label>
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        data-kt-initialized="1">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        data-kt-initialized="1">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                </div>
                                                <div class="text-muted fs-7">Only *.png, *.jpg and *.jpeg image accepted
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-flush py-4">
                                            <button type="submit" id="kt_ecommerce_add_product_submit"
                                            class="btn btn-primary" wire:click="save">
                                            <span class="indicator-label">{{ __('text.SaveChanges') }}</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
                                            role="tablist">
                                            <li class="nav-item" role="presentation" wire:ignore>
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                                    href="#kt_ecommerce_add_product_general" aria-selected="true"
                                                    role="tab">{{ __('text.customize') }}</a>
                                            </li>
                                            <li class="nav-item" role="presentation" wire:ignore>
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                                    href="#kt_ecommerce_add_product_advanced" aria-selected="false" tabindex="-1"
                                                    role="tab">{{ __('text.Contactus') }}</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                                role="tab-panel" wire:ignore>
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <div class="card card-flush py-4">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>{{ __('text.customize') }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label
                                                                    class="required form-label">{{ __('text.URLLink') }}</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="{{ __('text.MenuName') }}"
                                                                    wire:model.dafer="product_name" disabled>
                                                                @error('product_name')
                                                                    <span class="alert alert-danger"
                                                                        role="alert">{{ $message }}</span>
                                                                @enderror
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label
                                                                    class="required form-label">{{ __('text.Mode') }}</label>
                                                                <select class="form-control  ps-10"
                                                                    wire:model.dafer="color">
                                                                    <option value="" selected>
                                                                        {{ __('text.Mode') }}</option>
                                                                    <option value="Light" selected>
                                                                        {{ __('text.Light') }}</option>
                                                                    <option value="Dark" selected>
                                                                        {{ __('text.Dark') }}</option>
                                                                </select>
                                                                @error('color')
                                                                    <span class="alert alert-danger"
                                                                        role="alert">{{ $message }}</span>
                                                                @enderror
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label
                                                                    class="required form-label">{{ __('text.LinkwithWhatsAppnumber') }}</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="{{ __('text.Mobile') }}"
                                                                    wire:model.dafer="mobile">
                                                                @error('mobile')
                                                                    <span class="alert alert-danger"
                                                                        role="alert">{{ $message }}</span>
                                                                @enderror
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label
                                                                    class="required form-label">{{ __('text.Description') }}</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="{{ __('text.Description') }}"
                                                                    wire:model.dafer="desc">
                                                                @error('desc')
                                                                    <span class="alert alert-danger"
                                                                        role="alert">{{ $message }}</span>
                                                                @enderror
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label
                                                                    class="required form-label">{{ __('text.Email') }}</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="{{ __('text.Email') }}"
                                                                    wire:model.dafer="email" disabled>
                                                                @error('email')
                                                                    <span class="alert alert-danger"
                                                                        role="alert">{{ $message }}</span>
                                                                @enderror
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade hide active" id="kt_ecommerce_add_product_advanced"
                                                role="tab-panel" wire:ignore>
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <div class="card card-flush py-4">
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>{{ __('text.Contactus') }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="card-body pt-0">
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="form-label">faecbook</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2" placeholder="faecbook"
                                                                    wire:model.dafer="faecbook">
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="form-label">youtube</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2" placeholder="youtube"
                                                                    wire:model.dafer="youtube">
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="form-label">instagram</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2" placeholder="instagram"
                                                                    wire:model.dafer="instagram">
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="form-label">twitter</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2" placeholder="twitter"
                                                                    wire:model.dafer="twitter">
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="form-label">google maps
                                                                    link</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="google maps link"
                                                                    wire:model.dafer="maps">
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="form-label">{{ __('text.address') }}</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="{{ __('text.address') }}"
                                                                    wire:model.dafer="address">
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="form-label">{{ __('text.Contactemail') }}</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="{{ __('text.Contactemail') }}"
                                                                    wire:model.dafer="contact_email">
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                <label class="form-label">{{ __('text.Contactphonenumber') }}</label>
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="07-------"
                                                                    wire:model.dafer="phone_number_1">
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="07-------"
                                                                    wire:model.dafer="phone_number_2">
                                                                <input type="text" name="product_name"
                                                                    class="form-control mb-2"
                                                                    placeholder="07-------"
                                                                    wire:model.dafer="phone_number_3">
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                      
                                    @if (session()->has('message'))
                                        <script>
                                            toastr.options = {
                                                "closeButton": true,
                                                "debug": false,
                                                "newestOnTop": false,
                                                "progressBar": true,
                                                "positionClass": "toastr-bottom-center",
                                                "preventDuplicates": false,
                                                "onclick": null,
                                                "showDuration": "300",
                                                "hideDuration": "1000",
                                                "timeOut": "5000",
                                                "extendedTimeOut": "1000",
                                                "showEasing": "swing",
                                                "hideEasing": "linear",
                                                "showMethod": "fadeIn",
                                                "hideMethod": "fadeOut"
                                            };
                                            toastr.success("{{ session('message') }}");
                                    </script>
                                @endif
                                    </div>
                                    <div></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
