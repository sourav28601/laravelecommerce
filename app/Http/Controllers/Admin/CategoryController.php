<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{ 
    public function index(){
        return view('admin.category.index');
    }
     public function save(Request $request){

          $file =$request->file('image');
          $filename = 'image'. time().'.'.$request->image->extension();
          $file->move("upload/",$filename);

        $data = new Category();
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->description = $request->description;
        $data->image = $filename;
        $data->save();
        if($data){
            return redirect('admin/category/');
        }

     }

     public function display(){
        $data = Category::all();
        return view('admin.category.index',compact('data'));
     }

     public function edit($id){
        $data = Category::find($id);
        return view('admin.category.edit',compact('data'));
     }

     public function update(Request $request){

       if($request->hasFile('image')){

           $file =$request->file('image');
           $filename = 'image'. time().'.'.$request->image->extension();
           $file->move("upload/",$filename);

         $data = Category::find($request->id);
         $data->name = $request->name;
         $data->slug = $request->slug;
         $data->description = $request->description;
         $data->image = $filename;
         $data->save();

         if($data){
             return redirect('admin/category/');
         }

       }else{

        $data = Category::find($request->id);
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->description = $request->description;
        $data->save();

        // if($data){
        //     return redirect('admin/category/');
        // }

       }
    }
       public function delete($id){
        $data = Category::find($id)->delete();
        if($data){
          return redirect('admin/category/');
        }
      }



}
