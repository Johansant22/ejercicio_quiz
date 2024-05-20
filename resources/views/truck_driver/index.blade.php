<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenida</title>
</head>
<body>


    <h1>Bienvenido, crea tu perfil de camionero</h1>

    <h1>Lista de Camioneros</h1>
    <a href="{{ route('trucks.create') }}">Crear nuevo camionero</a>
    <ul>
        @foreach ($truck_drivers as $truck_driver)
            <li>
                {{ $truck_driver->nombre }}
                <a href="{{ route('trucks.show', $truck_driver) }}">Ver</a>
                <a href="{{ route('trucks.edit', $truck_driver) }}">Editar</a>
                <form action="{{ route('trucks.destroy', $truck_driver) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>
