<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de camionero</title>
</head>
<body>
    <h1>Editar camionero</h1>
    <form action="{{route('trucker.update',$trucker)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Ingrese su DNI</label><br>
        <input type="text" name="dni" value="{{old('dni',$trucker->dni)}}"><br>
        <label for="">Ingrese su nombre</label><br>
        <input type="text" name="name" value="{{old('name',$trucker->name)}}"><br>
        <label for="">Ingrese su teléfono</label><br>
        <input type="number" name="phone" value="{{old('phone',$trucker->phone)}}"><br>
        <label for="">Ingrese su dirección</label><br>
        <input type="text" name="address" value="{{old('address',$trucker->address)}}"><br>
        <label for="">Ingrese su email</label><br>
        <input type="email" name="email" value="{{old('email',$trucker->email)}}"><br>
        <label for="">Ingrese su salario</label><br>
        <input type="number" name="salary" value="{{old('salary',$trucker->salary)}}"><br>
        <label for="">Población a la que pertenece</label><br>
        <input type="text" name="population" value="{{old('population',$trucker->population)}}"><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>