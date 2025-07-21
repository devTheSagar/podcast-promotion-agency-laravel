@extends('frontend.master')

@section('title')
    Service Details
@endsection

@section('content')
    <!-- breadcrumb start -->
  <div class="breadcrumb-nav">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">podcast promotion</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- breadcrumb end -->

  <!-- pricing section start -->
  <section class="service-pricing" id="pricing">
    <div class="container">
      <div class="section-title text-center">
        <span class="title" data-aos="fade-up" data-aos-duration="600">pricing</span>
        <h2 class="sub-title" data-aos="fade-up" data-aos-duration="600">podcast promotion pricing plans</h2>
      </div>
      <div class="grid mb-5">
        @foreach ($service->plans as $plan)
          <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000">
            <div class="pricing-header">
              <h3>basic</h3>
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
              <a href="{{ route('user.plan-details') }}" class="btn">more deatils</a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- pricing section end -->
@endsection