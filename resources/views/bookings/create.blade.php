@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
<h1>Haz tu reserva</h1>
<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div>
        <select name="hour">            
            @foreach ($hours as $hour)
                <option value="{{ $hour->id }}">{{ $hour->range }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <input type="date" name="date">
    </div>
    @error('date')
        <div>{{ $message }}</div>
    @enderror
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
@endsection 