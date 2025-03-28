<?php

use Illuminate\Support\Facades\Route;

//LLLAMA A LOS CONTROLADOR
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CreateEmpleadoController;

//PRIMO LA RUTA
Route::get('/', [HomeController::class,'index']);

Route::get('/posts',[PostController::class, 'index']);

Route::get('/posts/create',[PostController::class, 'create']);

//WEB.PHP
Route::get('/web',[CategoriaController::class, 'index']);
Route::get('/web/create',[CategoriaController::class, 'create']);
Route::get('/web/create/store',[CategoriaController::class, 'store']);


Route::get('/post/index',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);

/*Route::get('/', function () {
    //return view('welcome');
    return "pagina principal";
});*/
