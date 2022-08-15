@extends('main')

@section('name')
{{ __('catalog') }}
@endsection

@section('content')

<form action="#" class="catalog">
  <label for="image"> {{__('image')}} </label>
  <input name="image" type="file">

  <label for="name"> {{__('name')}} </label>
  <input name="name" type="text">

  <label for="category"> {{__('category')}} </label>
  <input name="category" type="text">

  <label for="description"> {{__('description')}} </label>
  <input name="description" type="text">
</form>
    
@endsection