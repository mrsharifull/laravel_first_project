<?php

namespace App\Http\Controllers;

use App\Models\CatModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin(){
        return view('.admin.index');
    }


}