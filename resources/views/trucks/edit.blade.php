<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de camiones</title>
</head>
<body>
    <h1>Editar camion</h1>
    <form action="{{route('truck.update',$truck)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Ingrese la potencia</label><br>
        <input type="text" name="power" value="{{old('power',$truck->power)}}"><br>
        <label for="">Ingrese la matricula</label><br>
        <input type="text" name="plate" value="{{old('plate',$truck->plate)}}"><br>
        <label for="">Ingrese el modelo</label><br>
        <input type="text" name="model" value="{{old('model',$truck->model)}}"><br>
        <label for="">Ingrese el tipo</label><br>
        <input type="text" name="type" value="{{old('type',$truck->type)}}"><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>