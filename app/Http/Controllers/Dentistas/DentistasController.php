<?php

namespace App\Http\Controllers\Dentistas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DentistasController extends Controller
{
    public function index(){
        return view('dashboard.pages.dentistas.gestionarDentistas');
    }
}
