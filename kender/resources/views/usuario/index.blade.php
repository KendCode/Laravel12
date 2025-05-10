<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Lista de Usuarios</h1>
            <a href="/usuario/create" class="btn btn-success">Crear Usuario</a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($usuario as $usuario)
                        <a href="/usuario/{{ $usuario->id }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <span>{{ $usuario->nombre }}</span>
                            <span class="badge {{ $usuario->estado == 1 ? 'bg-success' : 'bg-danger' }}">
                                {{ $usuario->estado == 1 ? 'Activo' : 'Inactivo' }}
                            </span>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (opcional para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
