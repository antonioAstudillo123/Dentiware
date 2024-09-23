<?php

use App\Http\Controllers\Pacientes\PacientesController;
use Illuminate\Support\Facades\Route;



Route::prefix('pacientes')->group(function () {

    Route::controller(PacientesController::class)->group(function () {
        Route::get('/', 'index')->name('pacientes.index');
    });
});

