@extends('frontend.master')

@section('title')
    User Account
@endsection

@section('content')
    <!-- breadcrumb start -->
  <div class="breadcrumb-nav">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Track Order</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- breadcrumb end -->

  <!-- content start  -->
  <div class="container mb-5">
    <div class="row mt-5">
        <div class="col-lg-12">
            <h5>Orders</h5>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Service</th>
                            <th>Plan</th>
                            <th>Price</th>
                            <th>purchace date</th>
                            <th>delivery date</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Podcast Promotion</td>
                            <td>Premium</td>
                            <td>$999</td>
                            <td>10 jul 2025</td>
                            <td>10 aug 2025</td>
                            <td>pending</td>
                            <td>
                                <button class="btn-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Podcast Promotion</td>
                            <td>Premium</td>
                            <td>$999</td>
                            <td>10 jul 2025</td>
                            <td>10 aug 2025</td>
                            <td>pending</td>
                            <td>
                                <button class="btn-primary">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
  <!-- content end  -->
@endsection