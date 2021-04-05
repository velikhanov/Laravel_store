@extends('auth.layouts.app')

@section('admin-css')
<link rel="stylesheet" href="/css/auth/admin-order.css">
@endsection

@section('title-admin', 'Все заказы')

@section('content-admin')
<div class="container emp-profile">
  <div class="row justify-content-end align-middle">
      <div class="col-12">
          @foreach($orders as $order)
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Название</th>
              <th scope="col" class="text-center">Кол-во <span class="prodcount">{{ $order->cart->totalQty }}</span></th>
              <th scope="col" class="text-right">Стоимость </th>
            </tr>
          </thead>
          <tbody>
          @foreach($order->cart->items as $item)
            <tr>
              <th scope="row"><a href="/{{ $item['code_cat'] }}/{{ $item['url_cat'] }}/{{ $item['prod_url'] }}"><img class="basketimg mr-1" src="@isset($item['img']){{Storage::disk('public')->exists('products/'.$item['id'].'/'.$item['img'])?Storage::url('products/'.$item['id'].'/'.$item['img']):'/img/products/no-img.png'}}@else{{'/img/products/no-img.png'}}@endisset"><span class="basket-prod-name">{{ Str::limit($item['name'], 20) }}</span></a></th>
              <td class="text-center"><div class="prodcount">{{$item['qty']}}</div></td>
              <td class="text-right">{{$item['cost']}}AZN</td>
            </tr>
          @endforeach
            <tr>
              <th scope="col"><h5>Пользователь</h5></th>
              <td class="text-center"><h5>{{ $order->name }}<br>{{ $order->email }}<br>{{ $order->Format_Number_Order }}</h5></td>
              <td class="text-right"><h5>{{ $order->address ?? 'Нет адреса'}}</h5></td>
            </tr>
            <tr>
              <th scope="row"><h5>Общая стоимость:</h5></th>
              <td></td>
              <td class="text-right"><h5>{{ $order->cart->totalPrice }} AZN</h5></td>
          </tr>
          </tbody>
        </table>
        @endforeach
      </div>
  </div>
</div>
@endsection
