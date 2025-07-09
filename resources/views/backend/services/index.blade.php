@extends('backend.master')

@section('title')
    All Services
@endsection

@section('content')
    <div class="main-container container-fluid">                   
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">All Services</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Services</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Services DataTable</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">SL</th>
                                        <th class="wd-15p border-bottom-0">Service name</th>
                                        <th class="wd-20p border-bottom-0">Service image</th>
                                        <th class="wd-15p border-bottom-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Apple podcast promotion</td>
                                        <td>
                                            <img src="" alt="image" class="img-fluid" style="width: 50px; height: 50px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Spotify promotion</td>
                                        <td>
                                            <img src="" alt="image" class="img-fluid" style="width: 50px; height: 50px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Youtube promotion</td>
                                        <td>
                                            <img src="" alt="image" class="img-fluid" style="width: 50px; height: 50px; border-radius: 50%;">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection