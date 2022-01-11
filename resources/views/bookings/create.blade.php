@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
<h1>Haz tu reserva</h1>
<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div>
        <select name="hour"></select>
    </div>
    <div>
        <input type="date" name="date">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
@endsection 