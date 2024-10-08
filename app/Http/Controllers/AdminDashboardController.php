<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order; // Assuming you have an Order model

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Fetch count of products from the Product model
        $productCount = Product::count();

        // You can set the following values to 0 for now or add alternative logic if necessary
        $pendingOrders = 0; // Placeholder for pending orders count logic
        $completedOrders = 0; // Placeholder for completed orders count logic
        $canceledOrders = 0; // Placeholder for canceled orders count logic
        $totalRevenue = 0; // Placeholder for total revenue calculation

        // Pass these variables to the view
        return view('admin.dashboard', compact('productCount', 'pendingOrders', 'completedOrders', 'canceledOrders', 'totalRevenue'));
    }
}
