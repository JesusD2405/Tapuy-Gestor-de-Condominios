@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  		<div class="col s12">
		  			<h5 style="text-align: center;" class="cyan-text">Datos Del Condominio</h5>
		  		</div>

		    <form class="col s12" action="{{ url('admin/add/condominio') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="rif" type="text" class="validate" required>
			          	<label for="rif">Rif</label>
			        </div>

			        <div class="row">
			    		<div class="input-field col s12 l6">
			        		<i class="material-icons prefix cyan-text">person_pin</i>
			          		<input name="nombre" type="text" class="validate" required>
			          		<label for="nombre">Nombre</label>
			        	</div>
			    	</div>

			    </div>

			    <div class="row">
			        
			        <h5 style="text-align: center;" class="cyan-text"> Ubicacion</h5>
			        
			        <div class="input-field col s6">
			         	<i class="material-icons prefix cyan-text">location_on</i>
						<select name="estado" required>
						    
						    <option disabled selected>Sucursal</option>
						    
						    {!! $i= 1 !!}
						    @foreach ($sucursal as $sucursales)
					    		<option name="estado[{!! $i !!}]"> {!! $sucursales->estado !!} </option>
					    		{!! $i++; !!}
					   		@endforeach

						</select>
					</div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">my_location</i>
			          	<input name="ciudad" type="text" class="validate" required>
			          	<label for="ciudad">Ciudad</label>
			        </div>

			    </div>

			    <div class="row">

			        <h5 style="text-align: center;">Detalles Referenciales</h5>
			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="cant_comerciales" type="text" class="validate" required>
			          	<label for="cant_comerciales">Num de Comerciales</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="cant_residenciales" type="text" class="validate" required>
			          	<label for="cant_residenciales">Num de Residencias</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="cant_titulares" type="text" class="validate" required>
			          	<label for="cant_titulares">Num de Propietarios</label>
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