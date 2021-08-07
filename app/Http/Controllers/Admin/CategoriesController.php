<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index(){
        $categories = new Category();
        $data = $categories->all(array('name', 'id'));
        return view('admin/categories/categories', ['categories' => $data]);
    }
    public function create(){
        return view('admin/categories/add');
    }
    public function insert(Request $request){
        $name = $request->input('name');
        Category::create(array('name'=>$name));
        return redirect('/admin/categories/create')->with('status',"Thêm thành công!");
    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin/categories/edit',['category'=>$category]);
    }
    public function update(Request $request, $id){
        $data = $request->input('name');
        $category = Category::find($id);
        $category->name = $data;
        $category->save();
        return redirect('/admin/categories/edit/'.$id)->with('status',"Cập nhật thành công!");
    }
    public function delete(Request $request){
        if($request->destroy == 1){
            $category = new Category();
            $category->withTrashed()->where('id', $request->id)->forceDelete();
        }else{
            $category = Category::find($request->id);
            $category->delete();
        }
        return redirect('/admin/categories')->with('status',"Xóa thành công!");
    }
}
