@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Datos del Conjunto Residencial</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/add/conjuntoResidencial') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s12">
			        	<i class="material-icons prefix cyan-text">person_pin</i>
			          	<input name="nombre" type="text" class="validate" required>
			          	<label for="nombre">Nombre</label>
			        </div>

			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">business</i>
						<select name="condominio" required>
						    <option disabled selected>Condominio</option>
						    {!! $i= 1; !!}
						    @foreach ($condominio as $condominios)
					    		<option name="condominio[{$i}]"> {!! $condominios->nombre !!} </option>
					    		{!! $i++; !!}
					   		@endforeach
						</select>
					</div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="cant_titulares" type="text" class="validate" required>
			          	<label for="cant_titulares">Numero de Residentes</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="cant_casas" type="text" class="validate" required>
			          	<label for="cant_casas">Numero de Casas</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="cant_aptos" type="text" class="validate" required>
			          	<label for="cant_aptos">Numero de Apartamentos</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="cant_thouse" type="text" class="validate" required>
			          	<label for="cant_thouse">Numero de Toon House</label>
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