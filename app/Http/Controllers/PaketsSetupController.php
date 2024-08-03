<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketsSetupController extends Controller
{
    public function index()
    {

        $show_datas = [
            'title' => 'Paket Settings',
            'table_title' => 'Table Paket Settings',
        ];


        return view('admin.memberships.pakets_setup.index',  $show_datas);
    }
}
