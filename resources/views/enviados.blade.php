@extends('layouts.master')

@section('content')
     
        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

      <div class="alert alert-primary" role="alert">
        Registros de Clientes
        
        
        
        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#ModalNatural">Nuevo Cliente <i class="fas fa-plus"></i></button>
       </div>

<!-- Tabla -->    
   
    <div class="card mb-3 border-primary">
            <div class="card-header text-primary">
               
                <i class="fas fa-user-tie"></i>
                Encomiendas Enviadas
                <!--button type="button" class="btn btn-primary btn-sm float-right">Nuevo Cliente</button-->
            
            </div>
                
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Servicio</th>
                      <th>Pago</th>
                      <th>Remitente</th>
                      <th>Consignado</th>
                      <th>Origen</th>
                      <th>Destino</th>
                      <th>Precio</th>
                      <th>Fecha</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($enc as $enc)
                    <tr>
                      <td>{{$enc->cod_e}}</td>
                      <td>{{$enc->servicio}}</td>
                      <td>{{$enc->pago}}</td>
                      <td>{{$enc->codc_o}}</td>
                      <td>{{$enc->codc_d}}</td>
                      <td>{{$enc->oficina_o}}</td>
                      <td>{{$enc->oficina_d}}</td>
                      <td>{{$enc->precio}}</td>
                      <td>{{$enc->created_at}}</td>
                      <td>{{$enc->estado}}</td>
                      <!--td>
                          <button class="btn btn-success" href=""><i class="far fa-edit"></i></button>
                          <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                      </td-->
                    </tr>
                  
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!--div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div-->
</div>
 <!-- Tabla Natural -->
  
  <br>
  <br>


@endsection
