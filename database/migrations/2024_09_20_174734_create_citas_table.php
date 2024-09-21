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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_paciente')->nullable();
            $table->unsignedBigInteger('id_dentista')->nullable();
            $table->unsignedBigInteger('id_tratamiento')->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->float('monto')->nullable();
            $table->string('estado');
            $table->text('notas_dentista')->nullable();
            $table->timestamps();

            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->foreign('id_dentista')->references('id')->on('dentistas');
            $table->foreign('id_tratamiento')->references('id')->on('tratamientos');
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
