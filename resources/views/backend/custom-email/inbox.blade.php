

@extends('backend.master')

@section('title')
    Inbox
@endsection

@section('content')

    <div class="main-container container-fluid">
                 
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Emails</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Emails</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Inbox</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Inbox</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-10p border-bottom-0">SL</th>
                                        <th class="wd-20p border-bottom-0">From</th>
                                        {{-- <th class="wd-20p border-bottom-0">To</th> --}}
                                        <th class="wd-25p border-bottom-0">Subject</th>
                                        <th class="wd-15p border-bottom-0">Date</th>
                                        <th class="wd-30p border-bottom-0">Preview</th>
                                        <th class="wd-10p border-bottom-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($items as $index => $m)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $m['from'] }}</td>
                                            {{-- <td>{{ $m['to'] }}</td> --}}
                                            <td>{{ $m['subject'] }}</td>
                                            <td>{{ $m['date'] }}</td>
                                            <td>
                                                @php
                                                    // 1) HTML entity -> UTF-8 chars (e.g., &nbsp; -> U+00A0)
                                                    $plainPreview = html_entity_decode($m['preview'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

                                                    // 2) Non-breaking space (U+00A0) -> normal space
                                                    // (cover both UTF-8 and ISO-8859-1 forms)
                                                    $plainPreview = str_replace(["\xC2\xA0", chr(160)], ' ', $plainPreview);

                                                    // 3) Remove tags just in case
                                                    $plainPreview = strip_tags($plainPreview);

                                                    // 4) Collapse all whitespace to single spaces
                                                    $plainPreview = preg_replace('/\s+/u', ' ', $plainPreview);

                                                    // 5) Trim
                                                    $plainPreview = trim($plainPreview);
                                                @endphp

                                                {{ \Illuminate\Support\Str::limit($plainPreview, 100, '...') }}
                                            </td>


                                            {{-- <td>
                                                {{ $m['preview'] }}
                                            </td> --}}
                                            <td class="text-nowrap">
                                                <a href="{{ route('inbox.show', $m['id']) }}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" title="Show">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                {{-- ডিলিট রুট তৈরি করলে নিচের ফর্মটি অন করুন --}}
                                                {{-- 
                                                <form action="{{ route('inbox.destroy', $m['id']) }}" method="POST" onsubmit="return confirm('Confirm deleting the email?');" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                                --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No messages found.</td>
                                        </tr>
                                    @endforelse
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
