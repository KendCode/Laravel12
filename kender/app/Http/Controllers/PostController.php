<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Hola posts desde controlador";
    }
    public function create(){
        return "Hola posts desde controlador CREATE";
    }
}
