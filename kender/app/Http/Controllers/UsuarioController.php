<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuario = Usuario:: all();
        // $posts;
        return view('usuario.index',compact('usuario'));
    }
    public function create(){
        return view('usuario.create');
    }
    public function show($usuario){
        //return "hola pagina modifico posts";
        $usuario=Usuario::find($usuario);
        return view('usuario.show',['usuario'=>$usuario]);
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u', 'max:50'],
            'ap_paterno' => ['required', 'regex:/^[\pL\s\-]+$/u', 'max:50'],
            'ap_materno' => ['required', 'regex:/^[\pL\s\-]+$/u', 'max:50'],
            'fecha_nacimiento' => ['required', 'date', 'before:today'],
            'estado' => ['required', 'in:1,0'],
            'rol' => ['required', 'in:admin,encarg,usu'],
            'genero' => ['required', 'in:M,F'],
            'celular' => ['required', 'digits:8', 'numeric'],
            'email' => ['required', 'email', 'max:100'],
            'hobbies' => ['nullable', 'string', 'max:255'],
        ]);// otros campos...
         // Crear y guardar el usuario
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->ap_paterno = $request->ap_paterno;
        $usuario->ap_materno = $request->ap_materno;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->hobbies = $request->hobbies;
        $usuario->genero = $request->genero;
        $usuario->celular = $request->celular;
        $usuario->rol = $request->rol;
        $usuario->estado = $request->estado;
        $usuario->save();

    return redirect()->back()->with('success', 'Usuario creado exitosamente.');
    }
}
