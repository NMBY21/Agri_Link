<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SuperadminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('role_user')->join('users', 'role_user.user_id', '=', 'users.id')->where('role_id', '=', '2')->where('status_user', '>', '0')->get();
        return view('superadmin.user', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name_input,
            'email' => $request->email_input,
            'number_phone' => $request->number_input,
            'password' => Hash::make($request->password_input),
            'address_user' => $request->address_input,
            'status_user' => $request->status_input,
        ]);

        $user->attachRole('customer');

        Alert::success('Success Message', 'Success Save');
        $data = DB::table('role_user')->join('users', 'role_user.user_id', '=', 'users.id')->where('role_id', '=', '2')->where('status_user', '>', '0')->get();
        return redirect()->route('user.superadmin')->with(['data']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->password_input == null)
        {
            User::where('id', $id)->update([
                'name' => $request->name_input,
                'email' => $request->email_input,
                'number_phone' => $request->number_input,
                'address_user' => $request->address_input,
                'status_user' => $request->status_input,
            ]);

            Alert::success('Success Message', 'Success Save');
            $data = DB::table('role_user')->join('users', 'role_user.user_id', '=', 'users.id')->where('role_id', '=', '2')->where('status_user', '>', '0')->get();
            return redirect()->route('user.superadmin')->with(['data']);
        }
        else
        {
            User::where('id', $id)->update([
                'name' => $request->name_input,
                'email' => $request->email_input,
                'number_phone' => $request->number_input,
                'password' => Hash::make($request->password_input),
                'address_user' => $request->address_input,
                'status_user' => $request->status_input,
            ]);

            Alert::success('Success Message', 'Success Save');
            $data = DB::table('role_user')->join('users', 'role_user.user_id', '=', 'users.id')->where('role_id', '=', '2')->where('status_user', '>', '0')->get();
            return redirect()->route('user.superadmin')->with(['data']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->update([
            'status_user' => '-1',
        ]);

        Alert::success('Success Message', 'Success Delete');
        $data = DB::table('role_user')->join('users', 'role_user.user_id', '=', 'users.id')->where('role_id', '=', '2')->where('status_user', '>', '0')->get();
        return redirect()->route('user.superadmin')->with(['data']);
    }
}
