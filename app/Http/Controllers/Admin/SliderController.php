<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index(){
        return view('admin.slider.index');
    }
    public function save(Request $request){

    $file =$request->file('image');
    $filename = 'image'. time().'.'.$request->image->extension();
    $file->move("upload/",$filename);

     $data = new Slider();
     $data->title = $request->title;
     $data->description = $request->description;
     $data->image = $filename;
     $data->status =$request->status;
     $data->save();

     if($data){
         return redirect('admin/slider/');
     }

    }
    public function display(){
        $data = Slider::all();
        return view('admin.slider.index',compact('data'));
     }
    public function edit($id){
        $data = Slider::find($id);
        return view ('admin.slider.edit',compact('data'));
    }
    public function update(Request $request){

        if($request->hasFile('image')){

            $file =$request->file('image');
            $filename = 'image'. time().'.'.$request->image->extension();
            $file->move("upload/",$filename);

          $data = Slider::find($request->id);
          $data->title= $request->title;
          $data->description = $request->description;
          $data->image = $filename;
          $data->status= $request->status;
          $data->save();

          if($data){
              return redirect('admin/slider/');
          }

        }else{

         $data = Slider::find($request->id);
         $data->title= $request->title;
         $data->description = $request->description;
         $data->status= $request->status;
         $data->save();

         if($data){
             return redirect('admin/slider/');
         }

        }
        }
        public function delete($id){
            $data = Slider::find($id)->delete();
            if($data){
              return redirect('admin/slider/');
            }
        }


}
