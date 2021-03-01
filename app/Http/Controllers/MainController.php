<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
  public function index(){
    $proditem = Category::get();
    return view('index', compact('proditem'));
  }
  public function categories($code){
    $categories = Category::where('code', $code)->get();
    return view('categories', compact('categories'));
  }
  public function category($code, $url){
    $category = Category::where('url', $url)->get();
    return view('category', compact('category'));
  }
  public function product($code, $url, $suburl){
    $proditem = Product::where('url', $suburl)->get();
    return view('products', compact('proditem'));
  }
  public function paydel(){
    return view('paydel');
  }
  public function contacts(){
    return view('contacts');
  }
  public function aboutus(){
    return view('aboutus');
  }
}
