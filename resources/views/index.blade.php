@extends('layouts.app')

@section('pagescss')
<link rel="stylesheet" href="/css/main/index.css">
<link rel="stylesheet" href="/css/main/slick.css">
<link rel="stylesheet" href="/css/main/slick-theme.css">
@endsection

@section('title', 'Главная страница')

@section('content')
<section class="section">
    @include('inc.flash')
    @include('inc.modal-order')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/index/carousel-item3.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/index/carousel-item1.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/index/carousel-item2.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<section class="container">
    <h1 class="s2tittle">Лидеры продаж</h1>
      <div class="slider">
        @foreach($proditem as $product)
          @foreach($product->products as $item)
            <div class="card">
              <a class="prodlink" href="/{{ $product->code }}/{{ $product->url }}/{{ $item->url }}"><img class="card-img-top" src="/img/products/{{ $item->cardImage->path}}" alt="Card image cap"></a>
              <div class="card-body">
                <a href="/{{ $product->code }}/{{ $product->url }}/{{ $item->url }}"><h5 class="card-title text-center">{{ $item->name }}</h5></a>
                <div class="prch"><span class="card-text">{{ $item->price }}</span><span class="card-text"><i class="{{ $item->is_available_icon }}"></i>{{ $item->is_available_text }}</span></div><br>
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
                <a href="{{ route('modal_order', [ 'id' => $item->id ]) }}" class="modal_order btn btn-danger mt-2 mb-1" data-id="">Купить</a>
                <!-- <a href="{{ route('modal_order', [ 'id' => $item->id ]) }}" class="modal_order btn btn-danger mt-2 mb-1" data-id="{{ $item->id }}" type="button" data-toggle="modal" data-target="#staticBackdrop">Купить</a> -->
              </div>
              </div>
            </div><!--end card-->
          @endforeach
       @endforeach
    </div>
</section>
@endsection
@section('pagesjs')
<script src="/js/slick.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/cartadd.js"></script>
<script src="/js/modal-order.js"></script>
@endsection
