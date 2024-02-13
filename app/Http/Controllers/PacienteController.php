<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;


class PacienteController extends Controller{

    public function create()
    {        
        return view('pacientes.createPaciente');
            
    }
}
