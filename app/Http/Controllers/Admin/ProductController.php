<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }
    
   
    
    
    public function save(Request $request){

        $file =$request->file('product_image');
        $filename = 'product_image'. time().'.'.$request->product_image->extension();
        $file->move("upload/",$filename);

        $data = new Product();
        $data -> category_id=$request->category;
        $data -> product_name=$request->product_name;
        $data -> product_description=$request->product_description;
        $data -> product_price=$request->product_price;
        $data -> quantity=$request->quantity;
        $data -> product_image=$filename;
        // $data -> status=$request->status;
        $data->save();
       if($data){
           return redirect('admin/product/');
        }
    }
    public function display(){
        $categories = Category::all();
        $data = Product::all();
        return view('admin.product.index',compact('data','categories'));
    }

    public function edit($id){
        $cata = Category::all();
        $data = Product::find($id);
        return view('admin.product.edit',compact('data','cata'));
     }

     public function update(Request $request){

      if($request->hasFile('product_image')){

    $file =$request->file('product_image');
    $filename = 'product_image'. time().'.'.$request->product_image->extension();
    $file->move("upload/",$filename);

    $data = Product::find($request->id);
    $data -> category_id=$request->category;
    $data -> product_name=$request->product_name;
    $data -> product_description=$request->product_description;
    $data -> product_price=$request->product_price;
    $data -> quantity=$request->quantity;
    $data -> product_image=$filename;
    $data -> status=$request->status;
    $data->save();
   if($data){
       return redirect('admin/product/');
    }

    }else{

    $data = Product::find($request->id);
    $data -> category_id=$request->category;
    $data -> product_name=$request->product_name;
    $data -> product_description=$request->product_description;
    $data -> product_price=$request->product_price;
    $data -> quantity=$request->quantity;
    $data -> status=$request->status;
    $data->save();
   if($data){
       return redirect('admin/product/');
    }
}

     }

     public function delete($id){
         $data = Product::find($id)->delete();
         return redirect('admin/product/');

     }


}
