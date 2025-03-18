<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina principal desde elas controlador";
    }
}
