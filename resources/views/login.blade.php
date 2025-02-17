<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Hospital 4T</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #800020, #f4f4f4);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 320px;
            transition: transform 0.3s ease;
        }
        .login-container:hover {
            transform: scale(1.02);
        }
        h2 {
            color: #800020;
            margin-bottom: 20px;
            font-size: 24px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        input:focus {
            border-color: #800020;
            outline: none;
            box-shadow: 0 0 5px rgba(128, 0, 32, 0.5);
        }
        button {
            background-color: rgb(35, 142, 8);
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
            transition: background 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background-color: rgb(28, 110, 6);
            transform: scale(1.05);
        }
        .forgot-password {
            display: block;
            margin-top: 12px;
            font-size: 14px;
            color: #800020;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .forgot-password:hover {
            color: #600018;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form>
            <input type="text" placeholder="Usuario" required>
            <input type="password" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>
        </form>
        <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
    </div>
</body>
</html>
