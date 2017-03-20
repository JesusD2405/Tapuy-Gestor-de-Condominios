@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Seleccione El Conjunto Residencial a Modificar</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/update/conjuntoResidencial') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">person_pin</i>
						<select name="nombreCResidencial" required>
						    <option disabled selected>Nombre</option>
						    {!! $i= 1; !!}
						    @foreach ($conjuntoResidencial as $conjuntoResidenciales)
					    		<option name="nombreCResidencial[{!! $i !!}]"> {!! $conjuntoResidenciales->nombre !!} </option>
					    		{!! $i++; !!}
					   		@endforeach
						</select>
					</div>
			       
			    </div>

			    <div class="col s12">
		  			<h5 style="text-align: center;" class="cyan-text">Actualizacion de Datos</h5>
		  		</div>	

		  		<div class="row">

		  			<div class="input-field col s12">
			        	<i class="material-icons prefix cyan-text">person_pin</i>
			          	<input name="nombre" type="text" class="validate" required>
			          	<label for="nombre">Nombre</label>
			        </div>

		  			<div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="residentes" type="text" class="validate" required>
			          	<label for="residentes">Numero de Residentes</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="casas" type="text" class="validate" required>
			          	<label for="casas">Numero de Casas</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="aptos" type="text" class="validate" required>
			          	<label for="aptos">Numero de Apartamentos</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="thouses" type="text" class="validate" required>
			          	<label for="thouses">Numero de Toon House</label>
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