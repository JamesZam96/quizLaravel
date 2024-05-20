<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camiones</title>
</head>
<body>
    <h1>Camiones</h1>
    @foreach ($trucks as $truck)
        <tr>
        <td>{{$truck->power}}</td>
        <td>{{$truck->plate}}</td>
        <td>{{$truck->model}}</td>
        <td>{{$truck->type}}</td>
        <td><a href="{{route('truck.show',$truck->id)}}">Mostrar</a></td>
        <td><a href="{{route('truck.edit',$truck->id)}}">Editar</a></td>
        <td>
            <form action="{{route('truck.destroy',$truck->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
        </tr>
    @endforeach
</body>
</html>