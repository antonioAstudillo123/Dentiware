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
        Schema::create('dentistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('genero')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->text('notas')->nullable();
            $table->string('rfc')->nullable();
            $table->string('nss')->nullable();
            $table->string('curp')->nullable();
            $table->string('especialidad')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dentistas');
    }
};
