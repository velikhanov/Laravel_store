@extends('layouts.app')

@section('pagescss')
<link rel="stylesheet" href="/css/main/categories.css">
@endsection

@section('title', 'Каталог товаров')

@section('content')
@include('inc.modal-order')
<section class="section-category">
  <div class="container-lg">
    <div class="row categories">
     @foreach($categories as $category)
        <div class="col-lg-2 col-md-4 col-sm-6">
            <a href="/{{ Request::is('categories') ? $category->url : $category->code}}{{ Request::is('categories') ? '' : '/' . $category->url }}" class="btn btn-lg btn-success catbtn" type="button">
              <img class="catbtnimg" src="/img/categories/{{ $category->img }}">
            </a>
            <h6 class="text-center text-success">{{ $category->name }}</h6>
        </div>
      @endforeach
    </div>
  </div>
</section>
<section class="section">
  @include('inc.flash')
  <div class="container">
      <div class="row">
        @foreach($categories as $product)
          @foreach($product->products as $item)
          <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="card mb-5">
              <a class="prodlink" href="/{{ $product->code }}/{{ $product->url }}/{{ $item->url}}"><img class="card-img-top" src="/img/products/{{ $item->cardImage->path }}" alt="Card image cap"></a>
              <div class="card-body">
                <a href="/{{ $product->code }}/{{ $product->url }}/{{ $item->url}}"><h5 class="card-title  text-center">{{ $item->name }}</h5></a>
                <div class="prch"><span class="card-text">{{ $item->price }} AZN</span><span class="card-text"><i class="{{ $item->is_available_icon }}"></i>{{ $item->is_available_text }}</span></div><br>
                <div class="prch second">
                <span><i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i></span>
                <span class="card-text feedback">10 отзывов</span>
                </div>
              </div><!--end card-body-->
              <div class="card-footer"></div>
              <div class="text-center"><i class="fa fa-handshake"></i><span class="reg">Оформило 10 человек</span><br>
              <div class="product-icon-container">
                <a href="{{ route('basket-add', [ 'id' => $item->id ]) }}" class="ajaxcartadd scrollOffset btn btn-success mt-2 mb-1">В корзину</a>
                <a href="{{ route('modal_order', [ 'id' => $item->id ]) }}" class="modal_order btn btn-danger mt-2 mb-1">Купить</a>
              </div>
              </div>
            </div><!--end card-->
          </div>
          @endforeach
        @endforeach
      </div><!--end row-->
  </div><!--end container-->
</section>
@endsection

@section('pagesjs')
<script src="/js/cartadd.js"></script>
<script src="/js/modal-order.js"></script>
@endsection
