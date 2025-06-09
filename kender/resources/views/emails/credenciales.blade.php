<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Credenciales de acceso</title>
</head>
<body>
    <h2>Hola {{ $usuario->nombre }},</h2>

    <p>Tu cuenta ha sido creada correctamente. Aquí están tus credenciales:</p>

    <ul>
        <li><strong>Email:</strong> {{ $usuario->email }}</li>
        <li><strong>Contraseña:</strong> {{ $password }}</li>
    </ul>

    <p>Recuerda cambiar tu contraseña después de iniciar sesión.</p>

    <p>Gracias.</p>
</body>
</html>
