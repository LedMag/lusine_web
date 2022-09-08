@extends('main')

@section('registration')
{{ __('registration') }}
@endsection

@section('content')

<form method="POST" action="{{ route("admin.registration.post", app()->getLocale() ) }}" class="login">
  @csrf
  <label for="name">{{ __('name') }}</label>
  <input id="name" type="text" name="name" class="login__name">
  @error('name')
      <div class="error__name">{{ __($message) }}</div>
  @enderror

  <label for="email">{{ __('email') }}</label>
  <input id="email" type="email" name="email" class="login__email">
  @error('email')
      <div class="error__email">{{ __($message) }}</div>
  @enderror

  <label for="password">{{ __('password') }}</label>
  <input id="password" type="password" name="password" class="login__password">
  {{-- <input id="password" type="password" class="login__password"> --}}
  @error('password')
      <div class="error__password">{{ __($message) }}</div>
  @enderror

  <button class="login__btn" type="submit">{{ __('registration') }}</button>
</form>
    
@endsection