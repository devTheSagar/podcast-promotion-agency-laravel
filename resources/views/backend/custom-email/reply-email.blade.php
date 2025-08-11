@extends('backend.master')

@section('title', 'Reply Email')

@section('content')
<div class="main-container container-fluid">
    <div class="page-header mb-4 d-flex align-items-center justify-content-between">
        <div>
            <h1 class="page-title">Reply Email</h1>
            <ol class="breadcrumb p-0 bg-transparent mb-0">
                <li class="breadcrumb-item">Custom Emails</li>
                <li class="breadcrumb-item"><a href="{{ route('inbox.show', $id) }}">Details</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reply</li>
            </ol>
        </div>
        <div>
            <a href="{{ route('inbox.show', $id) }}" class="btn btn-secondary btn-sm">← Back to Email</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card p-4">
                @if(session('success'))
                    <div class="alert alert-success mb-3">{{ session('success') }}</div>
                @endif

                <form action="{{ route('inbox.reply.send', $id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">To</label>
                        <input type="email" name="to" class="form-control" value="{{ old('to', $to) }}" required>
                        @error('to') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{ old('subject', $subject) }}" required>
                        @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Hidden threading headers --}}
                    <input type="hidden" name="in_reply_to" value="{{ $inReplyTo }}">
                    <input type="hidden" name="references" value="{{ $inReplyTo }}">

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="body" class="form-control" rows="12" required>{{ old('body', "<p></p>\n\n".$quoted) }}</textarea>
                        @error('body') <small class="text-danger">{{ $message }}</small> @enderror
                        <small class="text-muted d-block mt-1">You can write HTML. Quoted original is included below.</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Attachments</label>
                        <input type="file" name="attachments[]" class="form-control" multiple>
                        <small class="text-muted">You can attach multiple files.</small>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary btn-sm">Send Reply</button>
                        <a href="{{ route('inbox.show', $id) }}" class="btn btn-outline-secondary btn-sm">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
