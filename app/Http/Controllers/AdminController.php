<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{

    public function __construct()
    {
       // $this->middleware('guest:admin')->except('logout');
    }
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
        if($request->password == $request->confirm_password){
       
            Admin::insert([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=>Hash::make($request->password),
                'created_at'=> Carbon::now(),
                
            ]);
            return redirect()->route('admin.home')->with('error','Admin created succesfully');
        }
        else
        {
            return redirect()->route('admin.register')->with('error','Two password did not match');
        }
    }

}