<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <h2>Crea un perfil de camionero</h2>

    <form action="{{ route('trucks.store')}}" method="POST" enctype="multipart/form-data" >

        @csrf

        <label>
            dni:
            <br>
            <input type="text" name="dni">
        </label>
        <br>
        <label>
            Ciudad:
            <br>
            <input type="text" name="ciudad">
        </label>
        <br>

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Telefono:
            <br>
            <input type="text" name="tfno">
        </label>
        <br>

        <label>
            Dirección:
            <br>
            <input type="text" name="direccion">
        </label>
        <br>

        <label>
            Salario:
            <br>
            <input type="text" name="salario">
        </label>
        <br>

        <button type="submit">Enviar Formulario:</button>


    </form>

</body>
</html>
