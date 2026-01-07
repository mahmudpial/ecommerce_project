@extends('frontend.layout.app')
@section('title', 'SimpleShop-HomePage')





@section('content')
    <div class="container">
        <!-- hero section add?÷ -->
        @include('frontend.partials.hero',[
            'title' => 'Welcome to Simple Shop',
            'description' => 'Buy your favorite products at the best price.'
            ])

        

        <!-- Feature Section -->
        <div class="container my-5">
            <h2 class="text-center mb-4">Our Features</h2>

            <div class="row text-center g-4">

                <!-- Feature 1 -->
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <img src="https://cdn-icons-png.flaticon.com/512/3523/3523063.png" width="60" class="mb-3"
                            alt="Feature Icon">
                        <h5>Fast Delivery</h5>
                        <p class="text-muted">আমরা আপনার অর্ডার দ্রুততম সময়ে আপনার কাছে পৌঁছে দিই।</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <img src="https://cdn-icons-png.flaticon.com/512/4436/4436481.png" width="60" class="mb-3"
                            alt="Feature Icon">
                        <h5>Best Quality</h5>
                        <p class="text-muted">আমাদের সব পণ্যই প্রিমিয়াম কোয়ালিটির এবং ১০০% যাচাই করা।</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" width="60" class="mb-3"
                            alt="Feature Icon">
                        <h5>Secure Payment</h5>
                        <p class="text-muted">আপনার পেমেন্ট সম্পূর্ণ নিরাপদ ও এনক্রিপ্টেড সিস্টেম দ্বারা পরিচালিত।</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Realistic Product Section -->
        <div class="container my-5">
            <h2 class="text-center fw-bold mb-4">Our Products</h2>
            <div class="row g-4">
                @foreach ($products as $product)
                    <!-- Product dynamically added -->
                    <div class="col-md-3">
                        <div class="p-3 border rounded-4 shadow-sm product-card bg-white">
                            <img src="{{ $product->product_image }}" class="img-fluid rounded mb-3" alt="{{ $product->title }}">
                            <div class="text-start">
                                <h5 class="fw-semibold mb-1">{{ $product->title }}</h5>
                                <p class="text-muted small mb-2">{{ $product->description }}</p>
                                <p class="fw-bold text-primary fs-5 mb-3">{{ $product->price }}</p>

                                <div class="d-flex gap-2">
                                    <a href="#" class="btn btn-outline-info flex-fill rounded-3 fw-semibold">View</a>
                                    <a href="#" class="btn btn-success flex-fill rounded-3 fw-semibold">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>


        </div>
    </div>

@endsection