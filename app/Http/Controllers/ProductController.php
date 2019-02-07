<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $products = \Cache::remember('products.index', 1, function(){
            return \App\Product::with('owner')->get();
        });


        return view('products.index')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductCreateRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        $input = $request->validated();
        $input['user_id'] = auth()->user()->id;
        \App\Product::create($input);
        \Cache::forget('products.index');

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductUpdateRequest|Request $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $input = $request->validated();
        $product->update($input);
        \Cache::forget('products.index');
        Session::flash('success', 'Product Updated successfully');

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        \Cache::forget('products.index');

        return redirect('/products');
    }
}
