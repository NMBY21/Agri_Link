<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('superadmin'))
        {
            $data = Product::where('status_product', '>', '0')->get()->count();
            $data2 = Order::where('status_order', '0')->get()->count();
            $data3 = Order::where('status_order', '1')->get()->count();
            $data4 = Order::where('status_order', '<', '0')->get()->count();
            $data5 = Order::where('status_order', '2')->get();
            $omset = $data5->sum('total_order');
            return view('superadmin.dashboard', compact('data', 'data2', 'data3', 'data4', 'omset'));
        }
        else if(Auth::user()->hasRole('customer'))
        {
            $data = Product::where('status_product', '>', '0')->get();
            return view('customer.dashboard', compact('data'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function superadminlogin()
    {
        return view('superadmin/login');
    }
}

