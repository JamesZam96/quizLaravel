<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar camiones</title>
</head>
<body>
    <h1>Registro de camiones</h1>
    <form action="{{route('trucks.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Ingrese la potencia</label><br>
        <input type="text" name="power"><br>
        <label for="">Ingrese la matricula</label><br>
        <input type="text" name="plate"><br>
        <label for="">Ingrese el modelo</label><br>
        <input type="text" name="model"><br>
        <label for="">Ingrese el tipo</label><br>
        <input type="text" name="type"><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>