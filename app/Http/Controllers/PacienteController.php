<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Main;
use App\Models\Pacientes;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller {   
    
    public function index()
    {        
        $pacientes = Pacientes::all();
        return view('pacientes.index', compact('pacientes'));
    }
    
    public function create()
    {        
        return view('pacientes.create');
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
