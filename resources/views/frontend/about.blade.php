  @extends('frontend.layout.app')
  @section('title','SimpleShop-AboutPage')





  @section('content')
  <div class="container">

      <!-- About Section -->
      <div class="container my-5">
          <div class="row align-items-center">

              <!-- Left Image -->
              <div class="col-md-6">
                  <img src="https://via.placeholder.com/500x350"
                      class="img-fluid rounded-4 shadow"
                      alt="About Us">
              </div>

              <!-- Right Text -->
              <div class="col-md-6 mt-4 mt-md-0">
                  <h2 class="fw-bold mb-3">About Our Shop</h2>
                  <p class="text-muted fs-6">
                      Welcome to <strong>SimpleShop</strong> — where quality meets affordability.
                      We provide premium-quality products at unbeatable prices.
                      Our mission is to ensure every customer gets the best shopping experience with
                      trusted service, fast delivery, and top-notch customer support.
                  </p>

                  <p class="text-muted fs-6">
                      We carefully select every product and ensure that it meets our
                      high-quality standards. With a dedicated team working behind the scenes,
                      SimpleShop is committed to bringing you the best online shopping experience.
                  </p>

                  <a href="#" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm mt-2">
                      Learn More
                  </a>
              </div>

          </div>
      </div>


  </div>

  @endsection