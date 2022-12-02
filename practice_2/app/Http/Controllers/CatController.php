<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatModel;

class CatController extends Controller
{
    function cat(){
        return view('dashboard.cat');
    }
    // function insert(Request $req){
    //     $catName=$req->cat_name;
    //     return view('dashboard.cat',compact('catName'));
    // }
    function insert(Request $req){
        $catName=$req->cat_name;
        $catModel= new CatModel();
        $catModel->cat_name=$catName;
        $catModel->save();
        return redirect('catPage');
        
    }
    function show(){
        $catModel= new CatModel();
        $all_data = $catModel->get();
        return view('dashboard.cat',['data'=>$all_data]);
    }

    function editCat($id){
        $catModel=CatModel::find($id);
        return view('dashboard.edit_cat',compact('catModel'));
        
    }

    function updateCat(Request $req,$id){
        $catModel=CatModel::find($id);
        $catName=$req->cat_name;
        $catModel->cat_name=$catName;
        $catModel->save();
        return redirect('catPage/');
    }

    function deleteCat($id){
        $catModel=CatModel::find($id);
        $catModel->delete();
        return redirect()->back();
    }
}