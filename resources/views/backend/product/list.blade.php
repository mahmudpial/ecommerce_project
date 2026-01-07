@extends('backend.layout.app')
@section('title', 'Admin Products')
@section('page-title', 'Admin Products List')

@section('content')

<div class="card">
    <h4 class="m-1">Product List</h4>
    <a class="m-1" href="{{ route('admin.products.create') }}">New Product</a>

    <table class="table text-center align-middle">
        @if ($products->isNotEmpty())

        <thead>
            <tr class="justify-content-center">
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Status</th>
                <th>Product_Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr >
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->is_active ? 'Active' : 'Inactive' }}</td>
                <td>
                    <img src="{{ asset('storage/public/products/' . $product->product_image) }}" alt="{{ $product->name }}" title="{{ $product->name }}" width="200">
                </td>

            </tr>
            @endforeach
        </tbody>

        @endif

    </table>

</div>

@endsection