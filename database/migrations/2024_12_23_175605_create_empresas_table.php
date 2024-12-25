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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo_actividad');
            $table->string('ruc');
            $table->string('nombre_comercial');
            $table->string('numero_decreto');
            $table->string('logo');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('moneda');
            $table->text('mision')->nullable();
            $table->text('vision')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('nombre_gerente');
            $table->string('dni_gerente');
            $table->string('telefono_gerente');
            $table->string('correo_gerente');
            $table->string('direccion_gerente');
            $table->string('fecha_ingreso_gerente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
