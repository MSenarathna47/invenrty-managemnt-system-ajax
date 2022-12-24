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
                return redirect()->intended('admin-dashboard')
                ->with('message','Signed in');
            }
            if($usertype=='1')
            {
                return redirect()->intended('Manager-dashboard')
                ->with('message','Signed in');

            }
            if($usertype=='2')
            {
                return redirect()->intended('cashier-dashboard')
                ->with('message','Signed in');
            }
            else
            {
                return view('');
            }
        }
        return redirect("/")->with('message','Login details are not valid');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
