<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $contactInfo = ContactInfo::first();
        return view('frontend.message.index',[
            'contactInfo' => $contactInfo
        ]);
    }
}
