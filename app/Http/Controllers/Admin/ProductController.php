<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use Illuminate\Support\Carbon;
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
        $products = Product::all();
        return view('auth.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', '<>', NULL)->get();
        return view('auth.products.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Session::flash('properties', $request->properties);
      $request->validate([
        'properties' => 'min:1',
        'properties.*.key' => 'min:1',
        'properties.*.value' => 'min:1',
        ]);
        $data = $request->all();
        $data['url'] = mb_strtolower(preg_replace('/(?!^)\s+/', '_', preg_replace('/[^\00-\255]+/u', '', $request->name)));
        $data['updated_at'] = Carbon::now();
        $data['created_at'] = Carbon::now();
        $product = Product::create($data);
        if ($request->hasFile('prodimg')){
            $i = 1;
            foreach ($request->file('prodimg') as $prodimg) {
              $dataimg['product_id'] = $product->id;
              $dataimg['path'] = 'img_'.rand(1, 999).time().'.'.$prodimg->getClientOriginalExtension();
              $dataimg['position'] = $i++;
              $dataimg['updated_at'] = Carbon::now();
              $dataimg['created_at'] = Carbon::now();
              $prodimg->storeAs('products/'.$product->id.'/', $dataimg['path']);
              ProductImage::create($dataimg);
            };
          }else{
            $dataimg['product_id'] = $product->id;
            $dataimg['path'] = 'no-img.png';
            $dataimg['position'] = "1";
            $dataimg['updated_at'] = Carbon::now();
            $dataimg['created_at'] = Carbon::now();
            ProductImage::create($dataimg);
          };
        return redirect()->route('products.index')->with('success', 'Продукт '.$product->name.' добавлен успешно!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $product)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::where('parent_id', '<>', NULL)->get();
        return view('auth.products.form', compact('product' ,'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      Session::flash('properties', $request->properties);
      $request->validate([
        'properties' => 'min:1',
        'properties.*.key' => 'min:1',
        'properties.*.value' => 'min:1',
        ]);
        $data = $request->all();
        $data['url'] = mb_strtolower(preg_replace('/(?!^)\s+/', '_', preg_replace('/[^\00-\255]+/u', '', $request->name)));
        $data['updated_at'] = Carbon::now();
        $product->update($data);
        if ($request->hasFile('prodimg')){
          $i = 1;
          foreach ($request->file('prodimg') as $prodimg) {
            if($product->productImage){
              // Storage::disk('public')->exists('products/'.$product->id.'/'.$product->productImage?$product->productImage->path:NULL)?Storage::disk('public')->delete('products/'.$product->id.'/'.$product->productImage?$product->productImage->path:NULL):NULL;
              // $product->productImage?$product->productImage->path->delete():NULL;
              $dataimg['product_id'] = $product->id;
              $dataimg['path'] = 'img_'.rand(1, 999).time().'.'.$prodimg->getClientOriginalExtension();
              $dataimg['position'] = $i++;
              $dataimg['updated_at'] = Carbon::now();
              $prodimg->storeAs('products/'.$product->id.'/', $dataimg['path']);
              $product->productImage()->update($dataimg);
            }else{
              $dataimg['product_id'] = $product->id;
              $dataimg['path'] = 'img_'.rand(1, 999).time().'.'.$prodimg->getClientOriginalExtension();
              $dataimg['position'] = $i++;
              $dataimg['updated_at'] = Carbon::now();
              $dataimg['created_at'] = Carbon::now();
              $prodimg->storeAs('products/'.$product->id.'/', $dataimg['path']);
              ProductImage::create($dataimg);
            };
          };
        };
        return redirect()->route('products.index')->with('success', 'Данные продукта '.$product->name.' успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
