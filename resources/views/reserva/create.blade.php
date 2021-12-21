<form action="{{ route('reserva.store') }}" method="POST">
    @csrf
    <input type="date" name="date"/>
    <input type="submit" value="Reservar">
</form>