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
        @foreach ($services as $service)
          <div class="col-md-6 col-lg-3 mx-5">
            <div class="courses-item">
              <a href="{{ route('user.service-details', ['id' => $service->id]) }}" class="link">
                <div class="courses-item-inner">
                  <div class="img-box">
                    <img src="{{ asset($service->serviceImage) }}" alt="service img" height="200px">
                  </div>
                  <h3 class="title text-center">{{ $service->serviceName }}</h3>
                </div>
              </a>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>
  <!-- services section end -->


  {{-- loop to get services  --}}
  <div class="section-title text-center mb-0 pb-0">
    <span class="title" data-aos="fade-up" data-aos-duration="600">pricing</span>
  </div>
  @foreach ($services as $service)
    <section class="service-pricing mb-5 pb-5" id="pricing">
    <div class="container">
      <div class="section-title text-center">
        {{-- <span class="title" data-aos="fade-up" data-aos-duration="600">pricing</span> --}}
        <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">{{ ucwords($service->serviceName) }} Pricing Plans</h2>
      </div>
      <div class="grid">
        {{-- loop to et plan under each service  --}}
        @foreach ($service->plans as $plan)
          <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000">
            <div class="pricing-header">
              <h3>{{ $plan->planName }}</h3>
              <div class="service-price"><span>$ {{ $plan->planPrice }}</span> {{$plan->planDuration}} days</div>
            </div>
            <div class="pricing-body">
              <ul>
                @foreach (json_decode($plan->planFeatures, true) as $feature)
                  <li><i class="fas fa-check"></i> {{ $feature }}</li>
                @endforeach
              </ul>
            </div>
            <div class="pricing-footer">
              {{-- <a href="{{ route('user.plan-details', ['id' => $plan->id]) }}" class="btn">more deatils</a> --}}
              @if (Str::contains(strtolower($plan->planName), 'custom'))
                <a href="{{ route('user.message') }}" class="btn">Contact Us</a>
              @else
                <a href="{{ route('user.plan-details', ['id' => $plan->id]) }}" class="btn">More Details</a>
              @endif
            </div>
          </div>
        @endforeach
        
      </div>
    </div>
    <div class="row">
        <div class="col-12 text-center mt-3">
          <a href="{{ route('user.service-details', ['id' => $service->id]) }}" class="btn btn-theme">view all {{ $service->serviceName }} plans</a>
        </div>
      </div>
  </section>
  @endforeach


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
          <div id="carouselOne" class="carousel slide text-center" data-bs-ride="carousel">
            <div class="carousel-inner mb-4">
              @foreach ($testimonials as $testimonial)
                <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
                  <div class="testimonials-item">
                    <p class="text-1">{{ $testimonial->testimonial }}</p>
                    <h3>{{ $testimonial->name }}</h3>
                    <p class="text-2">{{ $testimonial->designation }}</p>
                  </div>
                </div>
              @endforeach
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