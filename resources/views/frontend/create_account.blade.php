@extends('frontend.layout.app')
@section('title', 'SimpleShop-createAccountPage')





@section('content')
    <div class="container">
        <!-- Registration Section -->
        <section class="py-5 d-flex justify-content-center align-items-center bg-light" style="min-height: 90vh;">
            <div class="card shadow-lg border-0" style="max-width: 450px; width:100%; border-radius: 20px;">
                <div class="card-body p-4">

                    <h3 class="text-center fw-bold mb-4">Create Account</h3>

                    <form>

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control form-control-lg rounded-pill"
                                placeholder="Enter your name">
                        </div>

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
                                placeholder="Create a password">
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Confirm Password</label>
                            <input type="password" class="form-control form-control-lg rounded-pill"
                                placeholder="Confirm your password">
                        </div>

                        <!-- Register Button -->
                        <button class="btn btn-dark btn-lg w-100 rounded-pill mb-3">
                            Register
                        </button>

                        <!-- Already have account -->
                        <div class="text-center">
                            <a href="#" class="text-decoration-none">Already have an account? Login</a>
                        </div>

                    </form>

                </div>
            </div>
        </section>
    </div>

@endsection