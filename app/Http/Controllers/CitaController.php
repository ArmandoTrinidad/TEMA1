<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telefono' => 'required|string|max:15',
            'comentarios' => 'nullable|string|max:1000',
        ]);

        // Crear una nueva cita
        Cita::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'comentarios' => $request->comentarios,
        ]);

        // Redirigir a la página principal con un mensaje de éxito
        return redirect()->route('inicio')->with('success', 'Cita solicitada con éxito.');
    }
}
