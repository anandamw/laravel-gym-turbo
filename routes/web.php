<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PaketsSetupController;
use App\Http\Controllers\MembershipTransactionsController;
use App\Http\Controllers\MembershipRecapitulationsController;


Route::get("/login", [SessionsController::class, 'index']);


Route::get('/dashboard', function () {
    $title = "Dashboard";
    return view('admin.dashboard', compact('title'));
});

// customer 
Route::get('/customer', [CustomersController::class, 'index']);
Route::get('/customer/create', [CustomersController::class, 'create']);

// hak akses
Route::get('/access-rights', [UsersController::class, 'index']);

// paket setttings
Route::get('/paket-settings', [PaketsSetupController::class, 'index']);
 
// transactions
Route::get('/membership/transaction', [MembershipTransactionsController::class, 'index']);
Route::get('/membership/history', [MembershipTransactionsController::class, 'index']);

// recapitulation
Route::get('/membership/recapitulation', [MembershipRecapitulationsController::class, 'index']);




// product
Route::get('/product', [ProductsController::class, 'index']);
Route::get('/product', [ProductsController::class, 'index']);
// Route::get('/product/', [ProductsController::class, 'detail']);
Route::get('/product/detail/{id}', [ProductsController::class, 'detail']);
