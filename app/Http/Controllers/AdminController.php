<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class AdminController extends Controller
{
    public function user_panel(){
      $orders = Auth::user()->orders;
      $orders->transform(function($order, $key){
        $order->cart = unserialize($order->cart);
        return $order;
      });
      return view('auth.users.user-panel', ['orders' => $orders]);
    }
    public function admin_panel(){
      return view('auth.admin.admin-panel');
    }
    public function ceo_panel(){
      return view('auth.admin.ceo-panel');
    }

    public function user_edit(Request $request){

      $user = Auth::user();

      $user->name = $request->input('name')?$request->input('name'):Auth::user()->name;
      $user->email = $request->input('email')?$request->input('email'):Auth::user()->email;
      $user->phone = $request->input('phone')?$request->input('phone'):(Auth::user()->phone?Auth::user()->phone:NULL);

      if ($request->hasFile('userimg')){
        Storage::disk('public')->exists('users/'.$user->img)?Storage::disk('public')->delete('users/'.$user->img):NULL;
        $user->img = 'img_'.$user->id.time().'.'.$request->file('userimg')->getClientOriginalExtension();
        $request->file('userimg')->storeAs('users', $user->img);
        }

      $user->update();

      return redirect()->back()->with('success', 'Ваши данные успешно обновлены!');
    }
}
