<?php

namespace App\Http\Controllers\Pacientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index(){
        return 'Haciendo pruebas con git';
        return view('dashboard.pages.pacientes.gestionarPacientes');
    }
}
