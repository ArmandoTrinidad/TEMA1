<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Cita - IMSS BIENESTAR</title>
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
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .form-container:hover {
            transform: scale(1.02);
        }
        h2 {
            color: #800020;
            margin-bottom: 15px;
            font-size: 22px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            text-align: left;
            font-size: 14px;
            color: #333;
        }
        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #800020;
            outline: none;
            box-shadow: 0 0 8px rgba(128, 0, 32, 0.2);
        }
        button {
            background-color: rgb(35, 142, 8);
            color: white;
            padding: 14px;
            border: none;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            font-size: 17px;
            font-weight: bold;
            margin-top: 20px;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background-color: rgb(28, 110, 6);
            transform: scale(1.05);
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

        .main-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 20px;
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
        <a href="{{ url('/inicio') }}">INICIO</a>
        <a href="{{ url('/register') }}">CONSULTAR CITA</a>
    </nav>
    
    <div class="main-content">
    <div class="form-container">
        <h2>Solicitar Cita</h2>
        <form action="{{ route('citas.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
        
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" placeholder="Ej. correo@ejemplo.com" required>
        
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Ej. 555-123-4567" required>
        
            <label for="comentarios">Comentarios</label>
            <textarea id="comentarios" name="comentarios" rows="2" placeholder="Escribe aquí cualquier información adicional..."></textarea>
        
            <button type="submit">Solicitar Cita</button>
        </form>
    </div>
    </div>

    <footer>
        &copy; 2025 IMSS BIENESTAR-GOBIERNO DE MEXICO 2024-2030 - Todos los derechos reservados.
    </footer>

</body>
</html>


<?php
use App\Http\Controllers\CitaController;

Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');

Route::post('/solicitar-cita', [CitaController::class, 'store'])->name('citas.store');
