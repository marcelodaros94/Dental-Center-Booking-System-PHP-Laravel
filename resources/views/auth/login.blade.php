@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <input name="email" placeholder="email" value="" required>
    @if($errors->has('email'))
    <span>{{ $errors->first('email') }}</span>
    @endif
    <input name="password" placeholder="password" type="password" value="" required>
    @if($errors->has('password'))
    <span>{{ $errors->first('password') }}</span>
    @endif
    <button type="submit">
       Ingresar
    </button>
</form>
@endsection('content')