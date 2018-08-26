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
    
    public function createCliente(){
        
        return view('cliente');
    }
    
    public function insertClienteN(){
        $cliente = new Cliente;
        $cliente->cod = '77167125';
        $cliente->telefono = '981113620';
        $cliente->tipo = 'Natural';
        $cliente->departamento = 'Lima';
        $cliente->provincia = 'Cañete';
        $cliente->distrito = 'Quilmana';
        $cliente->estado = 'A';
        $cliente->save();
        
        $cnatural = new cnatural;
        $cnatural->nombre = 'Kevin Joseph';
        $cnatural->apellido = 'Ramos Chumpitaz';
        $cnatural->cod_cn = '77167125';
        $cnatural->save();
        
        
    }
    
        public function insertClienteJ(){
        $cliente = new Cliente;
        $cliente->cod = '12345678910';
        $cliente->tipo = 'Juridico';
        $cliente->telefono = '981113620';
        $cliente->departamento = 'Lima';
        $cliente->provincia = 'Lima';
        $cliente->distrito = 'Lima';
        $cliente->estado = 'A';
        $cliente->save();
        
        $cjuridico = new cjuridico;
        $cjuridico->razonsocial = 'Infotech';
        $cjuridico->cod_cj = '12345678910';
        $cjuridico->save();
        
        
    }
    
    
    public function mostrarClientes(){
        
        $clientesN = DB::table('clientes')
            ->join('cnatural', 'clientes.cod', '=', 'cnatural.cod_cn')
            ->select('clientes.cod', 'cnatural.nombre', 'cnatural.apellido','clientes.telefono','clientes.correo','clientes.departamento','clientes.provincia','clientes.distrito')
            ->get();
        
        $clientesJ = DB::table('clientes')
            ->join('cjuridico', 'clientes.cod', '=', 'cjuridico.cod_cj')
            ->select('clientes.cod', 'cjuridico.razonsocial', 'clientes.telefono','clientes.correo','clientes.departamento','clientes.provincia','clientes.distrito')
            ->get();
        return view('cliente')
            ->with('clientesN', $clientesN)
            ->with('clientesJ', $clientesJ);
    }
    
}
