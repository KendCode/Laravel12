<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR USUARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container p-5 my-5 border rounded shadow">
    <!-- Alerta de éxito -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Alerta de errores -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container my-5 d-flex align-items-center justify-content-between">
        <h1 class="mb-4 text-primary">Crear Usuario</h1>
        <a href="/usuario" class="btn btn-primary">Lista de Usuarios</a>
    </div>

    <form method="POST" action="{{ route('usuario.store') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="nombre" class="form-label fw-bold">Nombre:</label>
                <input type="text" id="nombre" name="nombre"
                       class="form-control @error('nombre') is-invalid @enderror"
                       value="{{ old('nombre') }}" required maxlength="50"
                       pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s\-]+" placeholder="Ingrese nombre">
                @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-4">
                <label for="ap_paterno" class="form-label fw-bold">Apellido paterno:</label>
                <input type="text" id="ap_paterno" name="ap_paterno"
                       class="form-control @error('ap_paterno') is-invalid @enderror"
                       value="{{ old('ap_paterno') }}" required maxlength="50"
                       pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s\-]+" placeholder="Ingrese apellido paterno">
                @error('ap_paterno')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-4">
                <label for="ap_materno" class="form-label fw-bold">Apellido materno:</label>
                <input type="text" id="ap_materno" name="ap_materno"
                       class="form-control @error('ap_materno') is-invalid @enderror"
                       value="{{ old('ap_materno') }}" required maxlength="50"
                       pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s\-]+" placeholder="Ingrese apellido materno">
                @error('ap_materno')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="fecha_nacimiento" class="form-label fw-bold">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
                       class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                       value="{{ old('fecha_nacimiento') }}" required max="{{ date('Y-m-d') }}">
                @error('fecha_nacimiento')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-4">
                <label for="estado" class="form-label fw-bold">Estado:</label>
                <select id="estado" name="estado"
                        class="form-select @error('estado') is-invalid @enderror" required>
                    <option disabled selected>Seleccione un estado</option>
                    <option value="1" {{ old('estado') == '1' ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ old('estado') == '0' ? 'selected' : '' }}>Inactivo</option>
                </select>
                @error('estado')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-4">
                <label for="rol" class="form-label fw-bold">Rol:</label>
                <select id="rol" name="rol"
                        class="form-select @error('rol') is-invalid @enderror" required>
                    <option disabled selected>Seleccione rol</option>
                    <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Administrador</option>
                    <option value="encarg" {{ old('rol') == 'encarg' ? 'selected' : '' }}>Encargado</option>
                    <option value="usu" {{ old('rol') == 'usu' ? 'selected' : '' }}>Usuario</option>
                </select>
                @error('rol')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="genero" class="form-label fw-bold">Género:</label>
                <select id="genero" name="genero"
                        class="form-select @error('genero') is-invalid @enderror" required>
                    <option disabled selected>Seleccione género</option>
                    <option value="M" {{ old('genero') == 'M' ? 'selected' : '' }}>Masculino</option>
                    <option value="F" {{ old('genero') == 'F' ? 'selected' : '' }}>Femenino</option>
                </select>
                @error('genero')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-4">
                <label for="celular" class="form-label fw-bold">Celular:</label>
                <input type="tel" id="celular" name="celular"
                       class="form-control @error('celular') is-invalid @enderror"
                       value="{{ old('celular') }}" required pattern="\d{8}"
                       maxlength="8" minlength="8" placeholder="Ej: 76543210">
                @error('celular')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="col-md-4">
                <label for="email" class="form-label fw-bold">Correo electrónico:</label>
                <input type="email" id="email" name="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" required maxlength="100"
                       placeholder="Ej: usuario@correo.com">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="hobbies" class="form-label fw-bold">Hobbies:</label>
            <textarea id="hobbies" name="hobbies"
                      class="form-control @error('hobbies') is-invalid @enderror"
                      rows="3" maxlength="255"
                      placeholder="Describa sus pasatiempos...">{{ old('hobbies') }}</textarea>
            @error('hobbies')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success">Crear</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
