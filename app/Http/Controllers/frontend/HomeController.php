<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // eager loading with plans to get all plans under each service 
        $services = Service::with('plans')->get();
        return view('frontend.home', [
            'services' => $services
        ]);
    }
}
