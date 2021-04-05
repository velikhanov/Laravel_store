<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController;


//auth
Route::group(['middleware' => 'auth'], function(){

  // Route::group(['middleware' => 'role:Admin,CEO'], function(){
  //
  //
  // });

  Route::group(['middleware' => 'role:Admin,CEO', 'prefix' => 'admin'], function(){

      Route::get('/admin-order', [AdminController::class, 'admin_order'])->name('admin_order');

      Route::resource('products', ProductController::class)->except([
        'show'
      ]);

  });

  Route::get('/user-panel', [AdminController::class, 'user_panel'])->name('user_panel');

  Route::post('/user-panel/user-edit', [AdminController::class, 'user_edit'])->name('user_edit');


});

//pages
Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/paydel', [MainController::class, 'paydel'])->name('paydel');

Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

Route::get('/aboutus', [MainController::class, 'aboutus'])->name('aboutus');


//basket
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');

Route::get('/basket-add/{id}', [BasketController::class, 'addCart'])->name('basket-add');

Route::get('/basket-inc/{id}', [BasketController::class, 'increaseCart'])->name('basket-inc');

Route::get('/basket-red/{id}', [BasketController::class, 'reduseCart'])->name('basket-red');

Route::get('/basket-del/{id}', [BasketController::class, 'deleteCart'])->name('basket-del');

Route::get('/basket-clr/{id}', [BasketController::class, 'clearCart'])->name('basket-clr');

Route::get('/basket/new-order', [BasketController::class, 'new_order'])->name('new_order');

Route::post('/basket/new-order-place', [BasketController::class, 'new_order_place'])->name('new_order_place');

Route::get('/modal/{id}', [BasketController::class, 'modal_order'])->name('modal_order');

Route::get('/modal/update/{id}', [BasketController::class, 'modal_order_update'])->name('modal_order_update');

Route::post('/modal/place-order', [BasketController::class, 'modal_order_place'])->name('modal_order_place');

//categories and products
Route::get('/{categories}', [MainController::class, 'categories'])->name('categories');

Route::get('/{categories}/{category}', [MainController::class, 'category'])->name('category');

Route::get('/{categories}/{category}/{product}', [MainController::class, 'product'])->name('product');
