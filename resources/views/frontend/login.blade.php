@extends('frontend.layout.app')
@section('title', 'SimpleShop-loginPage')





@section('content')
    <div class="container">
        <!-- Login Section -->
        <section class="py-5 d-flex justify-content-center align-items-center bg-light" style="min-height: 90vh;">
            <div class="card shadow-lg border-0" style="max-width: 420px; width:100%; border-radius: 20px;">
                <div class="card-body p-4">

                    <h3 class="text-center fw-bold mb-4">Login</h3>

                    <form>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control form-control-lg rounded-pill"
                                placeholder="Enter your email">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Password</label>
                            <input type="password" class="form-control form-control-lg rounded-pill"
                                placeholder="Enter your password">
                        </div>

                        <!-- Login Button -->
                        <button class="btn btn-dark btn-lg w-100 rounded-pill mb-3">
                            Login
                        </button>

                        <!-- Forgot Password -->
                        <div class="text-center mb-2">
                            <a href="{{ url('/forget_password') }}" class="text-decoration-none">Forgot Password?</a>
                        </div>

                        <!-- Registration Button -->
                        <div class="text-center">
                            <a href="{{ url('/create_account') }}" class="btn btn-outline-dark rounded-pill w-100">
                                Create an Account
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        </section>


    </div>

@endsection