@extends('backend.master')

@section('title')
    Show About Us 
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
                    <li class="breadcrumb-item active" aria-current="page">Show About Us</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">About Us Data Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">About Us</th>
                                        <th class="wd-15p border-bottom-0">Image</th>
                                        <th class="wd-10p border-bottom-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>lorem ipsm</td>
                                        <td><img src="" alt="image" height="50px" width="50px" style="border-radius: 50%;"></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="tooltip" title="show"><i class="fe fe-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="tooltip" title="Edit"><i class="fe fe-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash-2"></i></a>
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