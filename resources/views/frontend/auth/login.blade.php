{{-- <h1>user login form</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" required />
    <br><br>
    <input type="password" name="password" required />
    <br><br>
    <button type="submit">Login</button>
</form> --}}



@extends('frontend.master')

@section('title')
    Login 
@endsection

@section('content')
    <!-- breadcrumb start -->
  <div class="breadcrumb-nav">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Log In</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- breadcrumb end -->

  <!-- login section start -->
  <section class="login-section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6 col-xl-5">
          <div class="login-form box">
            <h2 class="form-title text-center">Log In to Your Account</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <div class="d-flex mb-2 justify-content-end"><a href="#">Forgot Password ?</a></div>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-theme btn-block btn-form">log in</button>
              <p class="text-center mt-4 mb-0">Don't have an account ? <a href="{{ route('signup.user') }}">Sign Up</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- login section end -->

@endsection