<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return "Pagina principal";
    }
    public function create(){
        return "Registro de productos";
    }
    public function store(){
        return "Tienda";
    }
}
