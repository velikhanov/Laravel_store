@extends('layouts.app')

@section('pagescss')
  <link rel="stylesheet" href="/css/main/basket.css">
@endsection

@section('title', 'Корзина')

@section('content')
<section class="section">
  <div class="container">
  @if(Session::has('cart'))
  <h2 class="text-center">Корзина</h1>
  <h6 class="text-center mb-3">Оформление заказа</h3>
  @include('inc.flash')
    <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Название</th>
                <th scope="col">Кол-во</th>
                <th scope="col">Цена</th>
                <th scope="col">Стоимость</th>
              </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
              <tr>
                <th scope="row"><a href="/{{ $product['code_cat'] }}/{{ $product['url_cat'] }}/{{ $product['prod_url'] }}"><img class="basketimg mr-1" src="/img/products/{{ $product['img'] }}"><span class="basket-prod-name">{{ $product['name'] }}</span></a></th>
                <td>
                  <div class="btn-group form-inline">
                      <div class="prodcount">{{ $product['qty'] }}</div>
                          <a href="{{ route('basket-red', [ 'id' => $product['id'] ]) }}" class="fas fa-minus-square"></a>
                          <a href="{{ route('basket-inc', [ 'id' => $product['id'] ]) }}" class="fas fa-plus-square"></a>
                  </div>
                </td>
                <td>{{ $product['price'] }} AZN</td>
                <td>{{ $product['cost'] }} AZN</td>
                <td class="trash-btn"><a href="{{ route('basket-del', [ 'id' => $product['id'] ]) }}"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
                @endforeach
              <tr>
                <td colspan="3"><h5>Общая стоимость:</h5></td>
                <td><h5>{{ $totalPrice ?? '0'}} AZN</h5></td>
            </tr>
            </tbody>
          </table>
        </div>
        <a href="{{ route('basket-clr', [ 'id' => $product['id'] ]) }}" class="btn btn-danger clearcart">Очистить корзину</a>
    </div>
    <div class="row">
      <a href="{{ route('new_order') }}" class="btn btn-success">Оформить заказ</a>
    </div>
  @else
      <!-- FLash -->
      @include('inc.flash')
      <!-- flash -->
    <div class="row mb-5 text-center">
        <div class="col-lg-12">
            <h1><strong>Ваша корзина пуста</strong></h1>
        </div>
        <div class="col-lg-12">
            <a class="btn btn-primary mt-1 mb-1 mr-1" href="{{ route('index') }}">На главную</a><a class="btn btn-primary mt-1 mb-1 ml-1" href="/categories">Категории товаров</a>
        </div>
        <div class="col-lg-12">
          <img class="img-fluid" src="/img/basket/truck.png">
        </div>
    </div>
@endif
    <h6 class="alert alert-warning mt-3">Уважаемые пользователи, обратите внимание: Если вы не авторизованы на сайте, то товары в корзине будут храниться несколько часов, если же Вы не хотите чтобы товары из корзины исчезли, пройдите регистрацию. Будьте уверены, что вы авторизованы перед добавлением товаров в козину.</h6>
  </div>
</section>
@endsection
