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
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        $("[name=date]").change(function(){
            $.ajax({
                type: 'POST',
                url: "{{ url('hours/available') }}",
                data: {
                    _token: '{{csrf_token()}}',
                    date: this.value
                },
                dataType: 'json',
                success: function (data) {
                    $("[name=hour_id]").html("");
                    for (x of data) {
                        $("[name=hour_id]").append('<option value="'+x.id+'">'+x.range+'</option>');
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    });
</script>
@endsection 