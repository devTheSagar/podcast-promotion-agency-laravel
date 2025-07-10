@extends('frontend.master')

@section('title')
  Podcast Promotion
@endsection

@section('content')
    <!-- banner section start -->
  <section class="banner-section d-flex align-items-center position-relative">
    <!-- bubble animation start -->
    <div class="bubble-animation">
      <div class="bubble-animation-item"></div>
      <div class="bubble-animation-item"></div>
      <div class="bubble-animation-item"></div>
      <div class="bubble-animation-item"></div>
      <div class="bubble-animation-item"></div>
      <div class="bubble-animation-item"></div>
      <div class="bubble-animation-item"></div>
      <div class="bubble-animation-item"></div>
      <div class="bubble-animation-item"></div>
    </div>
    <!-- bubble animation end -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
           <div class="banner-text">
             <h2 class="mb-3">"An investment in your voice and visibility pays the best returns."</h2>
             <h1 class="mb-3 text-capitalize">fuel your podcast growth — the organic way.</h1>
             <p class="mb-4">Let us amplify your podcast and elevate your brand!</p>
             <a href="#services" class="btn btn-theme">try now</a>
           </div>
        </div>
        <div class="col-md-6 order-first order-md-last mb-5 mb-md-0">
            <div class="banner-img">
              <div class="circular-img">
                <div class="circular-img-inner">
                  <div class="circular-img-circle"></div>
                  <img src="{{ asset('') }}frontend/assets/img/banner-img.png" alt="banner img">
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner section end -->

  <!-- fun facts section start -->
  <section class="fun-facts-section">
    <div class="container">
      <div class="box py-2">
        <div class="row text-center">
          <div class="col-md-6 col-lg-3">
            <div class="fun-facts-item">
              <h2 class="style-4">2</h2>
              <p>services we've</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="fun-facts-item">
              <h2 class="style-2">500+</h2>
              <p>clients</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="fun-facts-item">
              <h2 class="style-3">50+</h2>
              <p>countries</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="fun-facts-item">
              <h2 class="style-4">20+</h2>
              <p>team members</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- fun facts section end -->

  <!-- services section start -->
  <section class="courses-section section-padding" id="services">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="section-title text-center">
            <h2 class="title">services</h2>
            <p class="sub-title">Find the right service for you</p>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- service item start -->
        <div class="col-md-6 col-lg-3 mx-5">
          <div class="courses-item">
            <a href="{{ route('user.service-details') }}" class="link">
              <div class="courses-item-inner">
                <div class="img-box">
                  <img src="{{ asset('') }}frontend/assets/img/services/apple_podcast_transparent.png" alt="course img">
                </div>
                <h3 class="title text-center">podcast promotion</h3>
              </div>
            </a>
          </div>
        </div>
        <!-- service item end -->
        <!-- service item start -->
        <div class="col-md-6 col-lg-3 mx-5">
          <div class="courses-item">
            <a href="{{ route('user.service-details') }}" class="link">
              <div class="courses-item-inner">
                <div class="img-box">
                  <img src="{{ asset('') }}frontend/assets/img/services/spotify_transparent.png" alt="course img">
                </div>
                <h3 class="title text-center">spotify promotion</h3>
              </div>
            </a>
          </div>
        </div>
        <!-- service item end -->
      </div>
    </div>
  </section>
  <!-- services section end -->


  <!-- podcast pricing section start -->
  <section class="service-pricing" id="pricing">
    <div class="container">
      <div class="section-title text-center">
        <span class="title" data-aos="fade-up" data-aos-duration="600">pricing</span>
        <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">podcast promotion pricing plans</h2>
      </div>
      <div class="grid">
        <!-- basic plan start -->
        <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000">
          <div class="pricing-header">
            <h3>basic</h3>
            <div class="service-price"><span>$499</span> 30 days</div>
          </div>
          <div class="pricing-body">
            <ul>
              <li><i class="fas fa-check"></i> 10K-15K traffic</li>
              <li><i class="fas fa-check"></i> 5K-10K download</li>
              <li><i class="fas fa-check"></i> rank in top 200</li>
              <li><i class="fas fa-check"></i> increased follower</li>
              <li><i class="fas fa-check"></i> choose your country</li>
              <!-- <li><i class="fas fa-times"></i> bathroom cleaning</li> -->
            </ul>
          </div>
          <div class="pricing-footer">
            <a href="service-details.html" class="btn">more deatils</a>
          </div>
        </div>
        <!-- basic plan end -->

        <!-- standard plan start -->
        <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div class="pricing-header">
            <h3>standard</h3>
            <div class="service-price"><span>$699</span> 30 days</div>
          </div>
          <div class="pricing-body">
            <ul>
              <li><i class="fas fa-check"></i> 14K-21K traffic</li>
              <li><i class="fas fa-check"></i> 7K-14K download</li>
              <li><i class="fas fa-check"></i> rank in top 150</li>
              <li><i class="fas fa-check"></i> increased follower</li>
              <li><i class="fas fa-check"></i> choose your country</li>
              <!-- <li><i class="fas fa-times"></i> bathroom cleaning</li> -->
            </ul>
          </div>
          <div class="pricing-footer">
            <a href="service-details.html" class="btn">more deatils</a>
          </div>
        </div>
        <!-- standard plan end -->

        <!-- premium plan start -->
        <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <div class="pricing-header">
            <h3>premium</h3>
            <div class="service-price"><span>$999</span> 30 days</div>
          </div>
          <div class="pricing-body">
            <ul>
              <li><i class="fas fa-check"></i> 20K-30K traffic</li>
              <li><i class="fas fa-check"></i> 10K-20K download</li>
              <li><i class="fas fa-check"></i> rank in top 100</li>
              <li><i class="fas fa-check"></i> increased follower</li>
              <li><i class="fas fa-check"></i> choose your country</li>
              <!-- <li><i class="fas fa-times"></i> bathroom cleaning</li> -->
            </ul>
          </div>
          <div class="pricing-footer">
            <a href="service-details.html" class="btn">more deatils</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-12 text-center mt-3">
          <a href="podcast-promotion.html" class="btn btn-theme">view all</a>
        </div>
      </div>
  </section>
  <!-- podcast pricing section end -->


  <!-- spotify pricing section start -->
  <section class="service-pricing mt-5" id="pricing">
    <div class="container">
      <div class="section-title text-center">
        <!-- <span class="title" data-aos="fade-up" data-aos-duration="600">pricing</span> -->
        <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">spotify promotion pricing plans</h2>
      </div>
      <div class="grid">
        <!-- basic plan start -->
        <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000">
          <div class="pricing-header">
            <h3>basic</h3>
            <div class="service-price"><span>$499</span> 30 days</div>
          </div>
          <div class="pricing-body">
            <ul>
              <li><i class="fas fa-check"></i> 5K-10K traffic</li>
              <li><i class="fas fa-check"></i> 2K-8K download</li>
              <li><i class="fas fa-check"></i> rank in top 50</li>
              <li><i class="fas fa-check"></i> increased follower</li>
              <li><i class="fas fa-check"></i> choose your country</li>
            </ul>
          </div>
          <div class="pricing-footer">
            <a href="service-details.html" class="btn">more deatils</a>
          </div>
        </div>
        <!-- basic plan end -->

        <!-- standard plan start -->
        <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div class="pricing-header">
            <h3>standard</h3>
            <div class="service-price"><span>$699</span> 30 days</div>
          </div>
          <div class="pricing-body">
            <ul>
              <li><i class="fas fa-check"></i> 7K-14K traffic</li>
              <li><i class="fas fa-check"></i> 3K-12K download</li>
              <li><i class="fas fa-check"></i> rank in top 40</li>
              <li><i class="fas fa-check"></i> increased follower</li>
              <li><i class="fas fa-check"></i> choose your country</li>
            </ul>
          </div>
          <div class="pricing-footer">
            <a href="service-details.html" class="btn">more deatils</a>
          </div>
        </div>
        <!-- standard plan end -->

        <!-- premium plan start -->
        <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <div class="pricing-header">
            <h3>premium</h3>
            <div class="service-price"><span>$999</span> 30 days</div>
          </div>
          <div class="pricing-body">
            <ul>
              <li><i class="fas fa-check"></i> 10K-20K traffic</li>
              <li><i class="fas fa-check"></i> 5K-17K download</li>
              <li><i class="fas fa-check"></i> rank in top 30</li>
              <li><i class="fas fa-check"></i> increased follower</li>
              <li><i class="fas fa-check"></i> choose your country</li>
            </ul>
          </div>
          <div class="pricing-footer">
            <a href="service-details.html" class="btn">more deatils</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-12 text-center mt-3">
          <a href="spotify-promotion.html" class="btn btn-theme">view all</a>
        </div>
      </div>
  </section>
  <!-- spotify pricing section end -->


  <!-- testimonials section start -->
  <section class="testimonials-section section-padding position-relative">
    <div class="decoration-circles d-none d-lg-block">
      <div class="decoration-circles-item"></div>
      <div class="decoration-circles-item"></div>
      <div class="decoration-circles-item"></div>
      <div class="decoration-circles-item"></div>
    </div>
    <div class="decoration-imgs d-none d-lg-block">
      <!-- <img src="img/testimonial/1.png" alt="decoration img" class="decoration-imgs-item">
      <img src="img/testimonial/2.png" alt="decoration img" class="decoration-imgs-item">
      <img src="img/testimonial/3.png" alt="decoration img" class="decoration-imgs-item"> -->
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="section-title text-center">
            <h2 class="title">clients feedback</h2>
            <p class="sub-title">What our clients say</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <!-- <div class="img-box rounded-circle position-relative">
            <img src="img/testimonial/1.png" class="w-100 js-testimonial-img rounded-circle" alt="testimonial img">
          </div> -->
          <div id="carouselOne" class="carousel slide text-center" data-bs-ride="carousel">
            <div class="carousel-inner mb-4">
              <div class="carousel-item active">
                <div class="testimonials-item">
                  <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus et nisi fuga, repudiandae vero id sint necessitatibus eveniet? At, labore.</p>
                  <h3>john doe</h3>
                  <p class="text-2">web developer</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonials-item">
                  <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus et nisi fuga, repudiandae vero id sint necessitatibus eveniet? At, labore.</p>
                  <h3>john doe</h3>
                  <p class="text-2">web developer</p>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonials-item">
                  <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus et nisi fuga, repudiandae vero id sint necessitatibus eveniet? At, labore.</p>
                  <h3>john doe</h3>
                  <p class="text-2">web developer</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselOne" data-bs-slide="prev">
              <i class="fas fa-arrow-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselOne" data-bs-slide="next">
              <i class="fas fa-arrow-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonials section end -->
@endsection