<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\ManagerController;

/*
|--------------------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin-dashboard', [AdminController::class, 'Admin_dashboard']);
Route::get('/admin-user-managment', [AdminController::class, 'Admin_user_managment']);











/*
|--------------------------------------------------------------------------
| manager Routes
|--------------------------------------------------------------------------
*/
Route::get('Manager-dashboard', [ManagerController::class, 'Manager_dashboard']);







/*
|--------------------------------------------------------------------------
| cashier Routes
|--------------------------------------------------------------------------
*/
Route::get('cashier-dashboard', [CashierController::class, 'cashier_dashboard']);
