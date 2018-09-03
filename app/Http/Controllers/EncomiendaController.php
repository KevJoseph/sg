<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\encomiendas;
use App\detalle_d;
use App\detalle_o;
use App\User;
use Illuminate\Support\Facades\Auth;

class EncomiendaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index(Request $request){
        $oficina = Auth::user()->oficina;
        
        $clientesN = DB::table('clientes')
            ->join('cnatural', 'clientes.cod', '=', 'cnatural.cod_cn')
            ->select('clientes.cod', 'cnatural.nombre', 'cnatural.apellido','clientes.telefono','clientes.correo','clientes.departamento','clientes.provincia','clientes.distrito')
            ->get();
        
        return view('encomienda')
            ->with('clientesN', $clientesN);      
    }
    
    public function buscarRemitente(Request $request){
        $oficina = Auth::user()->oficina;
        
    $cod = $_GET['cod'];

            $clientesN = DB::table('clientes')
            ->join('cnatural', 'clientes.cod', '=', 'cnatural.cod_cn')
            ->select('clientes.cod', 'cnatural.nombre', 'cnatural.apellido','clientes.telefono','clientes.correo','clientes.departamento','clientes.provincia','clientes.distrito')
            ->where('clientes.cod',$cod)
            ->get();    
        


        if (count($clientesN) > 0) {
            $equipo = $clientesN;
            $equipo->status = 200;
            echo json_encode($equipo);
        }else{
            $error = array('status' => 400);
            echo json_encode((object)$error);
        }
    
        
        
    }
    
    public function insertEncomienda(Request $request){
        $oficina = Auth::user()->oficina;
        //Oficina del usuario
        
        $encomienda = new encomiendas;
        $encomienda->cod_e = $request->input('codigo');
        $encomienda->servicio = $request->input('servicio');
        $encomienda->codc_o = $request->input('remitente');   
        $encomienda->codc_d = $request->input('consignado');
        $encomienda->oficina_o = $oficina;
        $encomienda->oficina_d = $request->input('oficina_d');
        $encomienda->pago = $request->input('pago');
        $encomienda->precio = $request->input('precio');
        $encomienda->save();
        
        $origen = new detalle_o;
        $origen->cod_enc = $request->input('codigo');
        $origen->fecha = "01/01/2018";
        $origen->hora = "03_30 am";
        $origen->estado = "Enviado";
        $origen->save();
        
        $destino = new detalle_d;
        $destino->estado = "Recibido";
        $destino->destino = $request->input('oficina_d');
        $destino->cod_enc = $request->input('codigo');
        $destino->save();
        
        return view('encomienda');
    }
    
    public function mostrarEnviados(Request $request){
        $oficina = Auth::user()->oficina;
        
        $encomienda = DB::table('detalle_o')
            ->join('encomiendas', 'encomiendas.cod_e', '=', 'detalle_o.cod_enc')
            ->select('encomiendas.cod_e', 'encomiendas.servicio','encomiendas.pago','encomiendas.codc_o','encomiendas.codc_d','encomiendas.oficina_o','encomiendas.oficina_d','encomiendas.precio','detalle_o.estado','encomiendas.created_at')->where('encomiendas.oficina_o',$oficina)->get();
        
        return view('enviados')
            ->with('enc', $encomienda);
    }
    
    public function mostrarRecibidos(Request $request){
        $oficina = Auth::user()->oficina;
        
        $recibido = DB::table('detalle_d')
            ->join('encomiendas', 'encomiendas.cod_e', '=', 'detalle_d.cod_enc')
            ->select('encomiendas.cod_e', 'encomiendas.servicio','encomiendas.pago','encomiendas.codc_o','encomiendas.codc_d','encomiendas.oficina_o','encomiendas.oficina_d','encomiendas.precio','detalle_d.estado','encomiendas.created_at')->where('encomiendas.oficina_d',$oficina)->get();
        
        return view('recibidos')
            ->with('recib', $recibido);
    }
    public function prueba(){
        $nombre = Auth::user()->name;
        return $nombre; 
    }
}
