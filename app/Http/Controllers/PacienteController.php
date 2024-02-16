<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Main;
use App\Models\Pacientes;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller {   
    
    public function index()
    {        
        return view('pacientes.tablePaciente');
    }
    
    public function button()
    {        
        return view('pacientes.button');
    }
    
    public function create()
    {        
        return Pacientes::all();
    }

    public function store(Request $request){

        $paciente = new Pacientes;

        $paciente->name = $request->name;
        $paciente->dataNascimento  = $request->dataNascimento;
        $paciente->sexo = $request->sexo;
        $paciente->cpf = $request->cpf;
        $paciente->telefone = $request->telefone;
        $paciente->sus = $request->sus;
        $paciente->endereco = $request->endereco;
        $paciente->cep = $request->cep;
        $paciente->nameMae = $request->nameMae;
        $paciente->namePai = $request->namePai;

        $user = auth()->user();
        $paciente->user_id = Auth::user()->id;
        $paciente->save();
        

        return back()->with('msg', 'Paciente cadastrado com Sucesso!');

    }   
}
