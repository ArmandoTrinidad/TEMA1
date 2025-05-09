<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - IMSS BIENESTAR</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #13322b, #f4f4f4);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background: #13322b;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            position: relative;
        }
        header img {
            height: 48px;
            margin-left: 15px;

        }
        .header-text {
            flex-grow: 1;
            text-align: center;
        }
        .header-buttons {
            display: flex;
            gap: 12px;
            margin-right: 20px;

        }
        .header-buttons a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .header-buttons a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }
        nav {
            background: rgb(188, 149, 92);
            padding: 8px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            padding: 10px 15px;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.2s ease;
            border-radius: 5px;
        }
        nav a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 320px;
            margin: auto;
            transition: transform 0.3s ease;
        }
        .login-container:hover {
            transform: scale(1.02);
        }
        h2 {
            color: rgb(97, 18, 50);
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
        .register-link {
            margin-top: 15px;
            display: block;
            color: #007bff;
            text-decoration: none;
        }
        .register-link:hover {
            text-decoration: underline;
        }

        footer {
            background: #13322b;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <header>
        <a href="https://www.gob.mx">
            <img src="{{ asset('images/logo_blanco.svg') }}" alt="Logo">
        </a>
        <div class="header-text"></div>
        <div class="header-buttons">
            <a href="https://www.gob.mx/tramites">Trámites</a>
            <a href="https://www.gob.mx/gobierno">Gobierno</a>
            <a href="https://www.gob.mx/busqueda">Búsqueda</a>
        </div>
    </header>
    <nav>
        <a href="{{ url('/inicio') }}">Inicio</a>
        <a href="{{ url('/register') }}">Registrarse</a>
    </nav>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <a href="{{ route('register') }}" class="register-link">¿No tienes una cuenta? Regístrate aquí</a>
    </div>

    <footer>
        &copy; 2025 IMSS BIENESTAR-GOBIERNO DE MEXICO 2024-2030 - Todos los derechos reservados.
    </footer>

</body>
</html>
