<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Usuario Registrado</title>
</head>
<body>
    <h2>¡Bienvenido, {{ $nombre }}!</h2>

    <p>Tu usuario ha sido creado con éxito.</p>
    <p>Aquí están tus credenciales:</p>

    <ul>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Contraseña:</strong> {{ $password }}</li>
    </ul>

    <p>Por favor, cambia tu contraseña después de iniciar sesión.</p>

    <p>Gracias por unirte a nuestro sistema.</p>
</body>
</html>
