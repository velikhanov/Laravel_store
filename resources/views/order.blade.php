@extends('layouts.app')

@section('pagescss')
<link rel="stylesheet" href="/css/main/order.css">
@endsection

@section('title', 'Оформление заказа')

@section('content')
<section class="section">
    <div class="card">
      @foreach ($errors->all() as $error)
           <div class="alert alert-danger text-center mt-2  mb-1">{{$error}}</div>
      @endforeach
          <div class="card-top border-bottom text-center"><a href="{{ route('basket')}}"><h5><i class="fas fa-backward mr-1"></i>Вернуться в корзину</h5></a> <span id="logo">Оформление заказа</span> </div>
              <div class="row upper"></div>
              <div class="row">
                  <div class="col-md-7">
                      <div class="left border">
                          <div class="row"> <span class="header">Параметры покупателя</span>
                              <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                          </div>
                          <form action="{{route('new_order_place')}}" method="post">
                            <span>Имя:</span> <input placeholder="{{Auth::check()?Auth::user()->name:'Введите имя'}}" name="name">
                            <span>Номер телефона:</span> <input class="phone" placeholder="{{Auth::check()?(Auth::user()->phone?Auth::user()->phone:'Введите номер телефона'):'Введите номер телефона'}}" name="phone">
                            <span>E-MAIL:</span> <input placeholder="{{Auth::check()?Auth::user()->email:'Введите имя'}}" name="e-mail">
                            @csrf
                              <div class="row">
                                  <!-- <div class="col-4"><span>Город:</span> <input placeholder="Baku"></div> -->
                                  <div class="col-4"><span>Адрес:</span> <input placeholder="Введите адрес" name="address"></div>
                              </div> <!--<input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Save card details to wallet</label>-->
                                <!-- <input type="submit" class="btn" value="Оформить заказ"> -->
                          <!-- </form> -->
                      </div>
                  </div>
                  <div class="col-md-5">
                      <div class="right border">
                          <div class="header">Итог заказа <span class="prodcount">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</span></div><hr>
                          @foreach($products as $product)
                          <h6><a href="/{{ $product['code_cat'] }}/{{ $product['url_cat'] }}/{{ $product['prod_url'] }}">{{ $product['name'] }}</a></h6>
                          <div class="row item">
                              <div class="col-4 align-self-center"><a href="/{{ $product['code_cat'] }}/{{ $product['url_cat'] }}/{{ $product['prod_url'] }}"><img class="basketimg mr-1" src="/img/products/{{ $product['img'] }}"></a></div>
                              <div class="col-8">
                                  <div class="row"><b>{{ $product['cost'] }} AZN</b></div>
                                  <div class="row"><div class="btn-group form-inline">
                                    <div class="prodcount">{{ $product['qty'] }}</div>
                                    <a href="{{ route('basket-red', [ 'id' => $product['id'] ]) }}" class="fas fa-minus-square"></a>
                                    <a href="{{ route('basket-inc', [ 'id' => $product['id'] ]) }}" class="fas fa-plus-square"></a>
                                  </div></div>
                              </div>
                          </div>
                          <hr>
                          @endforeach
                          <div class="row lower">
                              <div class="col text-left">К оплате:</div>
                              <div class="col text-right">{{ $totalPrice ?? '0'}} AZN</div>
                          </div>
                          <div class="row lower">
                              <div class="col text-left">Доставка:</div>
                              <div class="col text-right">Уточняется отдельно</div>
                          </div>
                          <!-- <div class="row lower">
                              <div class="col text-left"><b>Total to pay</b></div>
                              <div class="col text-right"><b>$ 46.98</b></div>
                          </div> -->
                          <input type="submit" class="btn" value="Оформить заказ">
                      </div>
                  </div>
                </form>
              </div>
          <div> </div>
      </div>
</section>
@endsection
