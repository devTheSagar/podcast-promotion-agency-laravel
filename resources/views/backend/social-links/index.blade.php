@extends('backend.master')

@section('title')
    All Social Links 
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
                    <li class="breadcrumb-item active" aria-current="page">All Social Links</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Social Links Data Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">Facebook</th>
                                        <th class="wd-20p border-bottom-0">Instagram</th>
                                        <th class="wd-15p border-bottom-0">Twitter</th>
                                        <th class="wd-10p border-bottom-0">Youtube</th>
                                        <th class="wd-10p border-bottom-0">Linkedin</th>
                                        <th class="wd-10p border-bottom-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($socialLinks as $socialLink)
                                        <tr>
                                            <td>
                                                @if (!empty($socialLink->facebookLink))
                                                    <a href="{{ $socialLink->facebookLink }}" target="_blank">Facebook</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!empty($socialLink->instagramLink))
                                                    <a href="{{ $socialLink->instagramLink }}" target="_blank">Instagram</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!empty($socialLink->twitterLink))
                                                    <a href="{{ $socialLink->twitterLink }}" target="_blank">Twitter</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!empty($socialLink->youtubeLink))
                                                    <a href="{{ $socialLink->youtubeLink }}" target="_blank">Youtube</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if (!empty($socialLink->linkedinLink))
                                                    <a href="{{ $socialLink->linkedinLink }}" target="_blank">Linkedin</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.view-social-link', ['id' => $socialLink]) }}" class="btn btn-primary" data-bs-toggle="tooltip" title="show"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('admin.edit-social-link', ['id' => $socialLink]) }}" class="btn btn-secondary" data-bs-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                                {{-- <a href="javascript:void(0);" class="btn btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a> --}}
                                                <form action="{{ route('admin.delete-social-link', ['id' => $socialLink]) }}" method="POST" onsubmit="return confirm('Confirm deleting socail links records ?');" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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