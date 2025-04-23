<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
    <a href="/posts/{{$post->id}}"> 
        <ul>
            <li>AQUI VA EL CONTENIDO DE TITULO {{$post->title}}</li>
        </ul>
    </a>   
    @endforeach
</body>
</html>