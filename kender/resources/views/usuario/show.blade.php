<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h2>Datos de Usuario</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Nombre:</strong>
                    <p class="form-control">{{ $usuario->nombre }}</p>
                </div>
                <div class="mb-3">
                    <strong>Apellido paterno:</strong>
                    <p class="form-control">{{ $usuario->ap_paterno }}</p>
                </div>
                <div class="mb-3">
                    <strong>Apellido materno:</strong>
                    <p class="form-control">{{ $usuario->ap_materno }}</p>
                </div>
                <div class="mb-3">
                    <strong>Estado:</strong>
                    <p class="form-control">{{ $usuario->estado == 1 ? 'Activo' : 'Inactivo' }}</p>
                </div>
                <div class="mb-3">
                    <strong>Correo:</strong>
                    <p class="form-control">{{ $usuario->email }}</p>
                </div>
                <div class="mb-3">
                    <strong>Fecha de nacimiento:</strong>
                    <p class="form-control">{{ $usuario->fecha_nacimiento }}</p>
                </div>
                <div class="mb-3">
                    <strong>Hobbies:</strong>
                    <p class="form-control">{{ $usuario->hobbies }}</p>
                </div>
                <div class="mb-3">
                    <strong>Género:</strong>
                    <p class="form-control">{{ $usuario->genero }}</p>
                </div>
                <div class="mb-3">
                    <strong>Nro Celular:</strong>
                    <p class="form-control">{{ $usuario->celular }}</p>
                </div>
                <div class="mb-3">
                    <strong>Rol:</strong>
                    <p class="form-control">{{ $usuario->rol }}</p>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="/usuario" class="btn btn-secondary">Volver Atrás</a>
            </div>
        </div>
    </div>
    
    <button onclick="windows.open('((route{'post.export.Pdf', $post->id}))')"> </button>

    <!-- Bootstrap JS Bundle (Optional, for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
