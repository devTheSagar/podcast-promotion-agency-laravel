<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\CustomEmail;
use App\Models\CustomEmail as CustomEmailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
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

        $attachmentsPaths = [];
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $attachmentsPaths[] = $file->store('custom-email-attachments', 'public');
            }
        }

         // Save to DB
        $emailRecord = CustomEmailModel::create([
            'to' => $request->to,
            'subject' => $request->subject,
            'message' => $request->message,
            'attachments' => json_encode($attachmentsPaths),
        ]);

        $attachments = $request->file('attachments') ?? [];

        Mail::to($request->to)->send(new CustomEmail($request->subject, $request->message, $attachments));
        
        // Mail::to($request->to)->queue(new CustomEmail($request->subject, $request->message, $attachments));
        
        // Mail::to($request->to)->later(now()->addSeconds(1), new CustomEmail($request->subject, $request->message, $attachments));

        Alert::success('Success', 'Mail Send successfully');
        return back();
    }

    public function index(){
        $customEmails = CustomEmailModel::all()->sortByDesc('created_at');
        return view('backend.custom-email.index', compact('customEmails'));
    }

    public function view($id)
    {
        $customEmail = CustomEmailModel::findOrFail($id);
        return view('backend.custom-email.view', compact('customEmail'));
    }

    public function destroy($id)
{
    $customEmail = CustomEmailModel::findOrFail($id);

    // Delete related attachments from storage
    if (!empty($customEmail->attachments)) {
        $attachments = json_decode($customEmail->attachments, true);

        if (is_array($attachments)) {
            foreach ($attachments as $file) {
                if (is_string($file) && Storage::disk('public')->exists($file)) {
                    Storage::disk('public')->delete($file);
                } elseif (is_array($file) && isset($file['path']) && Storage::disk('public')->exists($file['path'])) {
                    Storage::disk('public')->delete($file['path']);
                }
            }
        }
    }

    // Delete database record
    $customEmail->delete();

    Alert::success('Success', 'Custom email deleted successfully');
    return redirect()->route('admin.view-custom-email');
}
    

}
