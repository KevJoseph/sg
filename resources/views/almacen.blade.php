@extends('layouts.master')

@section('content')
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="">REGISTRO DE ALMACENE</a>
            </li>
          </ol>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalRegistrarCliente">
  Nuevo Almacen <span class="fas fa-plus"></span>
</button>
<hr>

   <!-- DataTables Example -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Ubicación</th>
                      <th>Provincia</th>
                      <th>Año</th>
                      <th>Fecha</th>
                      <th>Salario</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Ubicación</th>
                      <th>Provincia</th>
                      <th>Año</th>
                      <th>Fecha</th>
                      <th>Salario</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>
                      	<button class="btn btn-warning" style="color: #fff;"  data-toggle="modal" data-target="#ModalEditarCliente"><i class="fas fa-pencil-alt"></i></button> <button class="btn btn-danger fas fa-trash-alt"></button>
                      </td>
                    </tr>

                    <tr>
                      <td>Ronny Quispe</td>
                      <td>Lugiuk</td>
                      <td>Rjhlkh</td>
                      <td>93</td>
                      <td>2011/03/22</td>
                      <td>$20,800</td>
                      <td>
                      	<button class="btn btn-warning" style="color: #fff;"  data-toggle="modal" data-target="#ModalEditarCliente"><i class="fas fa-pencil-alt"></i></button> <button class="btn btn-danger fas fa-trash-alt"></button>
                      </td>
                    </tr>

                    <tr>
                      <td>Maycol afafe</td>
                      <td>Salon Recepciones</td>
                      <td>Jidffgs</td>
                      <td>54</td>
                      <td>2011/02/21</td>
                      <td>$870,300</td>
                      <td>
                      	<button class="btn btn-warning" style="color: #fff;"  data-toggle="modal" data-target="#ModalEditarCliente"><i class="fas fa-pencil-alt"></i></button> <button class="btn btn-danger fas fa-trash-alt"></button>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>

            <div class="card-footer small text-muted">Actualizado miercoles a las 11:59 PM</div>


          <p class="small text-center text-muted my-5">
            <em>En esta tabla se encuentra registrado todos los almacenes...</em>
          </p>

        </div>

   


<!-- Modal Registrar Cliente :) ;) -->
<div class="modal fade" id="ModalRegistrarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Almacen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<div class="col-md-12">  		
		<form>
		  <div class="form-row">
		  		<div class="form-group col-md-6">
			      <label for="inputDNI">Código</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="8 digitos">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputRUC">Nombre</label>
			      <input type="text" class="form-control" id="inputRUC" placeholder="Nombre">
			    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputNombre">Dirección</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
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
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary float-right">Guardar Cliente</button>
</form>
      </div>
    </div>
  </div>
</div>


<!-- Editar :) ;) -->
<div class="modal fade" id="ModalEditarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar datos de Almacen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<div class="col-md-12">  		
		<form>
		  <div class="form-row">
		  		<div class="form-group col-md-6">
			      <label for="inputDNI">Código</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="8 digitos">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputRUC">Nombre</label>
			      <input type="text" class="form-control" id="inputRUC" placeholder="Nombre">
			    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputNombre">Dirección</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
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
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary float-right">Guardar Cliente</button>
</form>
      </div>
    </div>
  </div>
</div>

@endsection
