@extends('backend.master')

@section('title')
    All Reviews & Ratings 
@endsection

@section('content')
    <div class="main-container container-fluid">
                  
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">All Review & Rating</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Review & Rating</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Review & Rating DataTable</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">SL</th>
                                        <th class="wd-15p border-bottom-0">Service name</th>
                                        <th class="wd-15p border-bottom-0">Plan</th>
                                        <th class="wd-15p border-bottom-0">Client Name</th>
                                        <th class="wd-15p border-bottom-0">Client Rating</th>
                                        <!-- <th class="wd-15p border-bottom-0">Client Review</th> -->
                                        <th class="wd-15p border-bottom-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Apple podcast promotion</td>
                                        <td>Basic</td>
                                        <td>Alex Bourne</td>
                                        <td>4</td>
                                        <!-- <td>good service. thanks a lot</td> -->
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Spotify promotion</td>
                                        <td>Standard</td>
                                        <td>John Doe</td>
                                        <td>5</td>
                                        <!-- <td>Excellent service, highly recommend!</td> -->
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
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