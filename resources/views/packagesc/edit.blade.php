<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de paquetes</title>
</head>
<body>
    <h1>Editar paquete</h1>
    <form action="{{route('package.update',$package)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Ingrese el codigo</label><br>
        <input type="text" name="code" value="{{old('code',$package->code)}}"><br>
        <label for="">Ingrese la descripción</label><br>
        <input type="text" name="description" value="{{old('description',$package->description)}}"><br>
        <label for="">Ingrese el destinatario</label><br>
        <input type="text" name="addressee" value="{{old('addressee',$package->addressee)}}"><br>
        <label for="">Ingrese la dirección</label><br>
        <input type="text" name="addressPackage" value="{{old('addressPackage',$package->addressPackage)}}"><br>
        <label for="">Ingrese el camionero</label><br>
        <select name="trucker_id" id="">
            <option value="" hidden>Selecciona</option>
            @foreach ($packages as $package)
                <option value="{{old('trucker_id',$package->trucker_id)}}">{{old('code',$package->code)}}-{{old('description',$package->description)}}</option>
            @endforeach
        </select><br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>