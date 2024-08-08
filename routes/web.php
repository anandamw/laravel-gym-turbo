<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketsSetupController;
use App\Http\Controllers\MembershipTransactionsController;
use App\Http\Controllers\MembershipRecapitulationsController;
use PHPUnit\TextUI\XmlConfiguration\Group;








Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('users.home');
    });
    Route::get('/login', [SessionsController::class, 'login'])->name('login');
    Route::post('/login', [SessionsController::class, 'login_action']);
    Route::get('/register', [SessionsController::class, 'register']);
    Route::post('/register', [SessionsController::class, 'register_action']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        $userRole = auth()->user()->role;
        if ($userRole == 'admin' || $userRole == 'karyawan') {
            return redirect('/dashboard/' . $userRole);
        } elseif ($userRole == 'customer') {
            return redirect('/page');
        }
    });

    // group admin
    Route::middleware(['userAkses:admin'])->group(function () {
        Route::get("/dashboard/admin", [DashboardController::class, 'index']);
    });

    // group karyawan
    Route::middleware(['userAkses:karyawan'])->group(function () {
        Route::get("/dashboard/karyawan", [DashboardController::class, 'index']);
    });

    // group customer
    Route::middleware(['userAkses:customer'])->group(function () {
        Route::get('/page', function () {
            return view('users.page');
        });
    });


    Route::get('/customer', [CustomersController::class, 'index']);
    Route::get('/logout', [SessionsController::class, 'logout']);
});


// customer 
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
