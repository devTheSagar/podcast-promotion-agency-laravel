@extends('frontend.master')

@section('title')
    Checkout 
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
        
        <div class="col-lg-4">
          <!-- course sidebar start -->
          <div class="course-sidebar box">
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
              <li>Other feature</li>
              <li>Other feature</li>
            </ul>
          </div>
          <!-- course sidebar end -->
        </div>

        <div class="col-lg-8">
            <!-- course curriculum start -->
            <div class="tab-pane fade show active" id="course-curriculum" role="tabpanel" aria-labelledby="course-curriculum-tab">
              <div class="course-curriculum box">
                <h3 class="text-capitalize mb-4">place order</h3>
                <h3 class="text-capitalize mb-4">to place order, you have to pay in this paypal account and put the transaction id in the transaction id box</h3>
                <!-- order start -->
                <form action="#">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="transaction-id" class="form-label">Transaction Id</label>
                        <input type="text" class="form-control" id="transaction-id" placeholder="xxx-xxxx-xxxx-xxxx">
                    </div>
                    <div class="mb-3">
                        <label for="transaction-id" class="form-label">Your Podcast Link</label>
                        <input type="text" class="form-control" id="transaction-id">
                    </div>
                    <div class="mb-3">
                        <label for="targeted-country" class="form-label">Your Targeted Country</label>
                       <select class="form-control" id="targeted-country" aria-label="Default select example">
                            <option selected disabled>select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="additional-text" class="form-label">Additonal Text</label>
                        <textarea class="form-control" id="additional-text" rows="3"></textarea>
                    </div>
                    <div  class="mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            I agree to the <a href="#">terms and conditions</a> and <a href="#">privacy policy</a>
                        </label>
                    </div>
                    <div class="btn-wrap">
                        <button type="button" class="btn btn-theme btn-block">Confirm Order</button>
                        <!-- <a href="#" type="button" class="btn btn-theme btn-block">enroll now</a> -->
                    </div>
                </form>
                <!-- order end -->
              </div>
            </div>
            <!-- course curriculum end -->
        </div>
      </div>
    </div>
  </section>
  <!-- course details section end -->
@endsection