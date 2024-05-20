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
    <form action="{{ route('trucks.update',$truck_driver) }}" method="POST">

        @csrf
        @method('put')

        <label>
            dni:
            <br>
            <input type="text" name="dni" value="{{ old('dni',$truck_driver->dni) }}">
        </label>
        <br>
        <label>
            Ciudad:
            <br>
            <input type="text" name="poblacion" value="{{  old('Ciudad',$truck_driver->poblacion) }}">
        </label>
        <br>

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{  old('Nombre',$truck_driver->name) }}">
        </label>
        <br>

        <label>
            Telefono:
            <br>
            <input type="text" name="tfno" value="{{  old('Telefono',$truck_driver->tfno) }}">
        </label>
        <br>

        <label>
            Dirección:
            <br>
            <input type="text" name="direccion" value="{{  old('Direccion',$truck_driver->direccion) }}">
        </label>
        <br>

        <label>
            Salario:
            <br>
            <input type="text" name="salario" value="{{ old('Salario',$truck_driver->salario) }}">
        </label>
        <br>

        <button type="submit">Actualizar curso</button>
    </form>

</body>
</html>
