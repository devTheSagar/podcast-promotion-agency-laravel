<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function store(Request $request){
        Order::storeOrder($request);
        Alert::success('Success', 'Order Placed Successfully');
        return redirect()->route('user.track-order');
    }
}
