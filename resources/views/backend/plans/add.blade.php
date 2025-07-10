@extends('backend.master')

@section('title')
    Add Plan
@endsection

@section('content')
    <div class="main-container container-fluid">
                    
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Plans</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Plans</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add plan</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Add Your Plans</h3>
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
                                    <div class="invalid-feedback">Please select a valid service.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="plan-name">Plan Name</label>
                                    <input name="plan-name" type="text" class="form-control" id="plan-name" required>
                                    <div class="invalid-feedback">Please provide a valid plan name.</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="plan-price">Plan Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary-transparent text-primary">$</span>
                                        <input name="plan-price" aria-label="Amount (to the nearest dollar)" class="form-control" placeholder="" id="plan-price" type="number">
                                        <span class="input-group-text bg-primary-transparent text-primary">.00</span>
                                    </div>
                                    <div class="invalid-feedback">Please provide a valid price.</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="plan-duration">Duration</label>
                                    <div class="input-group mb-3">
                                        <input name="plan-duration" aria-describedby="basic-addon1" id="plan-duration" aria-label="Username" class="form-control" placeholder="" type="text">
                                        <span class="input-group-text bg-primary-transparent text-primary" id="basic-addon1">Days</span>
                                    </div>
                                    <div class="invalid-feedback">Please provide a valid plan duration.</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label>Plan Features</label>
                                    <div id="plan-features-container">
                                        <div class="input-group mb-2">
                                            <input name="plan-features" type="text" class="form-control plan-feature-input" name="plan-features[]" required>
                                            <button type="button" class="btn btn-danger remove-feature" style="display:none;">Remove</button>
                                            <div class="invalid-feedback">Please provide at least one plan feature.</div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" id="add-feature"><i class="ion ion-plus"></i> Add more plan features</button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <label for="plan-description">Plan Description</label>
                                    <textarea name="plan-description" id="summernote" class="form-control"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Add Plan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->
    </div>
@endsection