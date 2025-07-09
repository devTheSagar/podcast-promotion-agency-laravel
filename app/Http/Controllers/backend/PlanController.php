<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){
        return view('backend.plans.index');
    }

    public function create(){
        return view('backend.plans.add');
    }
}
