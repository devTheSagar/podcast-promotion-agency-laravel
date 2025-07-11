<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function index(){
        return view('backend.services.index');
    }

    public function create(){
        return view('backend.services.add');
    }

    public function store(Request $request){
        Service::addService($request);
        Alert::success('Success', 'Service added successfully');
        return back();
    }
}
