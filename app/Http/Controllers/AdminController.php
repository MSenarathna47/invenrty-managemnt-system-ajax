<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{

    public function Admin_dashboard()
    {
        if(Auth::check()){
            return view('admin.admin-dashboard');
        }

        return redirect("/")->withSuccess('You are not allowed to access');
    }


}
