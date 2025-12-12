  @extends('frontend.layout.app')
  @section('title','SimpleShop-contactPage')





  @section('content')
  <div class="container">

      <!-- Contact Page Section -->
      <section id="contact" class="py-5" style="background:#f8fafc;">
          <div class="container">

              <!-- Heading -->
              <div class="text-center mb-5">
                  <h2 class="fw-bold">Contact Us</h2>
                  <p class="text-muted">We’d love to hear from you. Feel free to reach out anytime!</p>
              </div>

              <div class="row g-4">

                  <!-- Contact Info -->
                  <div class="col-md-5">
                      <div class="p-4 shadow-sm rounded bg-white h-100">
                          <h4 class="fw-bold mb-3">Get in Touch</h4>
                          <p class="text-muted mb-4">
                              If you have any questions, feel free to contact us using the form or using the details below.
                          </p>

                          <div class="mb-3">
                              <h6 class="fw-bold mb-1">📍 Address</h6>
                              <p class="text-muted">123 Street, Dhaka, Bangladesh</p>
                          </div>

                          <div class="mb-3">
                              <h6 class="fw-bold mb-1">📞 Phone</h6>
                              <p class="text-muted">+880 123 456 789</p>
                          </div>

                          <div>
                              <h6 class="fw-bold mb-1">📧 Email</h6>
                              <p class="text-muted">support@example.com</p>
                          </div>
                      </div>
                  </div>

                  <!-- Contact Form -->
                  <div class="col-md-7">
                      <div class="p-4 shadow-sm bg-white rounded h-100">
                          <h4 class="fw-bold mb-3">Send Message</h4>

                          <form>
                              <!-- Name -->
                              <div class="mb-3">
                                  <label class="form-label fw-bold">Full Name</label>
                                  <input type="text" class="form-control" placeholder="Enter your name">
                              </div>

                              <!-- Email -->
                              <div class="mb-3">
                                  <label class="form-label fw-bold">Email Address</label>
                                  <input type="email" class="form-control" placeholder="Enter your email">
                              </div>

                              <!-- Message -->
                              <div class="mb-3">
                                  <label class="form-label fw-bold">Message</label>
                                  <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                              </div>

                              <!-- Button -->
                              <button class="btn btn-dark w-100 py-2" style="border-radius:30px;">
                                  Send Message
                              </button>
                          </form>

                      </div>
                  </div>

              </div>
          </div>
      </section>


  </div>

  @endsection