<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipHistorysController extends Controller
{
    public function index()
    {

        $show_datas = [
            'title' => 'Access Rights',
            'table_title' => 'Table Access Rights',
        ];
        return view('admin.memberships.membership_history.index',  $show_datas);
    }
}
