<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('id', Auth::user()->id)->first();
        return view('customer.profile', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->password_input == null)
        {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name_input,
                'email' => $request->email_input,
                'number_phone' => $request->phone_input,
                'address_user' => $request->address_input,
            ]);

            Alert::toast('Berhasil Diedit', 'success');
            $data = User::where('id', Auth::user()->id)->first();
            return redirect()->route('profile.customer')->with(['data']);
        }
        else
        {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name_input,
                'email' => $request->email_input,
                'number_phone' => $request->phone_input,
                'address_user' => $request->address_input,
                'password' => Hash::make($request->password_input),
            ]);

            Alert::toast('Berhasil Diedit', 'success');
            $data = User::where('id', Auth::user()->id)->first();
            return redirect()->route('profile.customer')->with(['data']);
        }
    }
}
