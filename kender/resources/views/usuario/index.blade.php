<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Iconos Ayonix -->
    <script src="https://api.globalnex.net/ayonix/app.js"></script>
    <link href="https://api.globalnex.net/ayonix/style.css" type="text/css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Lista de Usuarios</h1>
            <a href="/usuario/create" class="btn btn-success axico301">Crear Usuario</a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($usuario as $usuario)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>{{ $usuario->nombre }}</strong><br>
                                <span class="badge {{ $usuario->estado == 1 ? 'bg-success' : 'bg-danger' }}">
                                    {{ $usuario->estado == 1 ? 'Activo' : 'Inactivo' }}
                                </span>
                            </div>
                            <div>
                                <!-- Ver Detalles -->
                                <a href="/usuario/{{ $usuario->id }}" class="btn btn-sm btn-outline-secondary me-2" title="Ver datos">
                                    <span class="axico19"></span>
                                </a>
                                <!-- Editar -->
                                <a href="/usuario/{{ $usuario->id }}/edit" class="btn btn-sm btn-outline-primary me-2" title="Editar">
                                    <span class="axico84"></span>
                                </a>
                                <!-- Eliminar -->
                                <a href="#" class="btn btn-sm btn-outline-danger" title="Eliminar" onclick="confirmDelete({{ $usuario->id }})">
                                    <span class="axico76"></span>
                                </a>      
                                <form id="delete-form-{{ $usuario->id }}" action="{{ route('usuario.destroy', $usuario->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>                          
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        function confirmDelete(userId) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "Esta acción eliminará al usuario de forma permanente.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + userId).submit();
            }
        });
        }
    </script>
    
</body>
</html>
