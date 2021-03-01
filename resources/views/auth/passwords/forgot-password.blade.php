@extends('layouts.app')

@section('title-admin', 'Восстановление пароля')

@section('content')
<section class="auth-bg">
  <div class="login-form">

      <form action="{{ route('password.request') }}" method="POST">
        @csrf
      	 <div class="avatar">
      			<img src="/img/svg/laptop-house-solid.svg" alt="Avatar">
      		</div>
            <h2 class="text-center">Reset password</h2>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

          <div class="form-group">
            	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

          </div>
           <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Send Password Reset Link</button>
           </div>
      </form>
      <h6 class="text-center">Don't have an account? <a href="{{ route('register') }}">Sign up here!</a></h6>
  </div>
</section>
@endsection
