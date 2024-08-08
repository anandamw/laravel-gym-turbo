<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {

        return view('auth.register');
    }

    public function register_action(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "name" => 'required',
            "username" => 'required',
            "alamat" => 'required',
            "no_telepon" => 'required',
            "email" => 'required|email|unique:users',
        ]);

        $data = [
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "password" =>  bcrypt($request->password),
            "role" => 'customer',
            "no_telepon" => $request->no_telepon,
            "alamat" => $request->alamat,
        ];

        User::create($data);
        return redirect()->route('login');
    }

    public function login_action(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                "email" => 'required',
                "password" => 'required',
            ],
            [
                "email.required" => "Email atau Password salah",
                "password.required" => "Email atau Password salah"
            ]
        );

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == "admin") {
                return redirect('/dashboard/admin');
            } elseif (auth()->user()->role == 'karyawan') {
                return redirect('/dashboard/karyawan');
            } elseif (auth()->user()->role == 'customer') {
                return redirect('/page');
            } else {
                return response()->json('Tidak dapat mengakses halaman ini');
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email atau Password salah']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
