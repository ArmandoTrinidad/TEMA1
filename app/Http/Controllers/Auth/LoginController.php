<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Mostrar formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Manejar login
    public function login(Request $request)
    {
        // Validación de las credenciales
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Intentar iniciar sesión con las credenciales proporcionadas
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Si el inicio de sesión es exitoso, redirigir al usuario a la página de inicio
            return redirect()->intended('inicio');
        }

        // Si las credenciales son incorrectas, redirigir de vuelta con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput($request->only('email'));
    }

    // Manejar cierre de sesión
    public function logout(Request $request)
    {
        // Cerrar sesión
        Auth::logout();

        // Redirigir al usuario de vuelta a la página de login después de cerrar sesión
        return redirect()->route('login');
    }
}