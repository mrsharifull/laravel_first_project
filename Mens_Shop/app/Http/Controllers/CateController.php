<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CateModel;

class CateController extends Controller
{
    function categories()
    {
        $cate_model = new CateModel();
        $all_data = $cate_model->get();


        return view('admin.categories', ['data' => $all_data]);
        
    }
    function insert(Request $req)
    {
        $cate_name = $req->cate_name;
        $cate_model = new CateModel();
        $cate_model->cate_name = $cate_name;
        $cate_model->save();

        // return view('admin.categories', compact('cate_name'));
        return redirect('catShow');
    }

    function editCategory($id)
    {
        $cate_model = CateModel::find($id);
        return view('admin.edit_category', compact('cate_model'));
    }

    function updateCategory(Request $req, $id)
    {
        $cate_model = CateModel::find($id);
        $cate_name = $req->cate_name;
        $cate_model->cate_name = $cate_name;
        $cate_model->save();
        return redirect('catShow');
    }

    function deleteCategory($id)
    {
        $cate_model = CateModel::find($id);
        $cate_model->delete();
        return redirect()->back();
    }
}