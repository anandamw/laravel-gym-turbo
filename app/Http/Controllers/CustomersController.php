<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $show_datas = [
            'title' => 'Cuctomer',
            'table_title' => 'Table Cuctomer',

        ];


        return view("admin.memberships.customers.index", $show_datas);
    }
    public function create()
    {
        $show_datas = [
            'title' => 'Cuctomer',
            'table_title' => 'Form Cuctomer',

        ];
        return view('admin.memberships.customers.customer_create', $show_datas);
    }
}
