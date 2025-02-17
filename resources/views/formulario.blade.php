<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Cita - Hospital 4T</title>
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
            justify-content: center;
            align-items: center;
            height: 100vh;
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
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Solicitar Cita</h2>
        <form>
            <label for="nombre">Nombre Completo</label>
            <input type="text" id="nombre" placeholder="Ej. Juan Pérez" required>
            
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" placeholder="Ej. correo@ejemplo.com" required>

            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" placeholder="Ej. 555-123-4567" required>

            <!-- Comentario: Sección de especialidad y fecha (puedes descomentar si es necesario) -->
            <!-- 
            <label for="especialidad">Especialidad</label>
            <select id="especialidad">
                <option>Medicina General</option>
                <option>Pediatría</option>
                <option>Cardiología</option>
                <option>Dermatología</option>
            </select>

            <label for="fecha">Fecha Preferida</label>
            <input type="date" id="fecha" required>
            -->

            <label for="comentarios">Comentarios</label>
            <textarea id="comentarios" rows="4" placeholder="Escribe aquí cualquier información adicional..."></textarea>

            <button type="submit">Solicitar Cita</button>
        </form>
    </div>
</body>
</html>
