<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        return view('backend.testimonials.index');
    }

    public function create(){
        return view('backend.testimonials.add');
    }
}
