<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateController extends Controller
{
    function categories()
    {
        return view('admin.categories');
    }
    function insert(Request $req)
    {
        $cat_name = $req->cat_name;
        return view('admin.categories', compact('cat_name'));
    }
}