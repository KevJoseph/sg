<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\cnatural;
use App\cjuridico;

class ClienteController extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function createCliente(){
        
        return view('cliente');
    }
    
    public function insertClienteN(Request $request){
        $cliente = new Cliente;
        $cliente->cod = $request->input('dni');
        $cliente->telefono = $request->input('telefono');
        $cliente->correo = $request->input('correo');
        $cliente->tipo = 'Natural';
        $cliente->departamento = $request->input('departamento');
        $cliente->provincia = $request->input('provincia');
        $cliente->distrito = $request->input('distrito');
        $cliente->estado = 'A';
        $cliente->save();
        
        $cnatural = new cnatural;
        $cnatural->nombre = $request->input('nombre');
        $cnatural->apellido = $request->input('apellido');
        $cnatural->cod_cn = $request->input('dni');
        $cnatural->save();
        return redirect('clientesn');
        
    }
    
        public function insertClienteJ(Request $request){
        $cliente = new Cliente;
        $cliente->cod = $request->input('ruc');
        $cliente->telefono = $request->input('telefono');
        $cliente->correo = $request->input('correo');
        $cliente->tipo = 'Juridico';
        $cliente->departamento = $request->input('departamento');
        $cliente->provincia = $request->input('provincia');
        $cliente->distrito = $request->input('distrito');
        $cliente->estado = 'A';
        $cliente->save();
        
        $cjuridico = new cjuridico;
        $cjuridico->razonsocial = $request->input('razonsocial');
        $cjuridico->cod_cj = $request->input('ruc');
        $cjuridico->save();
        return redirect('clientesj');
        
    }
    
    
    public function mostrarClientesN(){
        
        $clientesN = DB::table('clientes')
            ->join('cnatural', 'clientes.cod', '=', 'cnatural.cod_cn')
            ->select('clientes.cod', 'cnatural.nombre', 'cnatural.apellido','clientes.telefono','clientes.correo','clientes.departamento','clientes.provincia','clientes.distrito')
            ->get();
        
        return view('clientesn')
            ->with('clientesN', $clientesN);
    }
    
        
    public function mostrarClientesJ(){
        
        $clientesJ = DB::table('clientes')
            ->join('cjuridico', 'clientes.cod', '=', 'cjuridico.cod_cj')
            ->select('clientes.cod', 'cjuridico.razonsocial', 'clientes.telefono','clientes.correo','clientes.departamento','clientes.provincia','clientes.distrito')
            ->get();
        
        return view('clientesj')
            ->with('clientesJ', $clientesJ);
    }
    
}
