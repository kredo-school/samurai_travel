<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    private $admin_user;

    public function __construct(User $admin_user)
    {
        $this->admin_user = $admin_user;
    }

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

        $this->admin_user->first_name = $request->first_name;
        $this->admin_user->last_name = $request->last_name;
        $this->admin_user->email = $request->email;
        $this->admin_user->password = Hash::make($request->password);
        $this->admin_user->role_id = User::ADMIN_ROLE_ID;
        $this->admin_user->save();

        return redirect()->route('admin.top')->with('success', 'You have successfully registered an admin user.');
    }
}
