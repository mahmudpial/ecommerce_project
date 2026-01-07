@extends('backend.layout.app')

{{-- Page Title (Browser Tab) --}}
@section('title', 'Create Product')

{{-- Page Title (Top Header) --}}
@section('page-title', 'Admin Create Product')

{{-- Optional Page CSS --}}
@section('css')
<style>
    .form-card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .05);
    }
</style>
@endsection

@section('content')

<div class="container-fluid">

    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.products.list') }}">Products</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </nav>

    {{-- Card --}}
    <div class="card form-card">
        <div class="card-header bg-white fw-bold">
            <i class="fa fa-plus me-2"></i> Add New Product
        </div>

        <div class="card-body">

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- Product Name --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="Enter product name">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Price --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" placeholder="Enter price">
                        @error('price')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    {{-- Category --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-select @error('category') is-invalid @enderror">
                            <option value="">--Select category--</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }} {{ old('category_id') == $category->id ? 'selected' : '' }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @error('category_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- code --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Code</label>
                        <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"
                            value="{{ old('code') }}" placeholder="Enter product code">

                        @error('code')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- Stock --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Stock</label>
                        <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror"
                            value="{{ old('stock') }}" placeholder="Available quantity">

                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Product Image</label>
                        <input type="file" name="product_image"  value="{{ old('product_image') }}" class="form-control @error('product_image') is-invalid @enderror">
                    </div>

                    {{-- Status --}}

                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" name="is_active" value="1" checked> Active
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="is_active" value="0"> Inactive
                        </label>

                    </div>

                    {{-- Description --}}
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" rows="4"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="Product description">{{ old('description') }}</textarea>
                    </div>

                </div>

                {{-- Buttons --}}
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.products.list') }}" class="btn btn-light me-2">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Save Product
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection

{{-- Optional Page JS --}}
@section('js')
<script>
    console.log('Create product page loaded');
</script>
@endsection