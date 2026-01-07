@extends('frontend.layout.app')
@section('title', 'SimpleShop-forgotPage')





@section('content')
    <div class="container">
        <!-- Forgot Password Section -->
        <section class="py-5 d-flex justify-content-center align-items-center bg-light" style="min-height: 90vh;">
            <div class="card shadow-lg border-0" style="max-width: 420px; width:100%; border-radius: 20px;">
                <div class="card-body p-4">

                    <h3 class="text-center fw-bold mb-4">Forgot Password</h3>

                    <form>

                        <!-- Email -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Enter Your Email</label>
                            <input type="email" class="form-control form-control-lg rounded-pill"
                                placeholder="Your registered email">
                        </div>

                        <!-- Reset Button -->
                        <button class="btn btn-dark btn-lg w-100 rounded-pill mb-3">
                            Send Reset Link
                        </button>

                        <!-- Back to Login -->
                        <div class="text-center">
                            <a href="#" class="text-decoration-none">Back to Login</a>
                        </div>

                    </form>

                </div>
            </div>
        </section>

    </div>

@endsection