<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar perfil</title>
</head>
<body>
    <h1>Detalle del Camionero</h1>
    <p>DNI: {{ $truck_driver->dni }}</p>
    <p>Nombre: {{ $truck_driver->nombre }}</p>
    <p>Ciudad: {{ $truck_driver->ciudad }}</p>
    <p>Teléfono: {{ $truck_driver->telefono }}</p>
    <p>Dirección: {{ $truck_driver->direccion }}</p>
    <p>Salario: {{ $truck_driver->salario }}</p>
    <a href="{{ route('trucks.index') }}">Volver</a>
</body>
</html>
