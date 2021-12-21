<form action="{{ route('reserva.store') }}" method="POST">
    @csrf
    <input type="date" name="date"/>
    <select name="hora">
        @foreach ($horas as $hora)
        <option value="{{ $hora['id'] }}">{{ $hora['rango'] }}</option>
        @endforeach
    </select>
    <input type="submit" value="Reservar">
</form>