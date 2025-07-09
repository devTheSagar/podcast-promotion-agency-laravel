<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        return view('backend.about-us.index');
    }

    public function create(){
        return view('backend.about-us.add');
    }
}
