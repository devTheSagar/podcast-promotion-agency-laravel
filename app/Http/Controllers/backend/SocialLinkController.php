<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index(){
        return view('backend.social-links.index');
    }

    public function create(){
        return view('backend.social-links.add');
    }
}
