@extends('frontend.master')

@section('title')
    Sign Up 
@endsection

@section('content')
    <!-- breadcrumb start -->
  <div class="breadcrumb-nav">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- breadcrumb end -->

  <!-- signup section start -->
  <section class="signup section-padding">
     <div class="container">
       <div class="row justify-content-center">
         <div class="col-md-7 col-lg-6 col-xl-5">
           <div class="signup-form box">
              <h2 class="form-title text-center">Create Your Account</h2>
              <form action="">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-block btn-theme btn-form">sign up</button>
                <p class="text-center mt-4 mb-0">Already have an account ? <a href="{{ route('login') }}">Log In</a></p>
              </form>
           </div>
         </div>
       </div>
     </div>
  </section>
  <!-- signup section end -->
@endsection