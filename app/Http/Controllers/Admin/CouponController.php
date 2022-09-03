<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;


class CouponController extends Controller
{
    public function index(){
        $data = new Coupon();
        return view('admin/coupon/coupon',compact('data'));
    }
    public function coupon_insert(Request $a){

        //  echo '<pre>';
        //  print_r($a->all());
      $data = new Coupon();

      $data->coupon_code=$a->coupon_code;
      $data->coupon_type=$a->coupon_type;
      $data->coupon_value=$a->coupon_value;
      $data->cart_min_value=$a->cart_min_value;
      $data->date=$a->date;
      $data->expired_on=$a->expired_on;
      $data->coupon_status=$a->coupon_status;
      $data->save();

       if($data ){
          return redirect('admin/coupon');
        }

    }
    public function display(){
     $data  = Coupon::all();
     return view('admin/coupon/coupon',compact('data'));
    }
   
    




}