<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMSS BIENESTAR</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f4f4f4, #e3f2fd);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background: rgb(97, 18, 50);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        header img {
            height: 48px;
            margin-left: 15px;

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
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background: rgb(97, 18, 50);
            min-width: 160px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            overflow: hidden;
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background 0.3s ease;
        }
        .dropdown-content a:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .user-info {
            display: inline-block;
            margin-left: 15px;
        }
        .user-info span {
            color: white;
            font-size: 18px;
            margin-right: 10px;
        }
        .main-content {
            flex: 1;
            padding: 30px;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: scale(1.02);
        }
        h1, h2 {
            color: #333;
            margin-bottom: 30px;
        }
        .services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .service {
            width: 30%;
            background: #e3f2fd;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .service h3 {
            color: #0277bd;
            margin-bottom: 10px;
        }
        footer {
            background: rgb(97, 18, 50);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        @media (max-width: 768px) {
            .services {
                flex-direction: column;
                align-items: center;
            }
            .service {
                width: 80%;
                margin-bottom: 15px;
            }
            .container {
                width: 95%;
            }
        }
    </style>
</head>
<body>

<header>
    <img src="{{ asset('images/logo_blanco.svg') }}" alt="Logo">
     <div class="header-buttons">
        <a href="#">Trámites</a>
        <a href="#">Gobierno</a>
        <a href="#">Búsqueda</a>
    </div>
</header>

<nav>
    <a href="{{ url('/inicio') }}">Inicio</a>
    <div class="dropdown">
        <a href="#">Servicios</a>
        <div class="dropdown-content">
            <a href="#urgencias">Urgencias</a>
            <a href="#medicina-general">Medicina General</a>
            <a href="#cirugia">Cirugía</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#">Citas</a>
        <div class="dropdown-content">
            <a href="{{ url('/formulario') }}">Solicitar</a>
            <a href="{{ url('/consultar-citas') }}">Consultar</a>
        </div>
    </div>
    @if(Auth::check())
        <div class="user-info">
            <span>{{ Auth::user()->name }}</span>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Cerrar Sesión
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    @else
        <a href="{{ url('/login') }}">Iniciar Sesión</a>
    @endif
</nav>

<div class="main-content">
    <div class="container">
        <h1>Bienvenido{{ Auth::check() ? ', ' . Auth::user()->name : '' }}</h1>
        <p>Nos preocupamos por tu salud y bienestar. Contamos con un equipo de profesionales altamente capacitados.</p>
        <h2>Nuestros Servicios</h2>
        <div class="services">
            <div class="service" id="urgencias">
                <h3>Urgencias</h3>
                <p>Atención médica 24/7 para emergencias.</p>
            </div>
            <div class="service" id="pediatria">
                <h3>Pediatría</h3>
                <p>Especialistas en la salud de los más pequeños.</p>
            </div>
            <div class="service" id="medicina-general">
                <h3>Medicina General</h3>
                <p>Consultas médicas y revisiones generales.</p>
            </div>
        </div>
    </div>
</div>

<footer>
    &copy; 2025 IMSS BIENESTAR-GOBIERNO DE MEXICO 2024-2030 - Todos los derechos reservados.
</footer>

</body>
</html>