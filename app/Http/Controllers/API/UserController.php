<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Pelanggan;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
	$email = $request->email;
	$password = $request->password;

        $auth = Auth::attempt(['email' => $email, 'password' => $password, 'status' => 0]);

        if ($auth) {
        	$user = User::where('email', $email)->first();
        	return json_encode($user, 200);
        }
        else{
	       return null;
        }
    }

    public function get_detail(Request $request){
        return Pelanggan::with('user')->where('user_id', $request->input('user_id'))->first();
    }

    public function update_profile(Request $request){
        $user_id = $request->input('user_id');
        $name = $request->input('name');
        $email = $request->input('email');
        $hp = $request->input('hp');
        $address = $request->input('address');
        $birthdate = $request->input('birthdate');

        $check_user = User::where('email', $email)->first();
        $my_user = User::where('id', $user_id)->first();

        if ($my_user->email == $email) {
            User::where('id', $user_id)->update(['name' => $name, 'email' => $email]);
            Pelanggan::where('user_id', $user_id)->update(['nama' => $name, 'alamat' => $address, 'telepon' => $hp, 'tanggal_lahir' => $birthdate]);
            return 0;
        }
        else{
            if ($check_user == null) {
                User::where('id', $user_id)->update(['name' => $name, 'email' => $email]);
                Pelanggan::where('user_id', $user_id)->update(['nama' => $name, 'alamat' => $address, 'telepon' => $hp, 'tanggal_lahir' => $birthdate]);
                return 0;
            }
            else{
                return 1;
            }
        }
    }

    public function update_password(Request $request){
        $id = $request->id;
        $old_password = $request->old_password;
        $new_password = $request->new_password;

        $user = User::where('id', $id)->first();

        if (Hash::check($old_password, $user->password)) 
        {
            User::where('id', $id)->update(['password' => bcrypt($new_password)]);
            return 0;
        }
        else{
            return 1;
        }
    }
}
