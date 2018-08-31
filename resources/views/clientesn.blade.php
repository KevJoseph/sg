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
                     
<!-- Modal Persona Natural -->
<div class="modal fade" id="ModalNatural" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Persona Natural</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ URL('clientes/insertn') }}" method="POST">
        {{ csrf_field() }}
		  <div class="form-row">
		  		<div class="form-group col-md-6">
			      <label for="inputDNI">DNI</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="8 digitos" name="dni">
			    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputNombre">Nombres</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Nombres completos" name="nombre">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Apellidos</label>
		    <input type="text" class="form-control" id="inputApellido" placeholder="Apellidos completos" name="apellido">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Telefono</label>
		    <input type="text" class="form-control" id="inputCelular" placeholder="Numero Telefono o celular" name="telefono">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Correo</label>
		    <input type="text" class="form-control" id="inputCorreo" placeholder="Correo Electronico" name="correo">
		  </div>
		  <div class="form-row">
			    <div class="form-group col-md-4">
		      <label for="inputDepartamento">Departamento</label>
		      <select id="inputDepartamento" class="form-control" name="departamento">
		        <option selected>Seleccionar</option>
		        <option value="Lima">Lima</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputProvincia">Provincia</label>
		      <select id="inputProvincia" class="form-control" name="provincia">
		        <option selected>Seleccionar</option>
		        <option value="Cañete">Cañete</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputDistrito">Distrito</label>
		      <select id="inputDistrito" class="form-control" name="distrito">
		        <option selected>Seleccionar</option>
		        <option value='Quilmana'>Quilmana</option>
		      </select>
		    </div>
 		 </div>
 		       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
		</form>
      </div>

      
    </div>
  </div>
</div>
<!-- Modal -->

<!-- Tabla -->    
   
    <div class="card mb-3 border-primary">
            <div class="card-header text-primary">
               
                <i class="fas fa-user-tie"></i>
                Persona Natural
                <!--button type="button" class="btn btn-primary btn-sm float-right">Nuevo Cliente</button-->
            
            </div>
                
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                      <th>Correo</th>
                      <th>Direccion</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($clientesN as $clientesN)
                    <tr>
                      <td>{{$clientesN->cod}}</td>
                      <td>{{$clientesN->nombre}} {{$clientesN->apellido}}</td>
                      <td>{{$clientesN->telefono}}</td>
                      <td>{{$clientesN->correo}}</td>
                      <td>{{$clientesN->departamento}},{{$clientesN->provincia}},{{$clientesN->distrito}}</td>
                      <td>
                          <button class="btn btn-success" href=""><i class="far fa-edit"></i></button>
                          <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                      </td>
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
