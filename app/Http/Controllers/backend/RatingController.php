<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        return view('backend.ratings.index');
    }

    public function create(){
        return view('backend.ratings.add');
    }
}
