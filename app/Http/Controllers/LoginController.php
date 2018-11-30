<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }
    public function login(Request $request) {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if(Auth::user()->is_admin){
                return redirect('/admin');
            }
            return redirect('/home')->with('flash', 'Anda Telah Login');
        }else{
            // Session::flash('message', "Email dan Password tidak benar");
            return back()->with('flash', 'Anda Telah Login');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/home');
    }

    public function username()
    {
        return 'username';
    }
}
