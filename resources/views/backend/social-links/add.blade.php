@extends('backend.master')

@section('title')
    Add Social Links 
@endsection

@section('content')
    <div class="main-container container-fluid">
                      
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Others</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Others</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Social Links</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Add Social Links</h3>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="facebook">Facebook link</label>
                                    <input name="facebook-link" type="text" class="form-control" id="facebook" required>
                                    <div class="invalid-feedback">Please provide a valid link.</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="instagram">Instagram link</label>
                                    <input name="instagram-link" type="text" class="form-control" id="instagram" required>
                                    <div class="invalid-feedback">Please provide a valid link.</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="twitter">Twitter link</label>
                                    <input name="twitter-link" type="text" class="form-control" id="twitter" required>
                                    <div class="invalid-feedback">Please provide a valid link.</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="youtube">Youtube link</label>
                                    <input name="youtube-link" type="text" class="form-control" id="youtube" required>
                                    <div class="invalid-feedback">Please provide a valid link.</div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="linkedin">Linkedin link</label>
                                    <input name="linkedin-link" type="text" class="form-control" id="linkedin" required>
                                    <div class="invalid-feedback">Please provide a valid link.</div>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Add Social Links</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->
    </div>
@endsection