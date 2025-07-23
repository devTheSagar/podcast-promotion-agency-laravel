<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('backend.orders.index', [
            'orders' => $orders
        ]);
    }

    public function viewOrder($id){
        $order = Order::find($id);
        return view('backend.orders.view', [
            'order' => $order
        ]);
    }
    
    public function updateStatus(Request $request, $id){
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();
        Alert::success('Success', 'Order status updated successfully');
        return back();
    }
}
