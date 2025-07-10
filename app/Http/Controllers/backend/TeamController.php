<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        return view('backend.team.index');
    }

    public function create(){
        return view('backend.team.add');
    }
}
