<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;

class CatController extends Controller
{
    function cat(){
        return view('admin.cat');
    }
    // function insert(Request $req){
    //     $catName=$req->cat_name;
    //     return view('admin.cat',compact('catName'));
    // }
    function insert(Request $req){
        $catName=$req->cat_name;
        $catModel= new CatModel();
        $catModel->cat_name= $catName;
        $catModel->save();
        return redirect('catPage');
    }
    function show(){
        $catModel= new CatModel();
        $all_data = $catModel->get();
        return view('admin.cat',['data'=>$all_data]);
    }

    public function edit_cat($id){
        $catModel = CatModel::find($id);

        return view('admin.edit_cat', compact('catModel'));
    }

    public function update_cat(Request $request, $id){
        $catModel = CatModel::find($id);

        $catModel->cat_name = $request->cat_name;
        $catModel->save();
        return redirect('catPage');
    }
}