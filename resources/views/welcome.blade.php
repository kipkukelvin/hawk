<link rel="stylesheet" href="{{ asset('assets/css') }}">

<div class="hero-wrapper position-relative">
  <!-- Carousel -->
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
     
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
    <div class="carousel-inner">

          <div class="carousel-item active">
              <img src="{{ asset('assets/img/COVER.jpg') }}" class="d-block w-100 hero-image" alt="Slide 1">
          </div>

          <div class="carousel-item">
              <img src="{{ asset('assets/img/22.jpg') }}" class="d-block w-100 hero-image" alt="Slide 2">
          </div>

          <div class="carousel-item">
              <img src="{{ asset('assets/img/54.jpg') }}" class="d-block w-100 hero-image" alt="Slide 3">
          </div>

      </div>
  </div>

  <!-- Overlay -->
  <div class="hero-overlay text-center">
      <h2 class="hero-title">
          Welcome to Siloam Medical, Technical & Commercial Training College
      </h2>

      <div class="hero-buttons mt-3">
          <a href="{{ route('academic.programs') }}" class="btn btn-primary btn-lg px-4">Apply Now</a>
          <a href="#academic-section" class="btn btn-outline-light btn-lg px-4 ms-2">Learn More</a>
      </div>
  </div>

  <!-- Slider controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
