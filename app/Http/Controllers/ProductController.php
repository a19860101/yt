<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request->file('img')->store('qwerty');
        // return $request->file('img')->store('banana','public');
        // $img_name = time();
        // return $request->file('img')->storeAs('banana',$img_name);

        $img = $request->file('img')->getClientOriginalName();
        $img_ext = $request->file('img')->getClientOriginalExtension();
        $img_name = md5(time());
        // $img_name = pathinfo($img,PATHINFO_FILENAME);
        //檔名
        $img_final = $img_name.'.'.$img_ext;
        $request->file('img')->storeAs('public/images',$img_final);

        $product = new Product;
        $product->fill($request->all());
        $product->img = $img_final;
        $product->save();

        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        Storage::delete('public/images/'.$product->img);
        Product::destroy($product->id);
        return redirect('product');
    }
}
