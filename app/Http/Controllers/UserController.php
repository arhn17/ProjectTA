<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use App\Transaksi;
use App\Pelanggan;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::where('role', '!=', 0)->get();
    	return view('pages.user.index',compact('users'));
    }

    public function create()
    {
    	$roles = Role::all()->pluck('name', 'id');
    	return view('pages.user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
    	$user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->status = 0;
    	$user->save();
    	return redirect(route('user.index'));

    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all()->pluck('name', 'id');
        return view('pages.user.edit',compact('user','roles'));
    }

    public function update(Request $request, $id)
    {
       
        $user = User::find($id)->update(['name'=>$request->name, 'email'=>$request->email, 'role'=>$request->role, 'password'=>bcrypt($request->password)]);
     
        return redirect(route('user.index'));

    }

    public function activated_account ($id, $status)
    {
        if ($status == 1) $user_status = User::where('id', $id)->update(['status' => 1]);
        else $user_status = User::where('id', $id)->update(['status' => 0]);

        if ($user_status == 1) {
            return redirect(route('user.index'));
        }
    }

    public function destroy ($id)
    {
        $pelanggan = count(Pelanggan::where('id', $id)->get());
        $transaksi = count(Transaksi::where('user_id', $id)->get());

        if ($pelanggan > 0 || $transaksi > 0) return redirect(route('user.index'));
        else
        {
            User::where('id', $id)->delete();
            return redirect(route('user.index'));
        }
    }

    public function show ($id)
    {
        $user = User::with('roles')->where('id', $id)->first();
        return view('pages.user.show', compact('user'));
    }
}
