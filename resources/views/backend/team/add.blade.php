@extends('backend.master')

@section('title')
    Add Team Member
@endsection

@section('content')
    <div class="main-container container-fluid">
                    
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Team</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Team Member</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Add Team Member</h3>
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
                                    <select name="service" class="form-control form-select" id="service-select" data-bs-placeholder="Select Plan">
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
                                    <label for="position">Select Position</label>
                                    <select name="position" class="form-control form-select" id="position" data-bs-placeholder="Select Plan">
                                        <option label="Choose Position" selected disabled></option>
                                        <option value="tem-lead">Team Lead</option>
                                        <option value="team-member">Team Member</option>
                                    </select>
                                    <div class="invalid-feedback">Please select position.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                    <div class="invalid-feedback">Please provide name.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="image" class="form-label">Member Image</label>
                                    <input type="file" class="dropify" accept="image/*" id="image" data-height="200" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="rating">Rating</label>
                                    <select name="" class="form-control form-select" id="service-select" data-bs-placeholder="Rating">
                                        <option label="Choose Rating" selected disabled></option>
                                        <option value="">1 star</option>
                                        <option value="">2 star</option>
                                        <option value="">3 star</option>
                                        <option value="">4 star</option>
                                        <option value="">5 star</option>
                                    </select>
                                    <div class="invalid-feedback">Please choose your rating.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="total-review">Total Review (In Number)</label>
                                    <input type="number" class="form-control" id="total-review" required>
                                    <div class="invalid-feedback">Please provide valid number.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="portfolio-link">Portfolio Link</label>
                                    <input type="text" class="form-control" id="portfolio-link" required>
                                    <div class="invalid-feedback">Please provide valid link.</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <label for="client-review">Description</label>
                                    <textarea id="summernote" class="form-control"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Add Team Member</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->

        
    </div>
@endsection