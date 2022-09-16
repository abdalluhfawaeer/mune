<div>
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">{{ __('text.item') }}
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                </h1>
            </div>
        </div>
    </div>
    <br><br><br>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div id="kt_ecommerce_add_product_form"
                    class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{ __('text.photo') }}</h2>
                                </div>
                            </div>
                            <div class="card-body text-center pt-0">
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                    data-kt-image-input="true"
                                    style="background-image:url({{ method_exists($this->photo, 'temporaryUrl') ? $this->photo->temporaryUrl() : asset('storage/' . $this->photo) }})">
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-kt-initialized="1">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg"
                                            wire:model.dafer="photo">
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
                                <div class="text-muted fs-7">Only *.png, *.jpg and
                                    *.jpeg image accepted</div>
                                @error('photo')
                                    <span class="alert alert-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{ __('text.status') }}</h2>
                                </div>
                                <div class="card-toolbar">
                                    @if ($status == 'active')
                                        <div class="rounded-circle bg-success w-15px h-15px"
                                            id="kt_ecommerce_add_product_status"></div>
                                    @else
                                        <div class="rounded-circle bg-danger w-15px h-15px"
                                            id="kt_ecommerce_add_product_status"></div>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-control form-control-solid" wire:model.dafer="status">
                                    <option value="active" selected>{{ __('text.active') }}</option>
                                    <option value="not_active">{{ __('text.not_active') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-body pt-0">
                                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary"
                                    wire:click="save">
                                    <span class="indicator-label">{{ __('text.SaveChanges') }}</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
                            role="tablist">
                            <li class="nav-item" role="presentation" wire:ignore>
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_ecommerce_add_product_general" aria-selected="true"
                                    role="tab">{{ __('text.item') }}</a>
                            </li>
                            @if ($type == 'order')
                                <li class="nav-item" role="presentation" wire:ignore>
                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                        href="#kt_ecommerce_add_product_advanced" aria-selected="false" tabindex="-1"
                                        role="tab">{{ __('text.add_one_option') }}</a>
                                </li>
                                <li class="nav-item" role="presentation" wire:ignore>
                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                        href="#kt_ecommerce_add_product_advanced_2" aria-selected="false" tabindex="-2"
                                        role="tab">{{ __('text.add_multiple_option') }}</a>
                                </li>
                            @endif
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                role="tab-panel" wire:ignore.self>
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>{{ __('text.item') }}</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">{{ __('text.name_ar') }}</label>
                                                <input type="text" name="product_name" class="form-control mb-2"
                                                    placeholder="{{ __('text.name_ar') }}"
                                                    wire:model.defer="name_ar">
                                                <br>
                                                @error('name_ar')
                                                    <span class="alert alert-danger"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">{{ __('text.name_en') }}</label>
                                                <input type="text" name="product_name" class="form-control mb-2"
                                                    placeholder="{{ __('text.name_en') }}"
                                                    wire:model.dafer="name_en">
                                                <br>
                                                @error('name_en')
                                                    <span class="alert alert-danger"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">{{ __('text.Price') }}</label>
                                                <input type="number" step="any" name="product_name"
                                                    class="form-control mb-2" placeholder="{{ __('text.Price') }}"
                                                    wire:model.dafer="price">
                                                <br>
                                                @error('price')
                                                    <span class="alert alert-danger"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">{{ __('text.Description') }}</label>
                                                <textarea class="form-control" rows="3" wire:model.dafer="desc"></textarea>
                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">{{ __('text.category') }}</label>
                                                <select class="form-control form-control-solid"
                                                    wire:model.dafer="cat">
                                                    <option value="" selected>{{ __('text.category') }}</option>
                                                    @foreach ($category as $cat)
                                                        @if (app()->getLocale() == 'ar')
                                                            <option value="{{ $cat->id }}" selected>
                                                                {{ $cat->name_ar }}</option>
                                                        @else
                                                            <option value="{{ $cat->id }}" selected>
                                                                {{ $cat->name_en }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('cat')
                                                <span class="alert alert-danger"
                                                    role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($type == 'order')
                                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel"
                                    wire:ignore.self>
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <div class="card card-flush py-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>{{ __('text.additions') }}</h2>
                                                </div>
                                                <button class="btn btn-success btn-sm"
                                                    wire:click.prevent="add({{ $i }})"
                                                    style="height: 40px"><i
                                                        class="fa-sharp fa-solid fa-plus"></i></button>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="">
                                                    <div id="kt_ecommerce_add_product_options">
                                                        @foreach ($inputs as $key => $value)
                                                            <div class="form-group">
                                                                <div data-repeater-list="kt_ecommerce_add_product_options"
                                                                    class="d-flex flex-column gap-3">
                                                                    <div
                                                                        class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                        <div class="w-100 w-md-200px">
                                                                            <input type="text"
                                                                                class="form-control mw-100 w-200px"
                                                                                placeholder="{{ __('text.title_ar') }}"
                                                                                wire:model='title.{{ $value }}'>
                                                                        </div>
                                                                        <div class="w-100 w-md-200px">
                                                                            <input type="text"
                                                                                class="form-control mw-100 w-200px"
                                                                                placeholder="{{ __('text.title_en') }}"
                                                                                wire:model='title_en.{{ $value }}'>
                                                                        </div>
                                                                        <div class="w-100 w-md-200px">
                                                                            <select
                                                                                class="form-control form-control-solid"
                                                                                wire:model.dafer="req.{{ $value }}">
                                                                                <option value="">
                                                                                    {{ __('text.status') }}</option>
                                                                                <option value="1">
                                                                                    {{ __('text.required') }}</option>
                                                                                <option value="0" selected>
                                                                                    {{ __('text.not_required') }}
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <button class="btn btn-danger btn-sm"
                                                                                wire:click.prevent="remove({{ $key }})"><i
                                                                                    class="fa-sharp fa-solid fa-trash"></i></button>
                                                                            <button class="btn btn-success btn-sm"
                                                                                wire:click.prevent="add2({{ $value }},{{ $y }})"><i
                                                                                    class="fa-sharp fa-solid fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group p-5">
                                                                @if (isset($inputs_a[$value]))
                                                                    @foreach ($inputs_a[$value] as $key2 => $values)
                                                                        <div class="d-flex flex-column gap-3">
                                                                            <div
                                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                                <div class="w-100 w-md-200px">
                                                                                    <input type="text"
                                                                                        class="form-control mw-100 w-200px"
                                                                                        placeholder="{{ __('text.name_ar') }}"
                                                                                        wire:model='name.{{ $value }}.{{ $values }}'>
                                                                                </div>
                                                                                <div class="w-100 w-md-200px">
                                                                                    <input type="text"
                                                                                        class="form-control mw-100 w-200px"
                                                                                        placeholder="{{ __('text.name_en') }}"
                                                                                        wire:model='name_en_a.{{ $value }}.{{ $values }}'>
                                                                                </div>
                                                                                <div class="w-100 w-md-200px">
                                                                                    <input type="number"
                                                                                        step="any"
                                                                                        class="form-control mw-100 w-200px"
                                                                                        placeholder="{{ __('text.Price') }}"
                                                                                        wire:model='price_a.{{ $value }}.{{ $values }}'>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <button
                                                                                        class="btn btn-danger btn-sm"
                                                                                        wire:click.prevent="remove2({{ $key2 }},{{ $value }})"><i
                                                                                            class="fa-sharp fa-solid fa-trash"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                            <br>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced_2" role="tab-panel"
                                    wire:ignore.self>
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <div class="card card-flush py-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>{{ __('text.add_multiple_option') }}</h2>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="">
                                                    <div id="kt_ecommerce_add_product_options">
                                                        <div class="form-group p-5">
                                                            @for ($i = 0; $i <= 30; $i++)
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="{{ __('text.name_ar') }}"
                                                                            wire:model='adds_name.{{ $i }}'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="{{ __('text.name_en') }}"
                                                                            wire:model='adds_name_en.{{ $i }}'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="number" step="any"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="{{ __('text.Price') }}"
                                                                            wire:model='adds_price.{{ $i }}'>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                            @endif
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
                    </div>
