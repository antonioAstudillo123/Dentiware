<?php

namespace App\Http\Controllers\Pacientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index(){
        return view('dashboard.pages.pacientes.gestionarPacientes');
    }
}
