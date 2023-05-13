<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $role_id = $request->role_id;

        $query = User::query();
        if ($name) {
            $query->where(function($query) use($name){
                            $query->where('first_name', 'LIKE', "%{$name}%")
                                ->orWhere('last_name',  'LIKE', "%{$name}%");
            });
        }
        if ($email) {
            $query->where('email', 'LIKE', "%{$email}%");
        }
        if ($role_id) {
            $query->where('role_id', $role_id);
        }
        $users = $query->oldest('id')->paginate(10);

        return view('admin.users.index', compact('users', 'name', 'email', 'role_id'));
    }

    public function change_role(Request $request, $id)
    {
        $user = User::find($id);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->back();
    }
}
