<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar camioneros</title>
</head>
<body>
    <h1>Registro de camioneros</h1>
    <form action="{{route('truckers.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Ingrese su DNI</label><br>
        <input type="text" name="dni"><br>
        <label for="">Ingrese su nombre</label><br>
        <input type="text" name="name"><br>
        <label for="">Ingrese su teléfono</label><br>
        <input type="number" name="phone"><br>
        <label for="">Ingrese su dirección</label><br>
        <input type="text" name="address"><br>
        <label for="">Ingrese su email</label><br>
        <input type="email" name="email"><br>
        <label for="">Ingrese su salario</label><br>
        <input type="number" name="salary"><br>
        <label for="">Población a la que pertenece</label><br>
        <input type="text" name="population"><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>