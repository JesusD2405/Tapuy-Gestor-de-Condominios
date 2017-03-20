@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  		<div class="col s12">
		  			<h5 style="text-align: center;" class="cyan-text">Seleccione la Empresa a Modificar</h5>
		  		</div>

		    <form class="col s12" action="{{ url('admin/update/empresa') }}" method="post">
		    	
		    	{{ csrf_field() }}
		 
			    <div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">dialpad</i>
						<select name="rif" required>
						    <option disabled selected>Rif</option>
						    { $i= 1}
						    @foreach ($empresa as $empresas)
					    		<option name="rif[{$i}]"> {{ $empresas->rif }} </option>
					    		{$i++;}
					   		@endforeach
						</select>
					</div>

			    </div>

			    <div class="row">

			    	<div class="col s12">
		  				<h5 style="text-align: center;" class="cyan-text"> Actualizacion de Datos</h5>
		  			</div>

			    	<div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="nuevoRif" type="text" class="validate" required>
			          	<label for="nuevoRif">rif</label>
			        </div>
			        
			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">person_pin</i>
			          	<input name="nombre" type="text" class="validate" required>
			          	<label for="nombre">Nombre</label>
			        </div>
			        
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
						    <select name="tipo_serv" required>
						      	<option  disabled selected>Tipo de Servicio</option>
						      	<option name="tipo_serv[1]"> Standar </option>
						      	<option name="tipo_serv[2]"> Medio </option>
						      	<option name="tipo_serv[3]"> Ejecutivo </option>
						    </select>
					</div>


				    <div class="input-field col s6">
					   	<i class="material-icons prefix cyan-text">dialpad</i> 
						<select name="empleados" required>
						    <option disabled selected>Nomina de Empleados</option>
						    <option name="empleados[1]"> 35 </option>
						    <option name="empleados[2]"> 50 </option>
						    <option name="empleados[3]"> 60 </option>
						</select>
			        </div>

			    </div>

	  			<div class="row center">
					<button class="btn waves-effect waves-light cyan" type="submit">Modificar
						<i class="large material-icons right">mode_edit</i>
					</button>
		        </div>

		    </form>
	    </div>
	</div>

@endsection