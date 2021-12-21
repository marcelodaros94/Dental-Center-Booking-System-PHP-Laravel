<form action="{{ route('reserva.store') }}" method="POST">
    @csrf
    <input type="date" name="fecha"/><br>
    @error('fecha')
        <small>{{ $message }}</small><br>
    @enderror
    <select name="hora">
        @foreach ($horas as $hora)
        <option value="{{ $hora['id'] }}">{{ $hora['rango'] }}</option>
        @endforeach
    </select><br>
    @error('hora')
        <small>{{ $message }}</small><br>
    @enderror
    <input type="submit" value="Reservar">
</form>