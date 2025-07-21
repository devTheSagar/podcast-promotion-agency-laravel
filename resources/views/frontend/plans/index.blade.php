@extends('frontend.master')

@section('title')
    Plan Details 
@endsection

@section('content')
    <!-- breadcrumb start -->
  <div class="breadcrumb-nav">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="courses.html">services</a></li>
          <li class="breadcrumb-item active" aria-current="page">plan details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- breadcrumb end -->

  <!-- course details section start -->
  <section class="course-details section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!-- course header start -->
          <div class="course-header box">
            <h2 class="text-capitalize">{{$planDetails->planName}}</h2>
            <div class="rating">
              <span class="average-rating">(4.5)</span>
              <span class="average-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </span>
              <span class="reviews">({{count($planDetails->ratings)}})</span>
            </div>
            <ul>
              <li>total clients - <span>{{count($planDetails->ratings)}}</span></li>
              
              @if ($teamLead)
                  <li>team lead - <span><a href="#">{{ $teamLead->memberName }}</a></span></li>
              @else
                  <p>No team lead assigned yet.</p>
              @endif 
            </ul>
          </div>
          <!-- course header end -->

          <!-- course tabs start -->
          <nav class="course-tabs">
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
              <button class="nav-link active" id="course-curriculum-tab" data-bs-toggle="tab" data-bs-target="#course-curriculum" type="button" role="tab" aria-controls="course-curriculum" aria-selected="true">features</button>
              <button class="nav-link" id="course-description-tab" data-bs-toggle="tab" data-bs-target="#course-description" type="button" role="tab" aria-controls="course-description" aria-selected="false">description</button>
              <button class="nav-link" id="course-instructor-tab" data-bs-toggle="tab" data-bs-target="#course-instructor" type="button" role="tab" aria-controls="course-instructor" aria-selected="false">team</button>
              <button class="nav-link" id="course-reviews-tab" data-bs-toggle="tab" data-bs-target="#course-reviews" type="button" role="tab" aria-controls="course-reviews" aria-selected="false">reviews</button>
            </div>
          </nav>
          <!-- course tabs end -->

          <!-- tab panes start -->
          <div class="tab-content" id="nav-tabContent">
             
            <!-- course curriculum start -->
            <div class="tab-pane fade show active" id="course-curriculum" role="tabpanel" aria-labelledby="course-curriculum-tab">
              <div class="course-curriculum box">
                <h3 class="text-capitalize mb-4">Features</h3>

                <ul>
                  @foreach (json_decode($planDetails->planFeatures, true) as $feature)
                    <li><i class="fas fa-check"></i> {{ $feature }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!-- course curriculum end -->
            
            <!-- course description start -->
            <div class="tab-pane fade " id="course-description" role="tabpanel" aria-labelledby="course-description-tab">
              <div class="course-description box">
                <h3 class="text-capitalize mb-4">description</h3>
                {!! $planDetails->planDescription !!}
              </div>
            </div>
            <!-- course description end -->
            
            <!-- course instructor start -->
            <div class="tab-pane fade " id="course-instructor" role="tabpanel" aria-labelledby="course-instructor-tab">
              @foreach ($planDetails->teams as $team)
                <div class="course-instructor box">
                <h3 class="mb-3 text-capitalize">{{ $team->position === 1 ? 'Team Lead' : 'Team Member' }}</h3>
                <div class="instructor-details">
                  <div class="details-wrap d-flex align-items-center flex-wrap">
                    <div class="left-box me-4">
                      <div class="img-box">
                        <img src="{{ asset($team->memberImage) }}" class="rounded-circle" alt="instructor img">
                      </div>
                    </div>
                    <div class="right-box">
                      <h4>{{ $team->memberName }} </h4>
                      <ul>
                        <li><i class="fas fa-star"></i> {{$team->memberRating}}</li>
                        <li><i class="fas fa-play-circle"></i> 10 Courses</li>
                        <li><i class="fas fa-certificate"></i> {{ $team->totalReview }}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="text">
                    <p class="mb-0">{!! $team->memberDescription !!}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <!-- course instructor end -->

            <!-- course reviews start -->
            <div class="tab-pane fade " id="course-reviews" role="tabpanel" aria-labelledby="course-reviews-tab">
              <div class="course-reviews box">
                <!-- rating summary start -->
                <div class="rating-summary">
                  <h3 class="mb-4 text-capitalize">Clients feedback</h3>
                  <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center text-center">
                      <div class="rating-box">
                        <div class="average-rating">{{ number_format($averageRating, 1) }}</div>
                        <div class="average-stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="reviews">{{count($planDetails->ratings)}} Reviews</div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="rating-bars">
                        @for ($i = 5; $i >= 1; $i--)
                            <div class="rating-bars-item">
                                <div class="star-text">{{ $i }} Star</div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: {{ $starsPercent[$i] ?? 0 }}%;"></div>
                                </div>
                                <div class="percent">{{ $starsPercent[$i] ?? 0 }}%</div>
                            </div>
                        @endfor
                    </div>

                    </div>
                  </div>
                </div>
                <!-- rating summary end -->

                <!-- reviews filter start -->
                <div class="reviews-filter">
                  <h3 class="mb-4 text-capitalize">reviews</h3>
                  <form action="">
                    <div class="form-group">
                      <i class="fas fa-chevron-down select-icon"></i>
                      <select class="form-control">
                        <option value="">All Reviews</option>
                        <option value="1">1 Star</option>
                        <option value="2">2 Star</option>
                        <option value="3">3 Star</option>
                        <option value="4">4 Star</option>
                        <option value="5">5 Star</option>
                      </select>
                    </div>
                  </form>
                </div>
                <!-- reviews filter end -->

                <!-- reviews list start -->
                <div class="reviews-list">
                  <!-- reviews item start -->

                  @foreach ($planDetails->ratings as $rating)
                    <div class="reviews-item">
                    <div class="img-box">
                      <img src="{{ asset('') }}frontend/assets/img/review/1.png" alt="review img">
                    </div>
                    <h4>{{ $rating->clientName }}</h4>
                    <div class="stars-rating">
                      {{-- <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i> --}}
                      {{-- Stars --}}
                      @for ($i = 1; $i <= 5; $i++)
                          @if ($i <= $rating->planRating)
                              <i class="fas fa-star"></i> {{-- filled star --}}
                          @else
                              <i class="far fa-star"></i> {{-- empty star --}}
                          @endif
                      @endfor
                      {{-- <span class="date">1 week ago</span> --}}
                    </div>
                    <p>{{ $rating->clientReview }}</p>
                  </div>
                  @endforeach
                  <!-- reviews item end -->
                </div>
                <!-- reviews list end -->
                <button type="button" class="btn btn-theme">more reviews</button>
              </div>
            </div>
            <!-- course reviews end -->
          </div>
          <!-- tab panes end -->
        </div>
        <div class="col-lg-4">
          <!-- course sidebar start -->
          <div class="course-sidebar box">
            <div class="img-box position-relative" data-bs-toggle="modal" data-bs-target="#video-modal">
              <img src="{{ asset('') }}frontend/assets/img/courses/web-development/3.jpg" class="w-100" alt="course img">
              <div class="play-icon">
                <i class="fas fa-play"></i>
              </div>
              <p class="text-center">Course Preview</p>
            </div>
            <div class="price d-flex align-items-center mb-3">
              {{-- <span class="price-old text-decoration-line-through">$100</span> --}}
              <span class="price-new">$ {{$planDetails->planPrice}}</span>
              {{-- <span class="price-discount">51% Off</span> --}}
            </div>
            <h3 class="mb-3">Plan Features</h3>
            <ul>
              @foreach (json_decode($planDetails->planFeatures, true) as $feature)
                <li><i class="fas fa-check"></i> {{ $feature }}</li>
              @endforeach
            </ul>
            <div class="btn-wrap">
              <!-- <button type="button" class="btn btn-theme btn-block">enroll now</button> -->
              <a href="{{ route('user.checkout') }}" type="button" class="btn btn-theme btn-block">enroll now</a>
            </div>
          </div>
          <!-- course sidebar end -->
        </div>
      </div>
    </div>
  </section>
  <!-- course details section end -->

@endsection