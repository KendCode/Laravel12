<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCredenciales;



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

        $passwordPlain = Str::random(10);
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
        $usuario->password = Hash::make($passwordPlain); // Encriptar
        $usuario->save();

        Mail::to($usuario->email)->send(new EnviarCredenciales($usuario, $passwordPlain));

        return redirect()->route('usuario.index')->with('success', 'Usuario creado y notificado por correo.');

        //return redirect()->back()->with('success', 'Usuario creado y contraseña enviada por correo.');
    }

    public function edit($usuario){
        $usuario=Usuario::find($usuario);
        return view('usuario.edit',['usuario'=>$usuario]);
    }
    public function update(Request $request, $usuario)
{
    // Validar los datos del formulario
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
    ]);

    // Buscar al usuario por ID
    $usuario = Usuario::findOrFail($usuario);

    // Llenar el modelo con los nuevos datos
    $usuario->fill($request->all());

    // Verificar si hubo cambios
        if ($usuario->isDirty()) {
            $usuario->save();
            return redirect()->route('usuario.edit', $usuario->id)
                         ->with('success', '¡Usuario modificado exitosamente!');
        }else {
            return redirect()->route('usuario.edit', $usuario->id)
                         ->with('info', 'No se realizó ningún cambio.');
        }
    }
    public function destroy($usuario){
        $usuario=Usuario::find($usuario);
        $usuario->delete();
        return redirect()->route('usuario.index')->with('success', 'Usuario eliminado exitosamente.');
    }

    
}
