<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id(); // Esta es la columna 'id' que sirve como clave primaria
            $table->string('nombre'); // Esta columna guarda el nombre completo
            $table->string('email'); // Esta columna guarda el correo electrónico
            $table->string('telefono', 15); // Esta columna guarda el número de teléfono con un máximo de 15 caracteres
            $table->text('comentarios')->nullable(); // Esta columna guarda los comentarios, y es opcional
            $table->timestamps(); // Laravel automáticamente añade las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
