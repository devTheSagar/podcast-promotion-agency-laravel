<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index(){
        return view('backend.contact-infoes.index');
    }

    public function create(){
        return view('backend.contact-infoes.add');
    }
}
