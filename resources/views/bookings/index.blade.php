@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
  <p>{{ $counter }} conectados ahora mismo</p>
  <h1>Mis Reservas</h1>      
  @foreach ($bookings as $booking)
      <li>
        {{ $booking->date }}
      </li>
  @endforeach
@endsection 