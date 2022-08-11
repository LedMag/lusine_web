@extends('main')

@section('login')
{{ __('login') }}
@endsection

@section('content')

<form method="POST" action="{{ route("admin.login.post", app()->getLocale() ) }}" class="login">
  @csrf
  <label for="email">{{ __('email') }}</label>
  <input id="email" type="email" name="email" class="login__email">

  <label for="pass">{{ __('password') }}</label>
  <input id="pass" type="password" name="password" class="login__password">

  <button class="login__btn" type="submit">{{ __('login') }}</button>
</form>
@error('email')
      <div class="error__name">{{ __($message) }}</div>
@enderror

    
@endsection