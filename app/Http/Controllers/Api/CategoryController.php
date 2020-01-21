<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$data['result'] = Category::paginate(3);
    	return $data;
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->category_name;
        $category->status = $request->status;
        $category->save();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return $category;
    }

    public function update(Request $request,$id)
    {
        $category = Category::find($id);
        $category->name = $request->category_name;
        $category->status = $request->status;
        $category->save();
    }

    public function delete($id)
    {
       $category = Category::find($id);
       $category->delete();
    }
}
