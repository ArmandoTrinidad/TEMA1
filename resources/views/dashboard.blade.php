<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hospital 4T</title>
</head>
<body>
    <h1>Bienvenido al Dashboard</h1>
    <p>¡Has iniciado sesión correctamente!</p>

    <!-- Botón para cerrar sesión -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
