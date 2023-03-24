@extends('layout.main')

@section('principal')
  <header id="header" class="header d-flex align-items-center fixed-top">
      @include('layout.header')
  </header>
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
      data-aos-delay="1500">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                  <h2>I'm <span>Jenny Wilson</span> a Professional Photographer from New York City</h2>
                  <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui
                      libero. Qui voluptas amet.</p>
                  <a href="contact.html" class="btn-get-started">Available for hire</a>
              </div>
          </div>
      </div>
  </section>
  <main id="main" data-aos="fade" data-aos-delay="1500">
      <!-- ======= Gallery Section ======= -->
      <section id="gallery" class="gallery">
          <div class="container-fluid">
              <div class="row gy-4 justify-content-center">
                @include('layout.galeria1')
              </div>
          </div>
      </section><!-- End Gallery Section -->
  </main>
  @include('layout.footer')
@endsection
