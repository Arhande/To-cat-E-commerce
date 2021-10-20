<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $orders = Order::latest()->get();
        $userCount = User::count();
        $orderCount = Order::count();
        $total_harga = Order::sum('total_harga');

        return view('dashboard', [
            'orders' => $orders,
            'userCount' => $userCount,
            'orderCount' => $orderCount,
            'total_harga' => $total_harga,
        ]);
    }
}
