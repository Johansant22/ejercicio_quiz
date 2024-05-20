<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar perfil camionero</h1>
    <form action="{{ route('trucks.update', $truck_driver) }}" method="POST">
        @csrf
        @method('PUT')
        <label>DNI: <br><input type="text" name="dni" value="{{ old('dni', $truck_driver->dni) }}"></label><br>
        <label>Ciudad: <br><input type="text" name="ciudad" value="{{ old('ciudad', $truck_driver->poblacion) }}"></label><br>
        <label>Nombre: <br><input type="text" name="nombre" value="{{ old('nombre', $truck_driver->nombre) }}"></label><br>
        <label>Teléfono: <br><input type="text" name="telefono" value="{{ old('telefono', $truck_driver->telefono) }}"></label><br>
        <label>Dirección: <br><input type="text" name="direccion" value="{{ old('direccion', $truck_driver->direccion) }}"></label><br>
        <label>Salario: <br><input type="text" name="salario" value="{{ old('salario', $truck_driver->salario) }}"></label><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
