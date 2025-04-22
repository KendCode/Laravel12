<?php

use Illuminate\Support\Facades\Route;

//LLLAMA A LOS CONTROLADOR
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CreateEmpleadoController;
use App\Models\Post;

//PRIMO LA RUTA
Route::get('/', [HomeController::class,'index']);

Route::get('/posts',[PostController::class, 'index']);

Route::get('/posts/create',[PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

//Route::get('/posts/{post}',function($post){
    //return "el id del post es:{$post}";
//});

//WEB.PHP
Route::get('/web',[CategoriaController::class, 'index']);
Route::get('/web/create',[CategoriaController::class, 'create']);
Route::get('/web/create/store',[CategoriaController::class, 'store']);


Route::get('/post/index',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);



Route::get('prueba', function () {
    //return "LOCOS";
    $post= new Post;

    //AGREGAR
    //$post->title='titulo de la prueba7';
    //$post->contenido='contenido de la prueba7';
    //$post->categoria='categoria de la prueba7';
    //$post->save();
    //return $post;


    //actualizar
    //$post=Post::find(3);
    //$post->title='titulo de la prueba 3';
    //$post->contenido='contenido de la prueba 2';
    //$post->categoria='categoria de la prueba 2';
    //$post->save();
    //return $post;

    //eliminar
    //$post=Post::find(2);
    //$post->delete();

    //LISTAR
    //$posts=Post::all();
    //return $posts;
});

/*Route::get('/', function () {
    //return view('welcome');
    return "pagina principal";
});*/
