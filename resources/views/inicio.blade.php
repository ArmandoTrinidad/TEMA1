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
            background: rgba(19,50,43,255);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px;
            font-size: 18px;
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
            padding: 6px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: flex-start; /* Cambiado para alinear a la izquierda */
            gap: 15px;
        }

        nav img {
            height: 36px;
            margin-left: 60px;
            margin-right: 55px;/* Asegura que la imagen esté a la derecha */
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 12px;
            padding: 10px 14px;
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
            background: #13322b;
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
        background: rgba(19,50,43,255);
        color: white;
        text-align: left; /* Cambiado de center a left */
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
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('images/logo_blanco.svg') }}" alt="Logo">
    </a>
        <div class="header-buttons">
        <a href="#">Trámites</a>
        <a href="#">Gobierno</a>
        <a href="#">Búsqueda</a>
    </div>
</header>

<nav>
    <div>
        <img src="{{ asset('images/logo_IB.svg') }}" alt="IMMS BIENESTAR" >
    </div>
    <div class="dropdown">
        <a href="#">Servicios de salud IMMS-BIENESTAR</a>
    </div>
    <div class="dropdown">
        <a href="#">Citas</a>
        <div class="dropdown-content">
            <a href="{{ url('/formulario') }}">Solicitar</a>
            <a href="{{ url('/consultar-citas') }}">Consultar</a>
        </div>
    </div>
    <a href="{{ url('/inicio') }}">Atencion a la salud</a>
    <a href="{{ url('/inicio') }}">Contacto</a>
    <a href="{{ url('/inicio') }}">Proteccion de datos personales</a>
    <a href="{{ url('/inicio') }}">Transparencia</a>
    <a href="{{ url('/inicio') }}">Accion comunitaria</a>

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

<div class="carousel-container">
    <div class="carousel">
        <div class="carousel-item">
            <img src="{{ asset('images/fondoslide2-min.png') }}" alt="c1">
            <div class="text-content">
                <h2>Título 1</h2>
                <p>Descripción de la imagen 1.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/fondoslide3-min.png') }}" alt="c2">
            <div class="text-content">
                <h2>Título 2</h2>
                <p>Descripción de la imagen 2.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/fondoslide4-min.png') }}" alt="c3">
            <div class="text-content">
                <h2>Título 3</h2>
                <p>Descripción de la imagen 3.</p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Contenedor principal */
    .carousel-container {
        width: 100%;
        height: 400px; /* Ajusta la altura según necesidad */
        background-color: rgba(226,226,226,255) /* Color arena */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    /* Carrusel */
    .carousel {
        display: flex;
        width: 300%;
        animation: slide 9s infinite ease-in-out;
    }

    /* Elementos individuales del carrusel */
    .carousel-item {
        width: 100vw; /* Ancho completo de la pantalla */
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }

    /* Imágenes */
    .carousel-item img {
        width: 40%;
        max-width: 400px;
        border-radius: 10px;
    }

    /* Texto a un lado de la imagen */
    .text-content {
        width: 40%;
        color: #333;
        font-size: 18px;
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
    }

    /* Animación del carrusel */
    @keyframes slide {
        0%, 30% { transform: translateX(0); } /* Primera imagen */
        35%, 65% { transform: translateX(-100vw); } /* Segunda imagen */
        70%, 100% { transform: translateX(-200vw); } /* Tercera imagen */
    }
</style>





<footer style="background: #13322b; color: white; padding: 20px; text-align: center; font-size: 14px;">
    <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
        <div>
            <img src="{{ asset('images/logo_blanco.svg') }}" alt="Gobierno de México" style="height: 60px;">
        </div>
        <div>
            <h3>Enlaces</h3>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#" style="color: white; text-decoration: none;">Participa</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Publicaciones Oficiales</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Marco Jurídico</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Plataforma Nacional de Transparencia</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Alerta</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Denuncia</a></li>
            </ul>
        </div>
        <div>
            <h3>¿Qué es gob.mx?</h3>
            <p>Es el portal único de trámites, información y participación ciudadana. <a href="#" style="color: white; font-weight: bold;">LEER MÁS</a></p>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#" style="color: white; text-decoration: none;">Portal de datos abiertos</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Declaración de accesibilidad</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Aviso de privacidad integral</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Aviso de privacidad simplificado</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Términos y Condiciones</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Política de seguridad</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Mapa de sitio</a></li>
            </ul>
        </div>
        <div>
            <h3>Denuncia contra servidores públicos</h3>
            
            <h3>Síguenos en</h3>
            <div>
                <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" style="height: 24px; margin: 5px;"></a>
                <a href="#"><img src="{{ asset('images/x logo.png') }}" alt="X" style="height: 24px; margin: 5px;"></a>
                <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="height: 24px; margin: 5px;"></a>
                <a href="#"><img src="{{ asset('images/tik-tok.png') }}" alt="TikTok" style="height: 24px; margin: 5px;"></a>
                <a href="#"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" style="height: 24px; margin: 5px;"></a>
            </div>
        </div>
    </div>
</footer>


</body>
</html>