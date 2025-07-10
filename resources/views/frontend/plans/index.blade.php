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
          <li class="breadcrumb-item"><a href="courses.html">courses</a></li>
          <li class="breadcrumb-item active" aria-current="page">course details</li>
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
            <h2 class="text-capitalize">podcast promotion basic plan</h2>
            <div class="rating">
              <span class="average-rating">(4.5)</span>
              <span class="average-stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </span>
              <span class="reviews">(30 Reviews)</span>
            </div>
            <ul>
              <li>total clients - <span>80</span></li>
              <li>team lead - <span><a href="#">john doe</a></span></li>
            </ul>
          </div>
          <!-- course header end -->

          <!-- course tabs start -->
          <nav class="course-tabs">
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
              <button class="nav-link active" id="course-curriculum-tab" data-bs-toggle="tab" data-bs-target="#course-curriculum" type="button" role="tab" aria-controls="course-curriculum" aria-selected="true">services</button>
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
                <h3 class="text-capitalize mb-4">services</h3>
                <!-- accordion start -->
                <div class="accordion" id="accordion">
                  <!-- accordion item start -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-1">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                        Language basics <span>2 lesssons | 20min</span>
                      </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordion">
                      <div class="accordion-body">
                        <ul>
                          <li>
                            <i class="fas fa-play-circle"></i>
                            Lexical structure
                            <span>06:00</span>
                          </li>
                          <li>
                            <i class="fas fa-play-circle"></i>
                            Values
                            <span>06:00</span>
                          </li>
                          <li>
                            <i class="fas fa-play-circle"></i>
                            Types
                            <span>06:00</span>
                          </li>
                          <li>
                            <i class="fas fa-play-circle"></i>
                            Variables
                            <span>06:00</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- accordion item end -->
                  <!-- accordion item start -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-2">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                        Types <span>2 lesssons | 20min</span>
                      </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordion">
                      <div class="accordion-body">
                        <ul>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          Strings
                          <span>06:00</span>
                        </li>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          Booleans
                          <span>06:00</span>
                        </li>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          Null and undefined
                          <span>06:00</span>
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- accordion item end -->
                  <!-- accordion item start -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                        Control structure <span>2 lesssons | 20min</span>
                      </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordion">
                      <div class="accordion-body">
                        <ul>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          If / else
                          <span>06:00</span>
                        </li>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          Switch
                          <span>06:00</span>
                        </li>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          Loops
                          <span>06:00</span>
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- accordion item end -->
                  <!-- accordion item start -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                        Function <span>2 lesssons | 20min</span>
                      </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordion">
                      <div class="accordion-body">
                        <ul>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          Arrow function
                          <span>06:00</span>
                        </li>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          parameters
                          <span>06:00</span>
                        </li>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          Return value
                          <span>06:00</span>
                        </li>
                        <li>
                          <i class="fas fa-play-circle"></i>
                          Recursion
                          <span>06:00</span>
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- accordion item end -->
                </div>
                <!-- accordion end -->
              </div>
            </div>
            <!-- course curriculum end -->
            
            <!-- course description start -->
            <div class="tab-pane fade " id="course-description" role="tabpanel" aria-labelledby="course-description-tab">
              <div class="course-description box">
                <h3 class="text-capitalize mb-4">description</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure in quas asperiores commodi nesciunt ex culpa perferendis neque error corporis, soluta vero! Nostrum magni ea asperiores suscipit saepe sit eum.</p>
                <h4>For who is this course designed ?</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae quas ullam quos, illo perferendis corrupti cum doloribus quisquam voluptate. Nesciunt, fugit perferendis. Animi molestiae quam ipsa aperiam aliquam. Perspiciatis, amet.</p>
                <h4>Why should you take this course ?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia eius voluptatem iusto quo perspiciatis tempora eveniet doloremque. Ab quos velit id ut? Ad voluptatem expedita fugit nulla minima nesciunt dolor.</p>
              </div>
            </div>
            <!-- course description end -->
            
            <!-- course instructor start -->
            <div class="tab-pane fade " id="course-instructor" role="tabpanel" aria-labelledby="course-instructor-tab">
              <div class="course-instructor box">
                <h3 class="mb-3 text-capitalize">team lead</h3>
                <div class="instructor-details">
                  <div class="details-wrap d-flex align-items-center flex-wrap">
                    <div class="left-box me-4">
                      <div class="img-box">
                        <img src="{{ asset('') }}frontend/assets/img/instructor/1.png" class="rounded-circle" alt="instructor img">
                      </div>
                    </div>
                    <div class="right-box">
                      <h4>john doe <span>(digital marketer)</span></h4>
                      <ul>
                        <li><i class="fas fa-star"></i> 4.5 Rating</li>
                        <li><i class="fas fa-play-circle"></i> 10 Courses</li>
                        <li><i class="fas fa-certificate"></i> 3000 Reviews</li>
                      </ul>
                    </div>
                  </div>
                  <div class="text">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis corrupti porro ipsa quod, numquam, doloribus quia tenetur eaque cumque inventore esse vero consequatur iusto nulla totam quidem. Fuga doloremque eveniet dicta perferendis dolor. Quasi nobis assumenda qui culpa voluptatem accusamus, ipsum architecto quidem non distinctio soluta explicabo, porro excepturi dignissimos?</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- course instructor end -->

            <!-- course reviews start -->
            <div class="tab-pane fade " id="course-reviews" role="tabpanel" aria-labelledby="course-reviews-tab">
              <div class="course-reviews box">
                <!-- rating summary start -->
                <div class="rating-summary">
                  <h3 class="mb-4 text-capitalize">students feedback</h3>
                  <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center text-center">
                      <div class="rating-box">
                        <div class="average-rating">4.5</div>
                        <div class="average-stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="reviews">230 Reviews</div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="rating-bars">
                        <!-- rating bars item start -->
                        <div class="rating-bars-item">
                          <div class="star-text">5 Star</div>
                          <div class="progress">
                            <div class="progress-bar" style="width: 50%;"></div>
                          </div>
                          <div class="percent">50%</div>
                        </div>
                        <!-- rating bars item end -->
                        <!-- rating bars item start -->
                        <div class="rating-bars-item">
                          <div class="star-text">4 Star</div>
                          <div class="progress">
                            <div class="progress-bar" style="width: 30%;"></div>
                          </div>
                          <div class="percent">30%</div>
                        </div>
                        <!-- rating bars item end -->
                        <!-- rating bars item start -->
                        <div class="rating-bars-item">
                          <div class="star-text">3 Star</div>
                          <div class="progress">
                            <div class="progress-bar" style="width: 10%;"></div>
                          </div>
                          <div class="percent">10%</div>
                        </div>
                        <!-- rating bars item end -->
                        <!-- rating bars item start -->
                        <div class="rating-bars-item">
                          <div class="star-text">2 Star</div>
                          <div class="progress">
                            <div class="progress-bar" style="width: 7%;"></div>
                          </div>
                          <div class="percent">7%</div>
                        </div>
                        <!-- rating bars item end -->
                        <!-- rating bars item start -->
                        <div class="rating-bars-item">
                          <div class="star-text">1 Star</div>
                          <div class="progress">
                            <div class="progress-bar" style="width: 3%;"></div>
                          </div>
                          <div class="percent">3%</div>
                        </div>
                        <!-- rating bars item end -->
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
                  <div class="reviews-item">
                    <div class="img-box">
                      <img src="{{ asset('') }}frontend/assets/img/review/1.png" alt="review img">
                    </div>
                    <h4>john doe</h4>
                    <div class="stars-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span class="date">1 week ago</span>
                    </div>
                    <p>Great work. I learnt lot of things about javascript in this course.</p>
                  </div>
                  <!-- reviews item end -->
                  <!-- reviews item start -->
                  <div class="reviews-item">
                    <div class="img-box">
                      <img src="{{ asset('') }}frontend/assets/img/review/1.png" alt="review img">
                    </div>
                    <h4>john doe</h4>
                    <div class="stars-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span class="date">1 week ago</span>
                    </div>
                    <p>Great work. I learnt lot of things about javascript in this course.</p>
                  </div>
                  <!-- reviews item end -->
                  <!-- reviews item start -->
                  <div class="reviews-item">
                    <div class="img-box">
                      <img src="{{ asset('') }}frontend/assets/img/review/1.png" alt="review img">
                    </div>
                    <h4>john doe</h4>
                    <div class="stars-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <span class="date">1 week ago</span>
                    </div>
                    <p>Great work. I learnt lot of things about javascript in this course.</p>
                  </div>
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
              <span class="price-old text-decoration-line-through">$100</span>
              <span class="price-new">$49</span>
              <span class="price-discount">51% Off</span>
            </div>
            <h3 class="mb-3">Course Features</h3>
            <ul class="features-list">
              <li>Total 15 lessons</li>
              <li>Other feature</li>
              <li>Other feature</li>
              <li>Other feature</li>
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