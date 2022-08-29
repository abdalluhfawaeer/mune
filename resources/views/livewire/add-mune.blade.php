<div>
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('text.add_menu') }}
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
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>{{ __('text.add_menu') }}</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.Email') }}</label>
                                            <input type="email"  class="form-control mb-2"
                                                placeholder="{{ __('text.Email') }}" wire:model.dafer="email" @if($id_m > 0) disabled @endif>
                                            <br>
                                            @error('email') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.name') }}</label>
                                            <input type="name" class="form-control mb-2"
                                                placeholder="{{ __('text.name') }}" wire:model.dafer="name">
                                            <br>
                                            @error('name') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.MenuName') }}</label>
                                            <input type="text" class="form-control mb-2"
                                                placeholder="{{ __('text.MenuName') }}" wire:model.dafer="product_name">
                                                <br>
                                            @error('product_name') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.Mobile') }}</label>
                                            <input type="text" class="form-control mb-2"
                                                placeholder="{{ __('text.Mobile') }}" wire:model.dafer="mobile">
                                                <br>
                                                @error('mobile') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        
                                            </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.Password') }}</label>
                                            <input type="text" class="form-control mb-2"
                                             placeholder="{{ __('text.Password') }}" wire:model.dafer="password">
                                                <br>
                                                @error('password') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                       
                                             </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.StartDate') }}</label>
                                            <input type="date" class="form-control mb-2"
                                                placeholder="{{ __('text.StartDate') }}" wire:model.dafer="start_date">
                                                <br>
                                                @error('start_date') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                       
                                             </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.EndDate') }}</label>
                                            <input type="date" class="form-control mb-2"
                                                placeholder="{{ __('text.EndDate') }}" wire:model.dafer="end_date">
                                                <br>
                                                @error('end_date') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        
                                            </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.Price') }}</label>
                                            <input type="text" class="form-control mb-2"
                                                placeholder="{{ __('text.Price') }}" wire:model.dafer="price">
                                                <br>
                                                @error('price') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">{{ __('text.type') }}</label>
                                            <select class="form-control ps-10"
                                                    wire:model="type">
                                                    <option value="order">order</option>
                                                    <option value="viwe" selected>view</option>
                                            </select>
                                            <br>
                                            @error('price') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        
                                        </div>
                                        <div class="mb-10 fv-row fv-plugins-icon-container">
                                            <label class="required form-label">theme</label>
                                            <select class="form-control ps-10" wire:model="theme">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                            </select>
                                            <br>
                                            @error('price') <span class="alert alert-danger" role="alert">{{ $message }}</span> @enderror                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">{{ __('text.SaveChanges') }}</span>
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
