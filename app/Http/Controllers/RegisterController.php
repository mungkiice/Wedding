<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
	public function showRegistrationForm()
    {
    	//mengembalikan halaman form register
        return view('register');
    }
	public function register(Request $request) {
		//validasi input user
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|unique:users',
			'password' => 'required|min:6|confirmed',
			'username' => 'required|unique:users'
		]);
		//membuat akun user sesuai inputan
		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'username' => $request->username,
			'photo' => $request->photo->store('user', 'public'),
		]);
		//kembali ke halaman home
		Auth::guard()->login($user);
		return redirect('/home');
	}

}
