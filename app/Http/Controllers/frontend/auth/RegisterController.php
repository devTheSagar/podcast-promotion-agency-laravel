<?php

namespace App\Http\Controllers\frontend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('frontend.auth.register');
    }
}
