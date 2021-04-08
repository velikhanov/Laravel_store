@section('catalog')
<nav class="navbar second">
  <div class="container">
      <div class='cssmenu'>
          <ul>
             <li class='has-sub'><a href="#"><span>Каталог</span></a>
                <ul>
                  @foreach( $catalog as $item )
                   <li class='has-sub'><a href="#"><img class="catalogimg" src="@isset($item->img){{Storage::url('categories/'.$item->img)}}@else /img/categories/kitchen-utensils.png @endisset"><span class="cat-text">{{ $item->name }}</span></a>
                      <ul>
                        @foreach( $item->children as $subitem )
                         <li><a href='/{{ $item->url }}/{{ $subitem->url }}'><img class="catalogimg" src="@isset($subitem->img){{Storage::url('categories/'.$subitem->img)}}@else /img/categories/kitchen-utensils.png @endisset"><span class="cat-text">{{ $subitem->name }}</span></a></li>
                        @endforeach
                      </ul>
                   </li>
                   @endforeach
                </ul>
             </li>
          </ul>
      </div>
            <!-- <form class="form-inline">
               <input class="form-control mr-sm-2" type="search" placeholder="Поиск по каталогу" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
               <button class="btn btn-outline-success ml-2" type="submit"><i class="fas fa-shopping-basket"></i>Корзина</button>
             </form>-->
      <a href="{{ Route('basket') }}" class="basket-button">
         <span class="prodcount">{{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}</span><i class="fas fa-shopping-basket"></i><span class="basket-text">Корзина</span>
      </a>
  </div>
</nav>
