<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Datos del Usuario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
        <div class="container mt-5">
            @if (session('success'))
        <div class="alert alert-success m-3">
            {{ session('success') }}
        </div>
            @endif
    
         @if (session('info'))
        <div class="alert alert-info m-3">
            {{ session('info') }}
        </div>
            @endif
    
        @if ($errors->any())
        <div class="alert alert-danger m-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            <div class="card shadow-lg">
                <div class="card-header bg-warning text-dark text-center">
                    <h2>Editar Usuario</h2>
            </div>
            <form action="{{ route('usuario.update', $usuario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label"><strong>Nombre:</strong></label>
                        <input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Apellido paterno:</strong></label>
                        <input type="text" name="ap_paterno" class="form-control" value="{{ $usuario->ap_paterno }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Apellido materno:</strong></label>
                        <input type="text" name="ap_materno" class="form-control" value="{{ $usuario->ap_materno }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Estado:</strong></label>
                        <select name="estado" class="form-control">
                            <option value="1" {{ $usuario->estado == 1 ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ $usuario->estado == 0 ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Correo:</strong></label>
                        <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Fecha de nacimiento:</strong></label>
                        <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $usuario->fecha_nacimiento }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Hobbies:</strong></label>
                        <textarea name="hobbies" class="form-control">{{ $usuario->hobbies }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Género:</strong></label>
                        <select name="genero" class="form-control">
                            <option value="M" {{ $usuario->genero == 'M' ? 'selected' : '' }}>Masculino</option>
                            <option value="F" {{ $usuario->genero == 'F' ? 'selected' : '' }}>Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Nro Celular:</strong></label>
                        <input type="text" name="celular" class="form-control" value="{{ $usuario->celular }}">
                    </div>
                    <div class="mb-3">
                        <label for="rol" class="form-label"><strong>Rol:</strong></label>
                            <select id="rol" name="rol" class="form-select @error('rol') is-invalid @enderror" required>
                                <option disabled {{ old('rol', $usuario->rol) == '' ? 'selected' : '' }}>Seleccione rol</option>
                                <option value="admin" {{ old('rol', $usuario->rol) == 'admin' ? 'selected' : '' }}>Administrador</option>
                                <option value="encarg" {{ old('rol', $usuario->rol) == 'encarg' ? 'selected' : '' }}>Encargado</option>
                                <option value="usu" {{ old('rol', $usuario->rol) == 'usu' ? 'selected' : '' }}>Usuario</option>
                            </select>
                            @error('rol')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="/usuario" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
