<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\CustomEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class CustomEmailController extends Controller
{
    public function create()
    {
        return view('backend.custom-email.create');
    }

    public function send(Request $request)
    {
        $request->validate([
            'to' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'attachments.*' => 'nullable|file|max:10240',
        ]);

        $attachments = $request->file('attachments') ?? [];

        Mail::to($request->to)->send(new CustomEmail($request->subject, $request->message, $attachments));
        
        // Mail::to($request->to)->queue(new CustomEmail($request->subject, $request->message, $attachments));
        
        // Mail::to($request->to)->later(now()->addSeconds(1), new CustomEmail($request->subject, $request->message, $attachments));

        Alert::success('Success', 'Mail Send successfully');
        return back();
    }
    

}
