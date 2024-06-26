<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('arriendos', function (Blueprint $table) {
        $table->id();
        $table->string('rut_cliente', 10);
        $table->string('nombre_cliente', 15);
        $table->string('apellido_cliente', 15);
        $table->date('devolucion');
        $table->date('inicio');
        $table->date('final');
        //$table->timestamps();

        // Relacion de 1 usuario tiene varios arriendos
        $table->string('email_usuario', 40);
        $table->foreign('email_usuario')->references('email')->on('usuarios');

        // Relacion de 1 vehículo tiene varios arriendos

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arriendos');
    }
};
