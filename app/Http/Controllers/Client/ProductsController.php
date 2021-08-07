<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $categories = new Category();
        $cate = $categories->all(array('name', 'id'));
        $products = new Product();
        $product = $products->paginate(12);
        $product_discount = $products::where('discount', '>', 0)->take(8)->get();
        $new_products = Product::orderBy('created_at', 'DESC')->take(6)->get();
        return view('client/collection/collection', [
            'categories' => $cate,
            'products'=>$product,
            'product_discount'=>$product_discount,
            'new_products'=>$new_products
        ]);
    }
    public function showItem($id){
        $categories = new Category();
        $cate = $categories->all(array('name', 'id'));
        $product = Product::find($id);
        $cateName= Category::find($product->catalog_id);
        $related = Product::where('catalog_id', $product->catalog_id)->take(4)->get();
        return view('client/collection/product',[
            'categories'=>$cate,
            'product'=>$product,
            'cateName'=>$cateName,
            'related'=>$related
        ]);
    }
}
