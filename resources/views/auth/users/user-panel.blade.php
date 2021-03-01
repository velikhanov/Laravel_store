@extends('auth.layouts.app')

@section('admin-css')
<link rel="stylesheet" href="/css/auth/user-panel.css">
@endsection

@section('title-admin', 'Личный кабинет')

@section('content-admin')
<div class="container emp-profile">
          <!-- Flash notification -->
          @include('inc.flash')
          <!-- End flash notification -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-head">
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Информация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Мои заказы</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row justify-content-end">
                                    <div class="col-10">
                                      <table class="table">
                                          <thead>

                                          </thead>
                                        <form class="" action="{{ route('user_edit') }}" method="POST">
                                        <tbody>
                                          @csrf
                                            <tr>
                                              <th scope="col">Имя</th>
                                              <td class="userdata">{{ Auth::user()->name }}</td>
                                              <td class="useredit"><input name="name" placeholder="Введите новое имя"><td>
                                              <td><a href="#"><i class="fas fa-edit"></i><i class="fas fa-times"></i></a><td>
                                            </tr>
                                            <tr>
                                              <th scope="col">E-Mail</th>
                                              <td class="userdata">{{ Auth::user()->email }}</td>
                                              <td class="useredit"><input name="email" placeholder="Введите новый Email"><td>
                                              <td><a href="#"><i class="fas fa-edit"></i><i class="fas fa-times"></i></a><td>
                                            </tr>
                                            <tr>
                                              <th scope="col">Tel.</th>
                                              <td class="userdata">{{ Auth::user()->Format_Number }}</td>
                                              <td class="useredit"><input name="phone" placeholder="Введите новый номер"><td>
                                              <td><a href="#"><i class="fas fa-edit"></i><i class="fas fa-times"></i></a><td>
                                            </tr>
                                            <tr>
                                              <th></th>
                                              <td><input class="usereditbtn btn btn-success" type="submit" value="Сохранить"></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                        </form>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="row justify-content-end align-middle">
                                  <div class="col-12">
                                    <table class="table table-bordered usertable">
                                      @foreach($orders as $order)
                                      <thead>
                                        <tr>
                                          <th scope="col">Название</th>
                                          <th scope="col" class="text-center">Кол-во <span class="prodcount">{{ $order->cart->totalQty }}</span></th>
                                          <th scope="col" class="text-right">Стоимость</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($order->cart->items as $item)
                                        <tr>
                                          <th scope="row"><a href="/{{ $item['code_cat'] }}/{{ $item['url_cat'] }}/{{ $item['prod_url'] }}"><img class="basketimg mr-1" src="/img/products/{{$item['img']}}"><span class="basket-prod-name">{{ Str::limit($item['name'], 20) }}</span></a></th>
                                          <td class="text-center"><div class="prodcount">{{$item['qty']}}</div></td>
                                          <td class="text-right">{{$item['cost']}}AZN</td>
                                        </tr>
                                          @endforeach
                                        <tr>
                                          <th scope="row"><h5>Общая стоимость:</h5></th>
                                          <td></td>
                                          <td class="text-right"><h5>{{ $order->cart->totalPrice }} AZN</h5></td>
                                      </tr>
                                      </tbody>
                                    @endforeach
                                    </table>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
@endsection
@section('pagesjs')
<script src="/js/usereditform.js"></script>
@endsection
