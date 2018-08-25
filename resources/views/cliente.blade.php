@extends('layouts.master')

@section('content')
      <div class="alert alert-primary" role="alert">
        Registros de Clientes
         <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Nuevo Cliente <i class="fas fa-plus"></i></button>
       </div>
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-row">
		  		<div class="form-group col-md-6">
			      <label for="inputDNI">DNI</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="8 digitos">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputRUC">RUC</label>
			      <input type="text" class="form-control" id="inputRUC" placeholder="11 digitos">
			    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputNombre">Nombres</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Nombres completos">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Apellidos</label>
		    <input type="text" class="form-control" id="inputApellido" placeholder="Apellidos completos">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Phone</label>
		    <input type="text" class="form-control" id="inputCelular" placeholder="Numero Telefono o celular">
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
  
<!-- Tabla -->    
   
    <div class="card mb-3 border-primary">
            <div class="card-header text-primary">
               
                <i class="fas fa-user"></i>
                Base de datos
                <!--button type="button" class="btn btn-primary btn-sm float-right">Nuevo Cliente</button-->
            
            </div>
                
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Telefono</th>
                      <th>Correo</th>
                      <th>Direccion</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>
                          <button class="btn btn-success"><i class="far fa-edit"></i></button>
                          <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    <td>
                          <button class="btn btn-success"><i class="far fa-edit"></i></button>
                          <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                     <td>
                          <button class="btn btn-success"><i class="far fa-edit"></i></button>
                          <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                        <td>
                          <button class="btn btn-success"><i class="far fa-edit"></i></button>
                          <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
 <!-- Modal -->
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   <br>
  <br>
  <br> <br>
  <br>
  <br>
   
    <div class="row">
    	<div class="col-md-6">  		
			<div class="card border-primary">
			  <h5 class="card-header text-primary">Cliente Envio</h5>
			  <div class="card-body text-primary">
			   
		<form>
		  <div class="form-row">
		  		<div class="form-group col-md-6">
			      <label for="inputDNI">DNI</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="8 digitos">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputRUC">RUC</label>
			      <input type="text" class="form-control" id="inputRUC" placeholder="11 digitos">
			    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputNombre">Nombres</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Nombres completos">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Apellidos</label>
		    <input type="text" class="form-control" id="inputApellido" placeholder="Apellidos completos">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Phone</label>
		    <input type="text" class="form-control" id="inputCelular" placeholder="Numero Telefono o celular">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputServicio">Tipo de Servicio</label>
		      <select id="inputServicio" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>Mensajeria</option>
		        <option>Cargo</option>
		      </select>
		    </div>
		  </div>

		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputPagar">Tipo de Pago</label>
		      <select id="inputPagar" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>Cancelado</option>
		        <option>Por pagar</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputPrecio">Precio</label>
		      <input type="text" class="form-control" id="inputPrecio">
		    </div>
		  </div>
		<div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputServicio">Sucursal de origen</label>
		      <select id="inputServicio" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>Chiclayo</option>
		        <option>Lima</option>
		      </select>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary float-right">Guardar Cliente</button>
		</form>
			  </div>
    	</div>
    </div>



        	<div class="col-md-6">  		
			<div class="card border-danger">
			  <h5 class="card-header text-danger">Cliente Recibe</h5>
			  <div class="card-body text-danger">
			   
		<form>
		  <div class="form-row">
		  	  <div class="form-group col-md-6">
			      <label for="inputDNI">DNI</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="8 digitos">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputRUC">RUC</label>
			      <input type="text" class="form-control" id="inputRUC" placeholder="11 digitos">
			    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputNombre">Nombres</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Nombres completos">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Apellidos</label>
		    <input type="text" class="form-control" id="inputApellido" placeholder="Apellidos completos">
		  </div>
		  <div class="form-group">
		    <label for="inputApellido">Phone</label>
		    <input type="text" class="form-control" id="inputCelular" placeholder="Numero Telefono o celular">
		  </div>
		  <div class="form-row">
			    <div class="form-group col-md-4">
		      <label for="inputDepartamento">Departamento</label>
		      <select id="inputDepartamento" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>...</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputProvincia">Provincia</label>
		      <select id="inputProvincia" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>...</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputProvincia">Distrito</label>
		      <select id="inputProvincia" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>...</option>
		      </select>
		    </div>
 		 </div>
 		 <div class="form-group">
		    <label for="inputDireccion">Dirección</label>
		    <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección">
		  </div>
		<div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputServicio">Sucursal de Destino</label>
		      <select id="inputServicio" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>Chiclayo</option>
		        <option>Lima</option>
		      </select>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-danger float-right">Guardar Cliente</button>
		</form>
			  </div>
    	</div>
    </div>
</div>
 <br>

@endsection
