<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index(){
        return view('backend.privacy-policy.index');
    }

    public function create(){
        return view('backend.privacy-policy.add');
    }
}
