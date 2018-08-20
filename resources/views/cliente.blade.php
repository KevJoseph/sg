@extends('layouts.master')

@section('content')
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="">REGISTRO DE CLIENTES</a>
            </li>
            
          </ol>

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