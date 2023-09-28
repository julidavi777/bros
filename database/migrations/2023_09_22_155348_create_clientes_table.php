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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('identification_type');
            $table->string('identification');
            $table->string('digit_v');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('razon_comercial')->nullable();
            $table->string('phone_number');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('municipio_id');
            $table->string('address');
            $table->string('email');
            $table->string('rut_file')->nullable();
            $table->string('camara_commerce_file')->nullable();
            $table->string('income_statement_file')->nullable();
            $table->string('logo_file')->nullable();
            $table->timestamps();

            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('municipio_id')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
