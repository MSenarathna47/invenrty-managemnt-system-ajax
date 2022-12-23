<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'Username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('Username', 'password');

        if (Auth::attempt($credentials)) {

            $usertype=Auth::user()->usertype;

            if($usertype=='0')
            {
                return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
            }
            if($usertype=='1')
            {
                return redirect()->intended('admin-dashboard')
                        ->withSuccess('Signed in');

            }
            if($usertype=='2')
            {
                return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
            }
            else
            {
                return view('');
            }
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
