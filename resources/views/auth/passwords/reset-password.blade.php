@extends('layouts.app')

@section('title-admin', 'Восстановление пароля')

@section('content')
<section class="auth-bg">
  <div class="login-form">

      <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input name="token" type="hidden" value="{{ $request->route('token') }}">
      	 <div class="avatar">
      			<img src="/img/svg/laptop-house-solid.svg" alt="Avatar">
      		</div>
            <h2 class="text-center">Reset password</h2>

          <div class="form-group">
            	<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $request->email }}" readonly>

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
              <button id="reset" type="submit" class="btn btn-primary btn-lg btn-block" name="reset">Update</button>
           </div>
      </form>
      <h6 class="text-center">Don't have an account? <a href="{{ route('register') }}">Sign up here!</a></h6>
  </div>
</section>
@endsection
