<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $services = Service::with('plans')->get();
        $orders = Order::with('plan')->get();
        $messages = Message::all();
        
        // order percentage comparing with previous month and curret month 
        $orderCurrentMonthCount = Order::whereMonth('created_at', now()->month)->count();
        $orderLastMonthCount = Order::whereMonth('created_at', now()->subMonth()->month)->count();
        $orderPercentageChange = 0;
        $orderIsIncrease = true;
        if ($orderLastMonthCount > 0) {
            $change = $orderCurrentMonthCount - $orderLastMonthCount;
            $orderPercentageChange = round(($change / $orderLastMonthCount) * 100);
            $orderIsIncrease = $change >= 0;
        } elseif ($orderCurrentMonthCount > 0) {
            // 100% increase from 0 to something
            $orderPercentageChange = 100;
            $orderIsIncrease = true;
        } else {
            $orderPercentageChange = 0;
            $orderIsIncrease = false;
        }

        

        // Get message counts
        $messageCurrentMonthCount = Message::whereMonth('created_at', now()->month)->count();
        $messageLastMonthCount = Message::whereMonth('created_at', now()->subMonth()->month)->count();

        $messagePercentageChange = 0;
        $messageIsIncrease = true;

        if ($messageLastMonthCount > 0) {
            $change = $messageCurrentMonthCount - $messageLastMonthCount;
            $messagePercentageChange = round(($change / $messageLastMonthCount) * 100);
            $messageIsIncrease = $change >= 0;
        } elseif ($messageCurrentMonthCount > 0) {
            $messagePercentageChange = 100;
            $messageIsIncrease = true;
        } else {
            $messagePercentageChange = 0;
            $messageIsIncrease = false;
        }


        

        // Total order earnings (sum of all order plan prices)
        $totalEarn = Order::with('plan')->get()->sum(function ($order) {
            return optional($order->plan)->planPrice ?? 0;
        });

        // Earnings for current month
        $totalEarnCurrentMonth = Order::with('plan')
            ->whereMonth('created_at', now()->month)
            ->get()
            ->sum(function ($order) {
                return optional($order->plan)->planPrice ?? 0;
            });

        // Earnings for last month
        $totalEarnLastMonth = Order::with('plan')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->get()
            ->sum(function ($order) {
                return optional($order->plan)->planPrice ?? 0;
            });

        $totalEarnPercentageChange = 0;
        $totalEarnIsIncrease = true;

        if ($totalEarnLastMonth > 0) {
            $change = $totalEarnCurrentMonth - $totalEarnLastMonth;
            $totalEarnPercentageChange = round(($change / $totalEarnLastMonth) * 100);
            $totalEarnIsIncrease = $change >= 0;
        } elseif ($totalEarnCurrentMonth > 0) {
            $totalEarnPercentageChange = 100;
            $totalEarnIsIncrease = true;
        } else {
            $totalEarnPercentageChange = 0;
            $totalEarnIsIncrease = false;
        }



        return view('backend.home', [
            'services' => $services,
            'orderPercentageChange' => $orderPercentageChange,
            'orderIsIncrease' => $orderIsIncrease,
            'orders' => $orders,
            'orderCurrentMonthCount' => $orderCurrentMonthCount,
            'messagePercentageChange' => $messagePercentageChange,
            'messageIsIncrease' => $messageIsIncrease,
            'messages' => $messages,
            'messageCurrentMonthCount' => $messageCurrentMonthCount,
            'totalEarn' => $totalEarn,
            'totalEarnPercentageChange' => $totalEarnPercentageChange,
            'totalEarnIsIncrease' => $totalEarnIsIncrease
        ]);
    }
}
