@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  		<div class="col s12">
		  			<h5 style="text-align: center;" class="cyan-text">Seleccione La Sucursal a Modificar</h5>
		  		</div>

		    <form class="col s12" action="{{ url('admin/update/sucursal') }}" method="post">
		    	
		    	{{ csrf_field() }}
		 
		    	<div class="row">
			        
			        <div class="input-field col s6">
			         	<i class="material-icons prefix cyan-text">location_on</i>
						<select name="nombreEstado" required>
						    <option disabled selected>Estado</option>
						    { $i= 1}
						    @foreach ($sucursal as $sucursales)
					    		<option name="nombreEmpresa[{$i}]"> {{ $sucursales->estado }} </option>
					    		{$i++;}
					   		@endforeach
						</select>
					</div>

					<div class="input-field col s6">
		      			<i class="material-icons prefix cyan-text">location_on</i>
			          	<input name="estado" type="text" class="validate" required>
			          	<label for="estado">Estado Nuevo</label>
			        </div>

			    </div>

			    <div class="row">
			        
			        <div class="input-field col s6">
			         	<i class="material-icons prefix cyan-text">my_location</i>
						<select name="nombreCiudad" required>
						    <option disabled selected>Ciudad</option>
						    { $i= 1}
						    @foreach ($sucursal as $sucursales)
					    		<option name="nombreEmpresa[{$i}]"> {{ $sucursales->ciudad }} </option>
					    		{$i++;}
					   		@endforeach
						</select>
					</div>

					<div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">my_location</i>
			          	<input name="ciudad" type="text" class="validate" required>
			          	<label for="ciudad">Ciudad Nueva</label>
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