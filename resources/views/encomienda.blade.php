@extends('layouts.master')

@section('content')
    <div class="alert alert-dark" role="alert">
        Nota: Si el remitente o consignado no se encuentra registrado click en el boton.
        
         <button type="button" class="btn btn-primary btn-sm float-right" href="{{url('clientesn')}}">Nuevo Cliente <i class="fas fa-plus"></i></button>
     
        </div>
       
    <div class="row">
    	<div class="col-md-12">  		
			<div class="card border-primary">
			  <h5 class="card-header text-primary">Registro de Encomiendas</h5>
			  <div class="card-body text-primary">
			   
		<form>
		  <div class="form-row">
		  		<div class="form-group col-md-3">
			      <label for="inputcodigo">Codigo Encomienda</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="0001">
			    </div>
                <div class="form-group col-md-2">
                  <label for="inputServicio">Tipo de Servicio</label>
                  <select id="inputServicio" class="form-control">
                    <option selected>Seleccionar</option>
                    <option>Mensajeria</option>
                    <option>Cargo</option>
                  </select>
                </div>
                <div class="form-group col-md-3 offset-md-1">
			      <label for="inputcodigo">Fecha</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="07/01/1995">
			    </div>
			     <div class="form-group col-md-2">
			      <label for="inputcodigo">Hora</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="04:16 am">
			    </div>
		  </div>
		  <div class="form-row">
		  		<div class="form-group col-md-3">
			      <label for="inputcodigo">Codigo de Remitente</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="DNI O RUC">
			    </div>
			    <div class="form-group col-md-9">
			      <label for="inputRUC">Datos personales</label>
			      <input type="text" class="form-control" id="inputRUC" placeholder="">
			    </div>
		  </div>
		  <div class="form-row text-danger">
		  		<div class="form-group col-md-3">
			      <label for="inputcodigo">Codigo de Consignado</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="DNI O RUC">
			    </div>
			    <div class="form-group col-md-9">
			      <label for="inputRUC">Datos personales</label>
			      <input type="text" class="form-control" id="inputRUC" placeholder="">
			    </div>
		  </div>
		  <div class="form-row">
            <div class="form-group col-md-6">
		      <label for="inputServicio">Oficina de origen</label>
		      <select id="inputServicio" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>Chiclayo</option>
		        <option>Lima</option>
		      </select>
		    </div>
		  <div class="form-group col-md-6 text-danger">
		      <label for="inputServicio">Oficina de Destino</label>
		      <select id="inputServicio" class="form-control">
		        <option selected>Seleccionar</option>
		        <option>Chiclayo</option>
		        <option>Lima</option>
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
		  <button type="submit" class="btn btn-primary float-right">Guardar</button>
		</form>
			  </div>
    	</div>
    </div>
</div>
 <br>
@endsection