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
    
    @foreach ($truck_drivers as $truck_driver)

    <tr>
        <br>
        <td>{{$truck_driver->dni}}</td>
        <td>{{$truck_driver->ciudad}}</td>
        <td>{{$truck_driver->nombre}}</td>
        <td>{{$truck_driver->telefono}}</td>
        <td>{{$truck_driver->direccion}}</td>
        <td>{{$truck_driver->salario}}</td>
        <td> <a  href="{{ route('trucks.show', $truck_driver->id)}}">Mostrar</a></td>
        <td> <a  href="{{ route('trucks.edit', $truck_driver->id)}}">Editar</a></td>

        <td>
            <form action="{{ route('trucks.destroy',$truck_driver->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>
        </td>

    </tr>

    @endforeach

</body>
</html>
