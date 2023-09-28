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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('cedula')->nullable();
            $table->string('direccion')->nullable();
            $table->string('barrio')->nullable();
            $table->string('salario')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('departamento_id'); 
            $table->unsignedBigInteger('municipio_id'); 
            $table->unsignedBigInteger('usuario'); 
            $table->unsignedBigInteger('tipo_empleado'); 
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('usuario')->references('id')->on('users');
            $table->foreign('tipo_empleado')->references('id')->on('tipo_empleado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
