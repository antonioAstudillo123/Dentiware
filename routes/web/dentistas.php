<?php

use App\Http\Controllers\Dentistas\DentistasController;
use Illuminate\Support\Facades\Route;


Route::prefix('dentistas')->group(function () {

    Route::controller(DentistasController::class)->group(function () {
        Route::get('/', 'index')->name('dentistas.index');
    });
});
