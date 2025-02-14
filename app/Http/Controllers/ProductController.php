<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::get();        //dd($products);
        $title = 'Products - Lists';
        return view('products.index',compact('products','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|max:100',
            'product_price' => 'required|decimal:2',
            'product_unit'=>'required|max:10'
        ]);


        $product = new Product();
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->unit = $request->product_unit;

        $product->save();

        return back()->with(['success'=>'Product created !.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $product = Product::where('id',$id)->first();
       return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::where('id',$id)->first();
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::where('id',$id)->first();
        //IF NOT FOUND
        if(!$product) return redirect()->route('products.index');

        $validated = $request->validate([
            'product_name' => 'required|max:100',
            'product_price' => 'required|decimal:2',
            'product_unit'=>'required|max:10'
        ]);

        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->unit = $request->product_unit;

        $product->save();

        return redirect()->route('products.index')->with(['success'=>'Product updated !.']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::where('id',$id)->first();
        //IF NOT FOUND
        if(!$product) return redirect()->route('products.index')->with(['warning'=>"Product Not Found!"]);

        $product->delete();

        return redirect()->route('products.index');

    }
}
