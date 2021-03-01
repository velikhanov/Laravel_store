@extends('layouts.app')

@section('pagescss')
<link rel="stylesheet" href="/css/main/product.css">
<link rel="stylesheet" href="/css/main/slick-theme.css">
<link rel="stylesheet" href="/css/main/slick.css">
<link rel="stylesheet" href="/css/main/jquery.fancybox.min.css">
@endsection

@section('title', 'Товары')

@section('content')
<section class="section">
  @include('inc.flash')
  @include('inc.modal-order')
  <div class="container">
  @foreach($proditem as $prod)
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 row-box">
              <div class="productslider__big">
              @foreach($prod->productImage as $imgitem)
                <a href="/img/products/{{ $imgitem->path }}" data-fancybox="gallery-1"><img class="prodimgbig" src="/img/products/{{ $imgitem->path }}"></a>
              @endforeach
              </div>
              <div class="productslider__small">
              @foreach($prod->productImage as $imgitem)
                <div><img class="prodimgsmall" src="/img/products/{{ $imgitem->path }}"></div>
              @endforeach
              </div>
          </div><!--end col-->
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card">
              <input class="prodlink" type="hidden" href="/{{Request::path()}}">
              <input class="card-img-top" type="hidden" src="/img/products/{{ $prod->cardImage->path}}">
              <div class="card-body text-center">
                <span class="card-title border-bottom">{{ $prod->name }}</span>
                <div class="prch mt-5 border-bottom"><span class="card-text">{{ $prod->price }} AZN</span><a class="compareicon" href="#"><i href="#" class="fas fa-balance-scale"></a></i></div><br>
                <span class="card-text"><i class="{{ $prod->is_available_icon }} mt-5"></i>{{ $prod->is_available_text }}</span>
              </div><!--end card-body-->
              <div class="card-footer"></div>
              <!--  <div class="btn-group form-inline">
                    <div class="prodcount"></div>
                    <a href="{{ route('basket-red', [ 'id' => $prod['id'] ]) }}" class="fas fa-minus-square"></a>
                    <a href="{{ route('basket-inc', [ 'id' => $prod['id'] ]) }}" class="fas fa-plus-square"></a>
                </div>-->
                <div class="product-icon-container baskbuy">
                  <a href="{{ route('basket-add', [ 'id' => $prod->id ]) }}" class="ajaxcartadd btn btn-success mt-2 mb-1">В корзину</a>
                  <a href="{{ route('modal_order', [ 'id' => $prod->id ]) }}" class="modal_order btn btn-danger mt-2 mb-1">Купить</a>
                </div>
              </div>
          </div><!--end col-->
      </div><!--end row-->
      <div class="row mt-5">
          <button class="btn pay col-lg-3 col-md-6 col-sm-12" type="button" data-toggle="collapse" data-target="#collapseExample_1" aria-expanded="true" aria-controls="collapseExample_1">
          Характеристики
          </button>
          <button class="btn pay col-lg-3 col-md-6 col-sm-12" type="button" data-toggle="collapse" data-target="#collapseExample_2" aria-expanded="false" aria-controls="collapseExample_2">
            Описание
          </button>
          <button class="btn pay col-lg-3 col-md-6 col-sm-12" type="button" data-toggle="collapse" data-target="#collapseExample_3" aria-expanded="false" aria-controls="collapseExample_3">
            Отзывы
          </button>
      </div>
      <div id="collapse_card_group" class="borderprop">
          <div class="collapse show" id="collapseExample_1" data-parent="#collapse_card_group">
            <table class="table table-bordered">
                <tr>
                  <th scope="row">Код товара:</th>
                  <td>425263546534</td>
                </tr>
                <tr>
                  <th scope="row">Бренд:</th>
                  <td>Indesit</td>
                </tr>
                <tr>
                  <th scope="row">Тип холодильника:</th>
                  <td>С верхней морозильной камерой</td>
                </tr>
                <tr>
                  <th scope="row">Система охлаждения холодильной камеры:</th>
                  <td>Капельная</td>
                </tr>
                <tr>
                  <th scope="row">Система охлаждения морозильной камеры:</th>
                  <td>Капельная</td>
                </tr>
                <tr>
                  <th scope="row">Полезный объем холодильной камеры:</th>
                  <td>97 л</td>
                </tr>
                <tr>
                  <th scope="row">Полезный объем морозильной камеры:</th>
                  <td>33 л</td>
                </tr>
                <tr>
                  <th scope="row">Класс жнергопотребления:</th>
                  <td>А+</td>
                </tr>
                <tr>
                  <th scope="row">Уровень шума:</th>
                  <td>38 дБ</td>
                </tr>
                <tr>
                  <th scope="row">Цвет корпуса:</th>
                  <td>Белый</td>
                </tr>
            </table>
          </div>
          <div class="collapse" id="collapseExample_2" data-parent="#collapse_card_group">
            <h3 class="border text-success pl-1">{{ $prod->description }}</h3>
          </div>
          <div class="collapse text-center" id="collapseExample_3" data-parent="#collapse_card_group">
            <div class="row jumbotron">
              <div class="col-lg-2 col-md-2 col-sm-6 text-left">
                  <span><i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i></span>
              </div>
                  <span class="col-lg-3 col-md-3 col-sm-6 text-lg-left text-sm-right">Валерий Иванович</span>
                  <span class="col-lg-5 col-md-5 col-sm-12 text-lg-left text-sm-center">Крутой холодильник, круто холодит.Крутой холодильник, круто холодит.Крутой холодильник, круто холодит.Крутой холодильник, круто холодит.Крутой холодильник, круто холодит.Крутой холодильник, круто холодит.Крутой холодильник, круто холодит.</span>
                  <span class="col-lg-2 col-md-2 col-sm-12 text-center">27.04.2020</span>
            </div>
            <button href="#" class="btn btn-primary mt-3" type="button">Оставить отзыв</button>
          </div>
        </div><!--end collapsed properties-->
        @endforeach
  </div><!--end container-->
</section>
@endsection
@section('pagesjs')
<script src="/js/slick.min.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/cartadd.js"></script>
<script src="/js/modal-order.js"></script>
@endsection
