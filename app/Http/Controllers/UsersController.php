<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $show_datas = [
            'title' => 'Access Rights',
            'table_title' => 'Table Access Rights',
        ];
        return view('admin.memberships.hak-akses.index',  $show_datas);
    }

    public function create()
    {
    }
}
