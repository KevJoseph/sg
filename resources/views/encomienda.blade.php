@extends('layouts.master')

@section('content')
<?php date_default_timezone_set('America/Lima'); ?>
   
   <?php  

	//$result = mysql_query("SELECT * FROM club", $connection);
	$array = array();


foreach($clientesN as $clientesN){
    $equipo = $clientesN->cod;
    array_push($array, $equipo); // equipos
}

?>
   
   
   
   
    <div class="alert alert-dark" role="alert">
        Nota: Si el remitente o consignado no se encuentra registrado click en el boton.
        
         <button type="button" class="btn btn-primary btn-sm float-right" href="{{url('clientesn')}}">Nuevo Cliente <i class="fas fa-plus"></i></button>
     
        </div>
       
    <div class="row">
    	<div class="col-md-12">  		
			<div class="card border-primary">
			  <h5 class="card-header text-primary">Registro de Encomiendas</h5>
			  <div class="card-body text-primary">
			   
		<form action="{{ URL('encomienda/insert') }}" method="POST">
        {{ csrf_field() }}
		  <div class="form-row">
		  		<div class="form-group col-md-3">
			      <label for="inputcodigo">Codigo Encomienda</label>
			      <input type="text" class="form-control" id="inputDNI" placeholder="0001" name="codigo">
			    </div>
                <div class="form-group col-md-2">
                  <label for="inputServicio">Tipo de Servicio</label>
                  <select id="inputServicio" class="form-control" name="servicio">
                    <option selected>Seleccionar</option>
                    <option value="Mensajeria">Mensajeria</option>
                    <option value="Cargo">Cargo</option>
                  </select>
                </div>
                <div class="form-group col-md-3 offset-md-1">
			      <label for="inputcodigo">Fecha</label>
			      <input type="text" name="fecha" class="form-control" id="inputDNI"  placeholder="<?php echo date('Y-m-d');?>" disabled>
			    </div>
			     <div class="form-group col-md-2">
			      <label for="inputcodigo">Hora</label>
			      <input type="text" name="hora" class="form-control" id="inputDNI"  placeholder="<?php echo date('h:m');?>" disabled>
			    </div>
		  </div>
		  <div class="form-row">
		  		<div class="form-group col-md-3">
			      <label for="inputcodigo">Codigo de Remitente</label>
			      <input  name="remitente"  id="tag" placeholder="DNI O RUC">
			    </div>
			    <div class="form-group col-md-9">
			      <label for="inputRUC">Datos personales</label>
			      <input name="datospersonales" type="text" class="form-control"  id="nombre"  placeholder="">
			    </div>
		  </div>
		  <div class="form-row text-danger">
		  		<div class="form-group col-md-3">
			      <label for="inputcodigo">Codigo de Consignado</label>
			      <input type="text" class="form-control" id="tag2" placeholder="DNI O RUC" name="consignado">
			    </div>
			    <div class="form-group col-md-9">
			      <label for="inputRUC">Datos personales</label>
			      <input type="text" class="form-control" id="nombre2" name="datospersonales2" placeholder="">
			    </div>
		  </div>
		  <div class="form-row">
            <div class="form-group col-md-6">
		      <label for="inputOficina">Oficina de origen</label>
                <input type="text" class="form-control" id="inputOficina" name="oficina_o" placeholder="" value="{{ Auth::user()->oficina }}">
		    </div>
		  <div class="form-group col-md-6 text-danger">
		      <label for="inputServicio">Oficina de Destino</label>
		      <select id="inputServicio" name="oficina_d" class="form-control">
		        <option selected>Seleccionar</option>
		        <option value="Chiclayo">Chiclayo</option>
		        <option value="Lima">Lima</option>
		      </select>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="inputPagar">Tipo de Pago</label>
		      <select id="inputPagar" name="pago" class="form-control">
		        <option selected>Seleccionar</option>
		        <option value="Cancelado">Cancelado</option>
		        <option value="Por pagar">Por pagar</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputPrecio">Precio</label>
		      <input type="text" name="precio" class="form-control" id="inputPrecio">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary float-right">Guardar</button>
		</form>
			  </div>
    	</div>
    </div>
</div>
 <br>
 
 
 	<script type="text/javascript">
		$(document).ready(function () {
			var items = <?= json_encode($array) ?>;
			$("#tag").autocomplete({
				source: items,
				select: function (event, item) {
					var params = {
						cod: item.item.value
					};
					$.get("encomienda_br", params, function (response) {
						if (response){
							$("#nombre").val(response);
						}else{

						}
					});
				}
			});
            
            	$("#tag2").autocomplete({
				source: items,
				select: function (event, item) {
					var params = {
						cod: item.item.value
					};
					$.get("encomienda_br", params, function (response) {
						if (response){
							$("#nombre2").val(response);
						}else{

						}
					});
				}
			});
		});
	</script>
 
 
 
 
 
 
 
 
 
 
 
@endsection