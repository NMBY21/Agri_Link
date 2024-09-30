<?php

namespace App\Http\Controllers;

use App\Models\ImageProduct;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datacustomer = User::where('id', Auth::user()->id)->first();

        if($request->quantity == null)
        {
            Alert::toast('Data produk tidak ditemukan', 'error');
            $data = Product::where('status_product', '>', '0')->get();
            return redirect()->route('dashboard.customer')->with(['data']);
        }
        else if ($datacustomer->number_phone == null && $datacustomer->address_user == null)
        {
            Alert::toast('Isi terlebih dahulu alamat dan nomor telepon', 'error');
            $data = Product::where('id', $request->id)->first();
            $dataimage = ImageProduct::where('id_produk', $request->id)->where('status_img_produk', '>', '0')->get();
            return redirect()->route('product.customer', $request->id)->with(['data', 'dataimage']);
        }
        else
        {
            $data = Product::where('id', $request->id)->first();

            $orderdetail = [
                'idcustomer' => $datacustomer->id,
                'product' => $data->name_product,
                'quantity' => $request->quantity,
                'total' => $data->price_product * $request->quantity,
            ];

            $customerdetails = [
                'first_name' => $datacustomer->name,
                'email' => $datacustomer->email,
                'phone' => $datacustomer->number_phone,
                "shipping_address" => [
                    "first_name" => $datacustomer->name,
                    "email" => $datacustomer->email,
                    "phone" => $datacustomer->number_phone,
                    "address" => $datacustomer->address_user,
                ]
            ];

            $transactiondetails = [
                'order_id' => uniqid(),
                'gross_amount' => $data->price_product,
            ];

            $item_details = [
                [
                    'id' => $data->id,
                    'price' => $data->price_product,
                    'quantity' => $request->quantity,
                    'name' => $data->name_product,
                ]
            ];

            $payload = [
                'transaction_details' => $transactiondetails,
                'customer_details' => $customerdetails,
                'item_details' => $item_details,
            ];

            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');

            $snaptoken = \Midtrans\Snap::getSnapToken($payload);

            return view('customer.checkout', compact('data', 'orderdetail', 'snaptoken'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::where('id', $id)->first();
        $dataimage = ImageProduct::where('id_produk', $id)->where('status_img_produk', '>', '0')->get();
        return view('customer.product', compact('data', 'dataimage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function transfer(Request $request)
    {
        $data = Product::where('status_product', '>', '0')->get();
        $datapayment = json_decode($request->payment);

        Order::create([
            'date_order' => Carbon::now(),
            'id_order' => $datapayment->order_id,
            'id_user' => Auth::user()->id,
            'id_product' => $request->id_product,
            'quantity_order' => $request->quantity,
            'total_order' => $request->total,
            'type_order' => '1',
            'status_order' => '0',
        ]);

        Alert::toast('Pesanan kamu sedang di proses', 'success');
        return redirect()->route('dashboard.customer')->with(['data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cod(Request $request)
    {
        $data = Product::where('status_product', '>', '0')->get();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 14; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        Order::create([
            'date_order' => Carbon::now(),
            'id_order' => $randomString,
            'id_user' => Auth::user()->id,
            'id_product' => $request->id_product,
            'quantity_order' => $request->quantity,
            'total_order' => $request->total,
            'type_order' => '2',
            'status_order' => '0',
        ]);

        Alert::toast('Pesanan kamu sedang di proses', 'success');
        return redirect()->route('dashboard.customer')->with(['data']);
    }
}
