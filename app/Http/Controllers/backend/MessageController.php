<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function showMessages(){
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('backend.messages.index', [
            'messages' => $messages
        ]);
    }

    public function viewMessage($id){
        $message = Message::find($id);

        if (!$message->seen) {
            $message->seen = true;
            $message->save();
        }

        return view('backend.messages.view', [
            'message' => $message
        ]);
    }

    // Get unseen message count
    public function getUnseenCount(){
        $count = Message::where('seen', false)->count();
        return response()->json(['unseenCount' => $count]);
    }

    // Get unseen message dropdown HTML
    public function unseenDropdown(){
        $unseenMessages = Message::where('seen', false)->latest()->take(5)->get();
        return view('backend.common.unseen-messages-dropdown', compact('unseenMessages'))->render();
    }

    // Mark a message as seen
    public function markSeen($id){
        try {
            $message = Message::findOrFail($id);
            if (!$message->seen) {
                $message->seen = true;
                $message->save();
            }
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

}
