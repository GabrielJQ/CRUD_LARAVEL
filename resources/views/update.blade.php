<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Actualizar datos de videojuegos</h1>
    <p><a href="{{route ('games')}}">Lista de juegos </a></p>

    <form action="{{route ('updateVideogame')}}" method="POST"> 
    
        @csrf
        <input type="hidden" name="idjueguito" value="{{$game->id}}">
         

        <input type="text" placeholder="nombre de videojuego" name="nomre_jueguito" value="{{$game->name}}">
        @error('nombre_jueguito')
        {{$message}}
        @enderror
        <select name="categoria_id" id="">
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}"  @if($categoria->id == $game->category_id) selected @endif >{{$categoria->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>