<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        $show_datas = [
            'title' => 'Product List',
            'table_title' => 'Table Products',
        ];
        return view('admin.ecommerce.products.index', $show_datas);
    }

    public function detail()
    {

        $show_datas = [
            'title' => 'Detail Products ',
        ];
        return view('admin.ecommerce.products.products_detail', $show_datas);
    }
}
