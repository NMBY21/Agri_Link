<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUserController extends Controller
{
    public function index()
    {
        $data = $this->fetchAllUsers(); // Fetch all users
        return view('admin.user', compact('data'));
    }

    public function store(Request $request)
    {
        // Validate input fields
        $request->validate([
            'name_input' => 'required|string|max:255',
            'email_input' => 'required|email|unique:users,email',
            'number_input' => 'required|numeric',
            'password_input' => 'required|min:6',
            'address_input' => 'required|string',
            'status_input' => 'required|integer',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name_input,
            'email' => $request->email_input,
            'number_phone' => $request->number_input,
            'password' => Hash::make($request->password_input),
            'address_user' => $request->address_input,
            'status_user' => $request->status_input,
        ]);

        // Assuming you want to assign a role here as well
        $user->attachRole('customer');

        Alert::success('Success Message', 'Success Save');

        // Redirect with updated data
        return redirect()->route('user.admin')->with(['data' => $this->fetchAllUsers()]);
    }

    public function update(Request $request, $id)
    {
        // Validate inputs
        $request->validate([
            'name_input' => 'required|string|max:255',
            'email_input' => 'required|email|unique:users,email,' . $id,
            'number_input' => 'required|numeric',
            'address_input' => 'required|string',
            'status_input' => 'required|integer',
            'password_input' => 'nullable|min:6', // Password is optional
        ]);

        // Update user data based on password existence
        $updateData = [
            'name' => $request->name_input,
            'email' => $request->email_input,
            'number_phone' => $request->number_input,
            'address_user' => $request->address_input,
            'status_user' => $request->status_input,
        ];

        if ($request->password_input) {
            $updateData['password'] = Hash::make($request->password_input);
        }

        User::where('id', $id)->update($updateData);

        Alert::success('Success Message', 'Success Save');

        return redirect()->route('user.admin')->with(['data' => $this->fetchAllUsers()]);
    }

    public function updateRole(Request $request, $id)
{
    // Validate the role input
    $request->validate([
        'role' => 'required|exists:roles,name',
    ]);

    $user = User::findOrFail($id);

    // Fetch the role ID from the roles table
    $role = DB::table('roles')->where('name', $request->role)->first();

    if (!$role) {
        return redirect()->back()->withErrors(['role' => 'Invalid role selected.']);
    }

    // Sync the role using the role ID
    $user->roles()->sync([$role->id]);

    return redirect()->back()->with('success', "User role updated to '{$request->role}' successfully.");
}


    public function destroy($id)
{
    User::where('id', $id)->update(['status_user' => '-1']); // Or use User::destroy($id) for a permanent delete

    Alert::success('Success Message', 'Success Delete');

    return redirect()->route('user.admin')->with(['data' => $this->fetchAllUsers()]);
}


    // Private method to fetch all active users
    private function fetchAllUsers()
    {
        // Fetch all users with a status greater than '0' (assuming '0' means inactive)
        return User::where('status_user', '>', '0')->get();
    }


}
