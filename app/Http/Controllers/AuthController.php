<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('superadmin')) {
            // Fetch data for superadmin dashboard
            $productCount = Product::where('status_product', '>', '0')->count();
            $pendingOrders = Order::where('status_order', '0')->count();
            $completedOrders = Order::where('status_order', '1')->count();
            $canceledOrders = Order::where('status_order', '<', '0')->count();
            $totalRevenue = Order::where('status_order', '2')->sum('total_order');

            return view('superadmin.dashboard', compact('productCount', 'pendingOrders', 'completedOrders', 'canceledOrders', 'totalRevenue'));
        } elseif (Auth::user()->hasRole('customer')) {
            // Fetch products for customer dashboard
            $products = Product::where('status_product', '>', '0')->get();
            return view('customer.dashboard', compact('products'));
        }

        return redirect('/');
    }

    public function superadminlogin()
    {
        return view('superadmin/login');
    }
}
