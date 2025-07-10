@extends('backend.master')

@section('title')
    Add Plan Review & Rating 
@endsection

@section('content')
    <div class="main-container container-fluid">
                    
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Review & Rating</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Review & Rating</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Plan Review & Rating</h3>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="service-select">Select Service</label>
                                    <select name="service" class="form-control form-select" id="service-select" data-bs-placeholder="Select Service">
                                        <option label="Choose Service" selected disabled></option>
                                        <option value="">Podcast promotion</option>
                                        <option value="">Spotify Promotion</option>
                                        <option value="">Youtube Promotion</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a service.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="plan-select">Select Plan</label>
                                    <select name="plan" class="form-control form-select" id="plan-select" data-bs-placeholder="Select Plan">
                                        <option label="Choose Plan" selected disabled></option>
                                        <option value="">Basic</option>
                                        <option value="">Standard</option>
                                        <option value="">Premium</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a plan.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="client-name">Client Name</label>
                                    <input name="client-name" type="text" class="form-control" id="client-name" required>
                                    <div class="invalid-feedback">Please provide client name.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="plan-rating">Rating</label>
                                    <select name="plan-rating" class="form-control form-select" id="plan-rating" data-bs-placeholder="Rating">
                                        <option label="Choose Rating" selected disabled></option>
                                        <option value="1">1 star</option>
                                        <option value="2">2 star</option>
                                        <option value="3">3 star</option>
                                        <option value="4">4 star</option>
                                        <option value="5">5 star</option>
                                    </select>
                                    <div class="invalid-feedback">Please choose your rating.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <label for="client-review">Client Review</label>
                                    <textarea name="client-review" id="summernote" class="form-control"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Add Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->

        
    </div>
@endsection