<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de paquetes</title>
</head>
<body>
    <h1>Registrar paquete</h1>
    <form action="{{route('packages.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="">Ingrese el codigo</label><br>
        <input type="text" name="code"><br>
        <label for="">Ingrese la descripción</label><br>
        <input type="text" name="description"><br>
        <label for="">Ingrese el destinatario</label><br>
        <input type="text" name="addressee"><br>
        <label for="">Ingrese la dirección</label><br>
        <input type="text" name="addressPackage"><br>
        <label for="">Ingrese el camionero</label><br>
        <select name="trucker_id" id="">
            <option value="" hidden>Selecciona</option>
            @foreach ($truckers as $trucker)
                <option value="{{$trucker->id}}">{{$trucker->id}}-{{$trucker->name}}</option>
            @endforeach
        </select><br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>