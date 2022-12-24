<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CashierController extends Controller
{
    public function cashier_dashboard()
    {
        if(Auth::check()){
            return view('cashier.cashier-dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
