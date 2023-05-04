<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name'  => 'required|min:1|max:255',
            'last_name'  => 'required|min:1|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'role_id'    => User::ADMIN_ROLE_ID,
        ]);

        return redirect()->route('admin.top')->with('success', 'You have successfully registered an admin user.');
    }
}
