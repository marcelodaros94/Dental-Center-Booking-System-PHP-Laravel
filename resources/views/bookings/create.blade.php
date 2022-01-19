@extends('layouts.app')

@section('title', 'Contact page')

@section('content')
<p>{{ $counter }} reservando ahora mismo</p>
<h1>Haz tu reserva</h1>
<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div>
        <input type="date" name="date">
    </div>
    <div>
        <select name="hour_id">            
            @foreach ($hours as $hour)
                <option value="{{ $hour->id }}">{{ $hour->range }}</option>
            @endforeach
        </select>
    </div>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
@endsection 