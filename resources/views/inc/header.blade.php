@section('header')
<header>
	<!--- Navbar --->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand text-white" href="{{ route('index') }}"><i class="fas fa-laptop-house fa-lg mr-2"></i>COMFORT</a>
			<button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
				<!--<span><i class="fas fa-bars"></i></span>-->
				<div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
			</button>
			<div class="collapse navbar-collapse" id="nvbCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item pl-1 {{ Request::is('/') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('index') }}"><i class="fa fa-home fa-fw mr-1"></i>Главная<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item pl-1 {{ Request::is('paydel') ? 'active' : '' }}">
							<a class="nav-link" href="{{ route('paydel') }}"><i class="fas fa-money-bill-alt fa-fw mr-1"></i>Оплата и доставка</a>
					</li>
					<li class="nav-item pl-1 {{ Request::is('contacts') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('contacts') }}"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Контакты</a>
					</li>
					<li class="nav-item pl-1 {{ Request::is('aboutus') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('aboutus') }}"><i class="fa fa-info-circle fa-fw mr-1"></i>О нас</a>
					</li>
					@guest
					@if(Route::has('register'))
					<li class="nav-item pl-1">
						<a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus fa-fw mr-1"></i>Регистрация</a>
					</li>
					@endif
					<li class="nav-item pl-1">
						<a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in fa-fw mr-1"></i>Войти</a>
					</li>
					@else
					<li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right logout" aria-labelledby="navbarDropdown">
								@if(Auth::user()->role)
							  	<a class="dropdown-item" href="{{ route('admin_panel') }}">Панель администратора</a>
								@endif
							  	<a class="dropdown-item" href="{{ route('user_panel') }}">Личный кабинет</a>
							  	<!--<a class="dropdown-item" href="#">Настройки</a>-->
                  <a id="logout-link" class="dropdown-item" href="#">Выйти</a>
                  <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                  </form>
              </div>
          </li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	<!--# Navbar #-->
	</header>
