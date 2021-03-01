@extends('layouts.app')

@section('title-admin', 'Регистрация')

@section('content')
<section class="auth-bg">
  <div class="login-form">
      <form action="{{ route('register') }}" method="POST">
        @csrf
      	 <div class="avatar">
      			<img src="/img/svg/laptop-house-solid.svg" alt="Avatar">
      		</div>
            <h2 class="text-center">Create Account</h2>

          <div class="form-group">
            	<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autocomplete="name" autofocus>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

          </div>
    		   <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

           </div>
    		   <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

           </div>
    		   <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

           </div>
           <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
           </div>
      </form>
      <h6 class="text-center">Already have an account? <a href="{{ route('login') }}">Login here!</a></h6>
  </div>
</section>
@endsection
