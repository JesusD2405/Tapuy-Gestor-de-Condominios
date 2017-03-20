@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  		<div class="col s12">
		  			<h5 style="text-align: center;" class="cyan-text">Seleccione El Condominio a Modificar</h5>
		  		</div>

		    <form class="col s12" action="{{ url('admin/update/condominio') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">

			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">dialpad</i>
						<select name="rif" required>
						    <option disabled selected>Rif</option>
						    {!! $i= 1 !!}
						    @foreach ($condominio as $condominios)
					    		<option name="rif[{!! $i !!}]"> {!! $condominios->rif !!} </option>
					    		{!! $i++; !!}
					   		@endforeach
						</select>
					</div>

			    <div class="row">
			        
			        <h5 style="text-align: center;" class="cyan-text"> Actualizacion de Datos</h5>
			        
			        <div class="row">
			        
			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="nuevoRif" type="text" class="validate" required>
			          	<label for="nuevoRif">Rif</label>
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
						    { $i= 1}
						    @foreach ($condominio as $condominios)
					    		<option name="estado[{$i}]"> {{ $condominios->estado }} </option>
					    		{$i++;}
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
			          	<input name="comerciales" type="text" class="validate" required>
			          	<label for="comerciales">Num de Comerciales</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="residencias" type="text" class="validate" required>
			          	<label for="residencias">Num de Residencias</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="propietarios" type="text" class="validate" required>
			          	<label for="propietarios">Num de Propietarios</label>
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