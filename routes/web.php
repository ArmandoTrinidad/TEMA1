<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Ruta para la página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la página de inicio
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

// Ruta para el formulario de solicitud de citas
Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');

// Ruta para consultar citas
Route::get('/consultar-citas', function () {
    return view('consultar-citas');
})->name('consultar-citas');

// Ruta para almacenar una nueva cita
Route::post('/solicitar-cita', [CitaController::class, 'store'])->name('citas.store');

// Rutas
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);