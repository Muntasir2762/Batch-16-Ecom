<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;

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

    public function userEdit ($id)
    {
        $user = User::find($id);
        return view('backend.user.edit', compact('user'));
    }

    public function userUpdate (Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        
        if(isset($request->password)){
            $user->password = Hash::make($request->password);
        }

        $user->save();
        toastr()->success('User Updated Successfully!');
        return redirect('admin/user/list');
    }
}
