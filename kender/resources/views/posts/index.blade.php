<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button><a href="/posts/create">CREATE</a></button>
    @foreach ($posts as $post)
    <a href="/posts/{{$post->id}}"> 
        <ul>
            <li>{{$post->title}}</li>
        </ul>
    </a>   
    @endforeach
</body>
</html>