<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camioneros</title>
</head>
<body>
    <h1>Camioneros</h1>
    @foreach ($truckers as $trucker)
        <tr>
        <td>{{$trucker->dni}}</td>
        <td>{{$trucker->name}}</td>
        <td>{{$trucker->phone}}</td>
        <td>{{$trucker->address}}</td>
        <td>{{$trucker->email}}</td>
        <td>{{$trucker->salary}}</td>
        <td>{{$trucker->population}}</td>
        <td><a href="{{route('trucker.show',$trucker->id)}}">Mostrar</a></td>
        <td><a href="{{route('trucker.edit',$trucker->id)}}">Editar</a></td>
        <td>
            <form action="{{route('trucker.destroy',$trucker->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
        </tr>
    @endforeach
</body>
</html>