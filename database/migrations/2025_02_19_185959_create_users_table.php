<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creación de la tabla "users"
        Schema::create('users', function (Blueprint $table) {
            // Definir la columna "id" como clave primaria y autoincrementable
            $table->id(); 

            // Columna para el nombre del usuario
            $table->string('name'); 

            // Columna para el correo electrónico del usuario, único para evitar duplicados
            $table->string('email')->unique(); 

            // Columna para la contraseña del usuario
            $table->string('password'); 

            // Registra las fechas de creación y actualización
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Si la migración se revierte, elimina la tabla "users"
        Schema::dropIfExists('users');
    }
};
