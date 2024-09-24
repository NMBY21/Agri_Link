<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    /**
     * Display the dashboard with necessary data.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the count of products
        $productCount = Product::where('status_product', '>', '0')->count(); 

        // Count other statistics as needed
        $pendingOrders = Order::where('status_order', '0')->count(); 
        $completedOrders = Order::where('status_order', '1')->count(); 
        $canceledOrders = Order::where('status_order', '<', '0')->count(); 
        $totalRevenue = Order::where('status_order', '2')->sum('total_order'); 

        // Pass the data to the view
        return view('superadmin.dashboard', compact('productCount', 'pendingOrders', 'completedOrders', 'canceledOrders', 'totalRevenue'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customerData()
    {
        $data = Customer::all(); // Fetch all customer records
        return view('superadmin.customers', compact('data')); // Pass data to the customers view
    }

    // Other methods (create, store, show, edit, update, destroy) can be implemented here as needed
}
