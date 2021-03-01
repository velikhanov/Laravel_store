@extends('layouts.app')

@section('title-admin', 'Авторизация')

@section('content')
<section class="auth-bg">
  <div class="login-form">
      <form action="{{ route('login') }}" method="POST">
        @csrf
      	 <div class="avatar">
      			<img src="/img/svg/laptop-house-solid.svg" alt="Avatar">
      		</div>
            <h2 class="text-center">Member Login</h2>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

          <div class="form-group">
            	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-Mail Address" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
    		   <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
           </div>
           <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
           </div>
    		   <div class="bottom-action clearfix">
                <label class="float-left form-check-label"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="float-right">Forgot Password?</a>
                @endif
            </div>
      </form>
      <h6 class="text-center">Don't have an account? <a href="{{ route('register') }}">Sign up here!</a></h6>
  </div>
</section>
@endsection
