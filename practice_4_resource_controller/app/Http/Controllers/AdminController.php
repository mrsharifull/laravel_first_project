<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin()
    {
        return view('.admin.index');
    }
    function catShow()
    {
        return view('admin.category');
    }
}