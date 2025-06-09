<?php

use Illuminate\Support\Facades\Route;

//LLLAMA A LOS CONTROLADOR
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CreateEmpleadoController;
use App\Models\Post;
use App\Models\Usuario;
use App\Http\Controllers\UsuarioController;
use App\Mail\EnviarCredenciales;
use Illuminate\Support\Facades\Mail;

//PRIMO LA RUTA
Route::get('/', [HomeController::class,'index']);
//TITULO DE LA BASE DE DATOS
Route::get('/posts',[PostController::class, 'index']);
//AQUI AGREGAMOS UNA RUTA PARA RECIBIR LOS DATOS DEL FORMULARIO CREATE
Route::post('/posts',[PostController::class, 'store']);
//MOSTRAR CONTENIDO
Route::get('/posts/create',[PostController::class, 'create']);
//CREAR FORMULARIO DE REGISTRO BASE DE DATOS
Route::get('/posts/{post}', [PostController::class, 'show']);

//Route::get('/posts/{post}',function($post){
    //return "el id del post es:{$post}";
//});

//TAREA DE USUARIO
Route::get('/usuario',[UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/usuario/create',[UsuarioController::class, 'create']);
Route::post('/crearUsuario', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/usuario/{usuario}',[UsuarioController::class, 'show']);
Route::get('/usuario/{usuario}/edit',[UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('/usuario/{usuario}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::delete('/usuario/{usuario}/delete', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
/*Route::get('/correo', function () {
    $usuario = (object)[
        'nombre' => 'Ariana',
        'email' => 'kendermusicoficial@gmail.com'
    ];
    $password = 'clave12345';

    Mail::to($usuario->email)->send(new EnviarCredenciales($usuario, $password));

    return 'Correo de prueba enviado correctamente.';
});*/


//WEB.PHP
Route::get('/web',[CategoriaController::class, 'index']);
Route::get('/web/create',[CategoriaController::class, 'create']);
Route::get('/web/create/store',[CategoriaController::class, 'store']);


//Route::get('/post/index',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);



Route::get('prueba', function () {
    //return "LOCOS";
    $post= new Post;

    //AGREGAR
    $post->title='titulo de la prueba3';
    $post->contenido='contenido de la prueba3';
    $post->categoria='categoria de la prueba3';
    $post->save();
    return $post;


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
