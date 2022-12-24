<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function Admin_dashboard()
    {
        if(Auth::check()){
            return view('admin.admin-dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    //    ---------------------------------User Managmnet start---------------------------------------

    public function Admin_user_managment()
    {
        return view('admin.admin-user-managmnet');
    }
}
