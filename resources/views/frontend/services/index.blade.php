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
            <a href="{{ route('user.plan-details') }}" class="btn">more deatils</a>
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
            <a href="{{ route('user.plan-details') }}" class="btn">more deatils</a>
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
            <a href="{{ route('user.plan-details') }}" class="btn">more deatils</a>
          </div>
        </div>

        <!-- custom plan start -->
        <div class="pricing-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <div class="pricing-header">
            <h3>custom</h3>
            <div class="service-price"><span></span>custom price and time</div>
          </div>
          <div class="pricing-body">
            <ul>
              <li><i class="fas fa-check"></i> custom traffic</li>
              <li><i class="fas fa-check"></i> custom download</li>
              <li><i class="fas fa-check"></i> custom rank</li>
              <li><i class="fas fa-check"></i> custom follower</li>
              <!-- <li><i class="fas fa-check"></i> choose your country</li> -->
              <!-- <li><i class="fas fa-times"></i> bathroom cleaning</li> -->
            </ul>
          </div>
          <div class="pricing-footer">
            <a href="{{ route('user.plan-details') }}" class="btn">more deatils</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- pricing section end -->
@endsection