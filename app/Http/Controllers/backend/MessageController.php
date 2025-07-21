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
}
