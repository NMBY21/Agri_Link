<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Role;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function index()
    {
        // Fetch all customers
        // $data = Customer::all();
        $data = User::all(); // Or use a condition to filter
        // Fetch all roles (if using a roles table)
        // $roles = Role::all();

        // Return the view with data
        return view('admin.user', compact('data', 'roles'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function education()
    {
        return view('customer.education');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('customer.contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $data = DB::table('tb_order')->join('tb_produk', 'tb_order.id_product', '=', 'tb_produk.id')->where('id_user', Auth::user()->id)->get();
        return view('customer.order', compact('data'));
    }
}
