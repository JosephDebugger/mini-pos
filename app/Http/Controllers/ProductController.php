<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= product::all();
        return view('backend.products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $products = product::all();
       return view('backend.products.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate([
             'name'           =>['required','unique:posts','max:255'],
             'description'    =>['max:999'],
             'purchase_price' =>['integer','gt:0','lt:1000'],
             'sales_price'    =>['required','gt:0','lt:1000'],
             'quantity'       =>['required','integer','min:1','digits_between: 1,3'],
        ]);

        
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename= 'IMG_'.time().'_'.$extention;
        $file->move('public/images',$filename);
       }
        dd($file);
        product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'purchase_price'=>$request->purchase_price,
            'sales_price'=>$request->sales_price,
            'quantity'=>$request->quantity,
            'images'=>$filename,         
        ]);
        request()->session()->flash('message','Product Added Successfully');
        return redirect()->route('admin-product.create');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('backend.products.show',[
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $product = Product::find();
        return view('backend.products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename= 'IMG_'.time().'_'.$extention;
            $file->move('public/images',$filename);
           }
           // dd($file);
           $requestData = ([
                'name'=>$request->name,
                'description'=>$request->description,
                'purchase_price'=>$request->purchase_price,
                'sales_price'=>$request->sales_price,
                'quantity'=>$request->quantity,
                'images'=>$filename,         
            ]);
            $product->update($requestData);
            request()->session()->flash('message','Product Updated Successfully');
            return redirect()->route('admin-product.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('admin-product.index');
    }
}