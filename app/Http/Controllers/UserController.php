<?php

namespace App\Http\Controllers;

use App\Http\Requests\FrontLoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{


    public function login(){
       return view('front.login');
    }
    public function user_insert(request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user_count=User::where('email',$request->email)->count();
        // echo'<pre>';
        // print_r($user_count);
        if($user_count>0){
            return redirect()->back()->with('error','email is already exit');
        }
        else{
            $data = new User();
            // echo'<pre>';
            // print_r($request->all());
            $data->name=$request->name;
            $data->email=$request->email;
            $data->password=bcrypt($request->password);
            $data->save();
        if($data){
            return redirect('/login');
        }
        }

    }
    public function login_verification(FrontLoginRequest $request){
        // echo'<pre>';
        // print_r($request->all());
        $session_id=Session::getId();
        // echo $session_id;
        // die;
        if(Auth::attempt(['email' => $request->email_log, 'password' => $request->password_log])){
            Cart::where('session_id',$session_id)->update(['user_email'=>$request->email_log]);
            return redirect('/add_to_cart');
        }
        else{
            return redirect()->back();
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}

