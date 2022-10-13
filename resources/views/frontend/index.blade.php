@include('frontend.layouts.header')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
        <div class="container">
            <div class="row justify-content-center gy-6">

                <div class="col-lg-5 col-md-8">
                    <img src="assets/img/hero-carousel/hero-carousel-1.svg" alt="" class="img-fluid img">
                </div>

                <div class="col-lg-9 text-center">
                    <h2>Welcome to Shortware</h2>
                    <p>Technology, design, ease of use, and a unique technique in obtaining short links that help in
                        advertising on the Internet.</p>
                    <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
                </div>

            </div>
        </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
        <div class="container">
            <div class="row justify-content-center gy-6">

                <div class="col-lg-5 col-md-8">
                    <img src="assets/img/hero-carousel/hero-carousel-2.svg" alt="" class="img-fluid img">
                </div>

                <div class="col-lg-9 text-center">
                    <h2>Usage of Shortware</h2>
                    <p>Technology, design, ease of use, and a unique technique in obtaining short links that help in
                        advertising on the Internet.</p>
                    <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
                </div>

            </div>
        </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
        <div class="container">
            <div class="row justify-content-center gy-6">

                <div class="col-lg-5 col-md-8">
                    <img src="assets/img/hero-carousel/hero-carousel-3.svg" alt="" class="img-fluid img">
                </div>

                <div class="col-lg-9 text-center">
                    <h2>Who Are We</h2>
                    <p>Technology, design, ease of use, and a unique technique in obtaining short links that help in
                        advertising on the Internet.</p>
                    <a href={{ url('/register') }}" class="btn-get-started scrollto ">Get Started</a>
                </div>

            </div>
        </div>
    </div><!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

</section><!-- End Hero Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>About Us</h2>
                <p>The shortware company is a free link shortening company that helps shorten links quickly and easily
                    without any technical problems and even without logging in.</p>
            </div>
            <hr><br>

            <div class="row g-4 g-lg-5 text-center" id="short_form" data-aos="fade-up" data-aos-delay="200"><br>
                <p class="text-success text-center">
                    @if (session('success_message'))
                        {!! session('success_message') !!}
                    @endif
                </p>
                <br>
                <form action="{{ route('short.url') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="orginal_url" class="form-label">Put your link here</label>
                        <input type="url" class="form-control" name="orginal_url" id="orginal_url">
                    </div>
                    @error('orginal_url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-secondary">Short Link</button>
                </form>
            </div>

        </div>
    </section><!-- End About Section -->




</main><!-- End #main -->

@include('frontend.layouts.footer')
