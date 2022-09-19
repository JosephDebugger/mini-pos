<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function index(){
        return view('backend.admin.login');
    }// end method

    public function home(){
        return view('backend.index');
    }
    public function login(Request $request){
    //    dd($request->all());
        $check = $request->all();
        $check = [
            'email'=> $check['email'],
            'password'=> $check['password']
        ];

        
        if(Auth::guard('admin')->attempt($check)  == false)
        {
            return redirect()->route('admin.home')->with('error','Successfully Logged in');
        }
        else{
            return redirect()->back()->with('error','Invalid email or password!');
        }

    }
    
   public function register(){
        return view('backend.admin.registration');
    }
    public function registerprocess(Request $request){
        // dd( $request);
        Admin::insert([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->name),
            'created_at'=> Carbon::now(),
            
        ]);
        return redirect()->route('admin.dashboard')->with('error','Admin created succesfully');
    }

}