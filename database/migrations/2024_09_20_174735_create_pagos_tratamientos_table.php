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
        Schema::create('pagos_tratamientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cita')->nullable();
            $table->datetime('fecha_pago')->nullable();
            $table->float('monto')->nullable();
            $table->string('referencia')->nullable();
            $table->tinyInteger('descuento_aplicado')->nullable();
            $table->string('descripcion'); //detalle del servicio por el cual se realizo el pago.
            $table->text('notas_adicionales')->nullable();
            $table->string('estatus')->nullable(); //completado, pendiente
            $table->timestamps();

            $table->foreign('id_cita')->references('id')->on('citas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos_tratamientos');
    }
};
