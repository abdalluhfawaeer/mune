<div>
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
                                    <h2>Thumbnail</h2>
                                </div>
                            </div>
                            <div class="card-body text-center pt-0">
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                    data-kt-image-input="true"
                                    style="<br /> <b>Warning</b>: Undefined variable $imageBg in <b>/var/www/preview.keenthemes.com/kt-products/metronic/releases/2022-07-14-092914/core/html/dist/view/pages/apps/ecommerce/catalog/edit-product/_thumbnail.php</b> on line <b>30</b><br />">
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
                                <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and
                                    *.jpeg image files are accepted</div>
                                @error('photo')
                                    <span class="alert alert-danger" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Status</h2>
                                </div>
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px"
                                        id="kt_ecommerce_add_product_status"></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-control form-control-solid" wire:model.dafer="status">
                                    <option value="active" selected>active</option>
                                    <option value="not_active">not_active</option>
                                </select>
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-body pt-0">
                                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary"
                                    wire:click="save">
                                    <span class="indicator-label">Save Changes</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_ecommerce_add_product_general" aria-selected="true"
                                    role="tab">General</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                    href="#kt_ecommerce_add_product_advanced" aria-selected="false" tabindex="-1"
                                    role="tab">Advanced</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                                role="tab-panel" wire:ignore.self>
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>General</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Product Name</label>
                                                <input type="text" name="product_name" class="form-control mb-2"
                                                    placeholder="Product name" wire:model.defer="name_ar">
                                                <br>
                                                @error('name_ar')
                                                    <span class="alert alert-danger"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Product Name en</label>
                                                <input type="text" name="product_name" class="form-control mb-2"
                                                    placeholder="Product name" wire:model.dafer="name_en">
                                                <br>
                                                @error('name_en')
                                                    <span class="alert alert-danger"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">Price</label>
                                                <input type="number" step="any" name="product_name" class="form-control mb-2"
                                                    placeholder="Price" wire:model.dafer="price">
                                                <br>
                                                @error('price')
                                                    <span class="alert alert-danger"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="required form-label">calories</label>
                                                <input type="text" name="product_name" class="form-control mb-2"
                                                    placeholder="calories" wire:model.dafer="calories">

                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" rows="3" wire:model.dafer="desc"></textarea>
                                            </div>
                                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                                <label class="form-label">Category</label>
                                                <select class="form-control form-control-solid"
                                                    wire:model.dafer="cat">
                                                    <option value="" selected>Category</option>
                                                    @foreach ($category as $cat)
                                                        <option value="{{ $cat->id }}" selected>
                                                            {{ $cat->name_ar }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('cat')
                                                <span class="alert alert-danger" role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel"
                                wire:ignore.self>
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Variations</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="">
                                                <label class="form-label">Add Product Variations</label>
                                                <div id="kt_ecommerce_add_product_options">
                                                    <div class="form-group">
                                                        <div data-repeater-list="kt_ecommerce_add_product_options"
                                                            class="d-flex flex-column gap-3">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="Title ar" wire:model='title.0'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="Title en"
                                                                        wire:model='title_en.0'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <select class="form-control form-control-solid"
                                                                        wire:model.dafer="req.0">
                                                                        <option value=""></option>
                                                                        <option value="1">required</option>
                                                                        <option value="0">not required</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group p-5">
                                                        <div class="d-flex flex-column gap-3">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name ar" wire:model='name.0'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name en"
                                                                        wire:model='name_en_a.0'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="number" step="any"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="price" wire:model='price_a.0'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex flex-column gap-3">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name ar" wire:model='name.1'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name en"
                                                                        wire:model='name_en_a.1'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="number" step="any"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="price" wire:model='price_a.1'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex flex-column gap-3">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name ar" wire:model='name.2'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name en"
                                                                        wire:model='name_en_a.2'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="number" step="any"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="price" wire:model='price_a.2'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="d-flex flex-column gap-3">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name ar" wire:model='name.3'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name en"
                                                                        wire:model='name_en_a.3'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="number" step="any"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="price" wire:model='price_a.3'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="">
                                                    <label class="form-label">Add Product Variations</label>
                                                    <div id="kt_ecommerce_add_product_options">
                                                        <div class="form-group">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="Title ar" wire:model='title.1'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="number" step="any"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="Title en"
                                                                        wire:model='title_en.1'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <select class="form-control form-control-solid"
                                                                        wire:model.dafer="req.1">
                                                                        <option value=""></option>
                                                                        <option value="1" selected>required
                                                                        </option>
                                                                        <option value="0">not required</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group p-5">
                                                            <div class="d-flex flex-column gap-3">
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name ar" wire:model='name.4'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name en"
                                                                            wire:model='name_en_a.4'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="number" step="any"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="price"
                                                                            wire:model='price_a.4'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="d-flex flex-column gap-3">
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name ar" wire:model='name.5'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name en"
                                                                            wire:model='name_en_a.5'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="number" step="any"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="price"
                                                                            wire:model='price_a.5'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="d-flex flex-column gap-3">
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name ar" wire:model='name.6'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name en"
                                                                            wire:model='name_en_a.6'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="number" step="any"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="price"
                                                                            wire:model='price_a.6'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="d-flex flex-column gap-3">
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name ar" wire:model='name.7'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name en"
                                                                            wire:model='name_en_a.7'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="">
                                                    <label class="form-label">Add Product Variations</label>
                                                    <div id="kt_ecommerce_add_product_options">
                                                        <div class="form-group">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="Title ar" wire:model='title.2'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="Title en"
                                                                        wire:model='title_en.2'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <select class="form-control form-control-solid"
                                                                        wire:model.dafer="req.2">
                                                                        <option value=""></option>
                                                                        <option value="1" selected>required
                                                                        </option>
                                                                        <option value="0">not required</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group p-5">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name ar" wire:model='name.8'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name en"
                                                                        wire:model='name_en_a.8'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="number" step="any" step="any"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="price" wire:model='price_a.8' >
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name ar" wire:model='name.9'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="name en"
                                                                        wire:model='name_en_a.9'>
                                                                </div>
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="number" step="any"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="price" wire:model='price_a.9'>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="d-flex flex-column gap-3">
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name ar"
                                                                            wire:model='name.10'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name en"
                                                                            wire:model='name_en_a.10'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="number" step="any"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="price"
                                                                            wire:model='price_a.10'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="d-flex flex-column gap-3">
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name ar"
                                                                            wire:model='name.11'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name en"
                                                                            wire:model='name_en_a.11'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="number" step="any"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="price"
                                                                            wire:model='price_a.11'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <label class="form-label">Adds</label>
                                                        <div id="kt_ecommerce_add_product_options">
                                                            <div class="form-group p-5">
                                                                @for ($i =0 ;$i<=15;$i++)
                                                                <div
                                                                    class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name ar" wire:model='adds_name.{{ $i }}'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="text"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="name en"
                                                                            wire:model='adds_name_en.{{ $i }}'>
                                                                    </div>
                                                                    <div class="w-100 w-md-200px">
                                                                        <input type="number" step="any"
                                                                            class="form-control mw-100 w-200px"
                                                                            placeholder="price"
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
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
