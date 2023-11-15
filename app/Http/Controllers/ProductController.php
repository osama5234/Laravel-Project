<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $url = url('/product');
        $products = Product::all();
        return view('index',compact('products','url'));


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $product =null;
        return view('product',compact('product'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $product = new product;
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        if($request->file('image'))
        {
            $imagepath=$request->file('image')->store('images', 'public');
            $product->image = $imagepath;

        }
        $product->save();
        return redirect()->back()->with('status','Product has been created');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request['name'];
        $product->category_id = $request['category_id'];
        $product->description = $request['description'];

        if($request->file('image'))
        {
        Storage::disk('images')->delete($product->image);
        $imagepath=$request->file('image')->store('images', 'public');
        $product->image = $imagepath;
        }
        $product->save();
        return redirect('product')->with('status','Data Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->back()->with('status','Data Deleted Successfully');

    }
}
