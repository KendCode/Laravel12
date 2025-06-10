<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- primera forma --}}
    {{-- <h1> "hola SHOW <?php //echo $post; ?>" </h1> --}}

    {{-- <h1>PAGINA DE SHOW {{$post}}</h1> --}}

    <h1><center>{{$post->title}}</center></h1>
    <h3><u>{{$post->contenido}}</u></h3>

    <button><a href="/posts">VOLVER ATRAS</a></button>
    <button onclick="window.open('{{route('post.export.Pdf',$post->id)}}')">DESCARGAR PDF</button>

</body>
</html>