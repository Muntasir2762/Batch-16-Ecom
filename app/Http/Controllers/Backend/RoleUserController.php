<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userList ()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('backend.user.list', compact('users'));
    }

    public function userCreate ()
    {
        return view('backend.user.create');
    }

    public function userStore (Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        toastr()->success('User created succesfully!');
        return redirect('admin/user/list');
    }
}
