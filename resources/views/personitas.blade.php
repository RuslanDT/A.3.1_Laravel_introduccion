@extends('layout.main')

@section('principal')
  <header id="header" class="header d-flex align-items-center fixed-top">
      @include('layout.header')
  </header>
  <main id="main" data-aos="fade" data-aos-delay="1500" class="">
      <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery my-5">
      <div class="container-fluid my-5 py-5">
        <div class="row gy-4 justify-content-center my-5 py-5">
          @include('layout.galeriaPersonas')
        </div>
      </div>
    </section><!-- End Gallery Section -->
  </main>
  @include('layout.footer')
@endsection
