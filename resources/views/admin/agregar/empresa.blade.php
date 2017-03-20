@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Datos de La Empresa</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/add/empresa') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s12">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="rif" type="text" class="validate" required>
			          	<label for="rif">rif</label>
			        </div>
			        
			        <div class="input-field col s12">
			        	<i class="material-icons prefix cyan-text">person_pin</i>
			          	<input name="nombre" type="text" class="validate" required>
			          	<label for="nombre">Nombre</label>
			        </div>

			        <div class="row">
			        
			        <h5 style="text-align: center;" class="cyan-text"> Detalles y Ubicacion</h5>
			        
			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">location_on</i>
					    <input name="estado" type="text" class="validate" required>
					    <label for="estado">Estado</label>
				    </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">my_location</i>
			          	<input name="ciudad" type="text" class="validate" required>
			          	<label for="ciudad">Ciudad</label>
			        </div>

				    <div class="input-field col s6">
					   	<i class="material-icons prefix cyan-text">shopping_basket</i>
						    <select name="tipo_servicio" required>
						      	<option  disabled selected>Tipo de Servicio</option>
						      	<option name="tipo_servicio[1]"> Standar </option>
						      	<option name="tipo_servicio[2]"> Medio </option>
						      	<option name="tipo_servicio[3]"> Ejecutivo </option>
						    </select>
					  	</div>
			        </div>

				    <div class="input-field col s6">
					   	<i class="material-icons prefix cyan-text">dialpad</i> 
						<select name="nomina" required>
						    <option disabled selected>Nomina de Empleados</option>
						    <option name="nomina[1]"> 35 </option>
						    <option name="nomina[2]"> 50 </option>
						    <option name="nomina[3]"> 60 </option>
						</select>
			        </div>

			    </div>

	  			<div class="row center">
					<button class="btn waves-effect waves-light cyan" type="submit">Guardar
						<i class="large material-icons right">done</i>
					</button>
		        </div>

		    </form>
	    </div>
	</div>

@endsection