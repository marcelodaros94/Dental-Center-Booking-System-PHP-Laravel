@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <input name="name" placeholder="name" value="" required>
    @if($errors->has('name'))
    <span>{{ $errors->first('name') }}</span>
    @endif
    <input name="email" placeholder="email" value="" required>
    @if($errors->has('email'))
    <span>{{ $errors->first('email') }}</span>
    @endif
    <input name="password" placeholder="password" type="password" value="" required>
    @if($errors->has('password'))
    <span>{{ $errors->first('password') }}</span>
    @endif
    <input name="password_confirmation" placeholder="Repite password" type="password"  value="" required>
    <button type="submit">
        Registrarse
    </button>
</form>
@endsection('content')