@extends('backend.master')

@section('title')
    All Plans
@endsection

@section('content')
    <div class="main-container container-fluid">
                    
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Data Tables</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">File Export</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">SL</th>
                                        <th class="border-bottom-0">Service</th>
                                        <th class="border-bottom-0">Plan</th>
                                        <th class="border-bottom-0">Price</th>
                                        <th class="border-bottom-0">Duration</th>
                                        <th class="border-bottom-0">Features</th>
                                        <!-- <th class="border-bottom-0">Description</th> -->
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Podcast Promotion</td>
                                        <td>Basic</td>
                                        <td>$499</td>
                                        <td>30 days</td>
                                        <td>
                                            <ul>
                                                <li>5k download</li>
                                                <li>5k listener</li>
                                                <li>top visibility</li>
                                            </ul>
                                        </td>
                                        <!-- <td>
                                            <p>We will promote your podcast on our platform, ensuring it reaches a wider audience and gains more visibility.</p>
                                        </td> -->
                                        <td>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="tooltip" title="show"><i class="fe fe-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="tooltip" title="Edit"><i class="fe fe-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Podcast Promotion</td>
                                        <td>Premium</td>
                                        <td>$999</td>
                                        <td>30 days</td>
                                        <td>
                                            <ul>
                                                <li>15k download</li>
                                                <li>15k listener</li>
                                                <li>top visibility</li>
                                            </ul>
                                        </td>
                                        <!-- <td>
                                            <p>We will promote your podcast on our platform, ensuring it reaches a wider audience and gains more visibility.</p>
                                        </td> -->
                                        <td>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="tooltip" title="show"><i class="fe fe-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="tooltip" title="Edit"><i class="fe fe-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Spotify Promotion</td>
                                        <td>Basic</td>
                                        <td>$499</td>
                                        <td>30 days</td>
                                        <td>
                                            <ul>
                                                <li>1k download</li>
                                                <li>1k listener</li>
                                                <li>top visibility</li>
                                            </ul>
                                        </td>
                                        <!-- <td>
                                            <p>We will promote your podcast on our platform, ensuring it reaches a wider audience and gains more visibility.</p>
                                        </td> -->
                                        <td>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="tooltip" title="show"><i class="fe fe-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="tooltip" title="Edit"><i class="fe fe-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash-2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Spotify Promotion</td>
                                        <td>advance</td>
                                        <td>$699</td>
                                        <td>30 days</td>
                                        <td>
                                            <ul>
                                                <li>1k download</li>
                                                <li>1k listener</li>
                                                <li>top visibility</li>
                                            </ul>
                                        </td>
                                        <!-- <td>
                                            <p>We will promote your podcast on our platform, ensuring it reaches a wider audience and gains more visibility.</p>
                                        </td> -->
                                        <td>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="tooltip" title="show"><i class="fe fe-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="tooltip" title="Edit"><i class="fe fe-edit"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fe fe-trash-2"></i></a>
                                            </div>
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