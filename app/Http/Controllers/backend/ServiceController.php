<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('backend.services.index');
    }

    public function create(){
        return view('backend.services.add');
    }
}
