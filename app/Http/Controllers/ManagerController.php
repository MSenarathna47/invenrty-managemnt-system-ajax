<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ManagerController extends Controller
{
    public function manager_dashboard()
    {
        if(Auth::check()){
            return view('manager.manager-dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
