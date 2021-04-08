<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('parent')->get();
        return view('auth.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', NULL)->get();
        return view('auth.categories.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      $request->parent_id == NULL ? $data['code'] = 'categories' : $data['code'] = $request->code;
      if ($request->hasFile('catimg')){
        $data['img'] = 'img_'.rand(1, 999).time().'.'.$request->file('catimg')->getClientOriginalExtension();
        $request->file('catimg')->storeAs('categories', $data['img']);
      };

      $data['updated_at'] = Carbon::now();
      $data['created_at'] = Carbon::now();
      $category = Category::create($data);
      return redirect()->route('categories.index')->with('success', 'Категория '.$category->name.' успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // public function show(Category $category)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::where('parent_id', NULL)->get();
        return view('auth.categories.form', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->all();

        $request->parent_id == NULL ? $data['code'] = 'categories' : $data['code'] = $request->code;
      if ($request->hasFile('catimg')){
        Storage::disk('public')->exists('categories/'.$category->img)?Storage::disk('public')->delete('categories/'.$category->img):NULL;
        $data['img'] = 'img_'.rand(1, 999).time().'.'.$request->file('catimg')->getClientOriginalExtension();
        $request->file('catimg')->storeAs('categories', $data['img']);
        }
        $data['updated_at'] = Carbon::now();

        $category->update($data);

        return redirect()->route('categories.edit', $category)->with('success', 'Категория '.$category->name.' успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
      Storage::disk('public')->exists('categories/'.$category->img)?Storage::disk('public')->delete('categories/'.$category->img):NULL;
      $category->delete();
      return redirect()->route('categories.index')->with('danger', 'Категория '.$category->name.' успешно удалена!');
    }
}
