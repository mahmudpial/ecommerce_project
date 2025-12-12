  @extends('frontend.layout.app')
  @section('title','SimpleShop-ProductPage')





  @section('content')
  <div class="container">
      < <!-- Realistic Product Section -->
          <div class="container my-5">
              <h2 class="text-center fw-bold mb-4">Our Products</h2>

              <div class="row g-4">

                  <!-- Product 1 -->
                  <div class="col-md-3">
                      <div class="p-3 border rounded-4 shadow-sm product-card bg-white">
                          <img src="https://via.placeholder.com/250x200" class="img-fluid rounded mb-3" alt="Product Image">

                          <div class="text-start">
                              <h5 class="fw-semibold mb-1">Product One</h5>
                              <p class="text-muted small mb-2">High Quality & Best Price</p>
                              <p class="fw-bold text-primary fs-5 mb-3">$20</p>

                              <div class="d-flex gap-2">
                                  <a href="#" class="btn btn-outline-info flex-fill rounded-3 fw-semibold">View</a>
                                  <a href="#" class="btn btn-success flex-fill rounded-3 fw-semibold">Add to Cart</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Product 2 -->
                  <div class="col-md-3">
                      <div class="p-3 border rounded-4 shadow-sm product-card bg-white">
                          <img src="https://via.placeholder.com/250x200" class="img-fluid rounded mb-3" alt="Product Image">

                          <div class="text-start">
                              <h5 class="fw-semibold mb-1">Product Two</h5>
                              <p class="text-muted small mb-2">Top Seller Item</p>
                              <p class="fw-bold text-primary fs-5 mb-3">$30</p>

                              <div class="d-flex gap-2">
                                  <a href="#" class="btn btn-outline-info flex-fill rounded-3 fw-semibold">View</a>
                                  <a href="#" class="btn btn-success flex-fill rounded-3 fw-semibold">Add to Cart</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Product 3 -->
                  <div class="col-md-3">
                      <div class="p-3 border rounded-4 shadow-sm product-card bg-white">
                          <img src="https://via.placeholder.com/250x200" class="img-fluid rounded mb-3" alt="Product Image">

                          <div class="text-start">
                              <h5 class="fw-semibold mb-1">Product Three</h5>
                              <p class="text-muted small mb-2">Popular Among Customers</p>
                              <p class="fw-bold text-primary fs-5 mb-3">$40</p>

                              <div class="d-flex gap-2">
                                  <a href="#" class="btn btn-outline-info flex-fill rounded-3 fw-semibold">View</a>
                                  <a href="#" class="btn btn-success flex-fill rounded-3 fw-semibold">Add to Cart</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Product 4 -->
                  <div class="col-md-3">
                      <div class="p-3 border rounded-4 shadow-sm product-card bg-white">
                          <img src="https://via.placeholder.com/250x200" class="img-fluid rounded mb-3" alt="Product Image">

                          <div class="text-start">
                              <h5 class="fw-semibold mb-1">Product Four</h5>
                              <p class="text-muted small mb-2">Premium Quality Product</p>
                              <p class="fw-bold text-primary fs-5 mb-3">$50</p>

                              <div class="d-flex gap-2">
                                  <a href="#" class="btn btn-outline-info flex-fill rounded-3 fw-semibold">View</a>
                                  <a href="#" class="btn btn-success flex-fill rounded-3 fw-semibold">Add to Cart</a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

  </div>

  @endsection