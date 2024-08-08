<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $nama = "Admin";
        $data = [
            "title" => "Dashboard",
        ];

        toast('Selamat datang dihalaman ' . $nama, 'success');
        return view('admin.dashboard', $data);
    }
}
