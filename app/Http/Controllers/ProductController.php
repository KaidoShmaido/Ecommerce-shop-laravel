<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;


use Illuminate\Http\Request;

class ProductController extends Controller
{   
    
    public function index(){
        $products=Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function add(){
        $category=Category::all();
        return view('admin.products.add',compact('category'));
    }

    public function insert(Request $request){
        $products= new Product();
        if($request->hasFile('image')){
            $file = $request -> file('image');
            $ext = $file ->getClientOriginalExtension();
            $filename = time(). "." .$ext;
            $file->move('assets/uploads/products',$filename);
            $products ->image = $filename;
        }   
            $products->category_id=$request->input('category_id');
            $products->name=$request->input('name');
            $products->slug =$request->input('slug');
            $products->description=$request->input('description');
            $products->small_description=$request->input('small_description');
            $products->original_price=$request->input('original_price');
            $products->selling_price=$request->input('selling_price');
            $products->tax=$request->input('tax');
            $products->quantity=$request->input('quantity');
            $products->status=$request->input('status')== TRUE ? '1':'0';
            $products->trending=$request->input('trending')== TRUE ? '1':'0';
            $products->meta_title=$request->input('meta_title');
            $products->meta_keywords=$request->input('meta_keywords');
            $products->meta_description=$request->input('meta_description');
            $products->save();
            return redirect('/products')->with('status',"Product has been added succesfully");
    }
}