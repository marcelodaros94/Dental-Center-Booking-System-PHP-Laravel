<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mis Reservas</title>
</head>

<body>
  <p>{{ $counter }} consultando ahora mismo</p>
  <h1>Mis Reservas</h1>      
  @foreach ($bookings as $booking)
      <li>
        {{ $booking->date }}
      </li>
  @endforeach
</body>

</html> 