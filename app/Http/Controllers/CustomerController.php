<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'name' => 'required|max:191',
                'phone' =>'required|max:191',
                'email'=>'email|max:191',
                 ]);
                 

        //          $validation= request()->validate([
        //             'name' => 'required|max:191',
        //             'phone' =>'required|max:191',
        //             'email'=>'email|max:191',
        //   ]);

        
        if($validator->fails())
                 {
                    return response()->json([
                        'status'=>400,
                        'errors'=>$validator->messages()
                    ]);
                 }
                 else{
                    $customer = new Customer;
                    $customer->name = $request->input('name'); 
                    $customer->phone = $request->input('phone');
                    $customer->email = $request->input('email');
                    $customer->gender = $request->input('gender');
                    $customer->customer_type = $request->input('customer_type');
                    $customer->save();
                    return response()->json([
                        'status'=>200,
                        'message'=>'Student added successfully',
                    ]);
                 }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}