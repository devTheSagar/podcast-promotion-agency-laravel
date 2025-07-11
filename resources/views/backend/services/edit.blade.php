@extends('backend.master')

@section('title')
    Add Service
@endsection

@section('content')
    <div class="main-container container-fluid">
                      
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Services</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Edit Service</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.update-service', ['id' => $service]) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="service-name" class="form-label">Service Name</label>
                                    <input name="serviceName" type="text" class="form-control" id="service-name" value="{{ $service->serviceName }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                    <label for="service-image" class="form-label">Service Image</label>
                                    <input name="serviceImage" type="file" class="dropify" accept="image/*" data-default-file="{{ asset($service->serviceImage) }}" id="service-image" data-height="200" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <label for="service-details">Service Details</label>
                                    <textarea name="serviceDetails" id="summernote" class="form-control">{{ $service->serviceDetails }}</textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Confirm Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW CLOSED -->

        
    </div>
@endsection