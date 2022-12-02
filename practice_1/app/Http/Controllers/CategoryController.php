<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    function categoryPage(){
        return view('admin.category');
    }

    // function insert(Request $req){
    //     $catName = $req->cat_name;
    //     return view('admin.category',compact('catName'));
    // }
    function insert(Request $req){
        $catName = $req->cat_name;
        $catModel = new CategoryModel();
        $catModel->category_name = $catName;
        $catModel->save();
        return redirect('category/');
        
    }
    function show(){
        $catModel = new CategoryModel();
        $all_data=$catModel->get();
        return view('admin.category',['data'=>$all_data]);
    }
    
    function editCat($id){
        $catModel= CategoryModel::find($id);
        return view('admin.edit_cat',compact('catModel'));
    }
    
    function updateCat(Request $req,$id){
        $catModel= CategoryModel::find($id);
        $catName = $req->cat_name;
        $catModel->category_name = $catName;
        $catModel->save();
        return redirect('category/');
    }

    function deleteCat($id){
        $catModel= CategoryModel::find($id);
        $catModel->delete();
        return redirect()->back();
    }

}