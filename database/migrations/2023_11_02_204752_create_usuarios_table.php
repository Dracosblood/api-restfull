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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuairo');
            $table->string('clave');
            $table->boolean('habilitado');
            $table->date('fecha');
            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');
            $table->date('usuario_creacion');
            $table->date('usuario_modificacion');
            $table->foreignId('roles_id')->constrained();
            $table->foreignId('personas_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
