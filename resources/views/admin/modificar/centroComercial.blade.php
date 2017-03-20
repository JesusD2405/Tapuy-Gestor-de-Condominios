@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Seleccione El Centro Comercial a Modificar</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/update/centroComercial') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">person_pin</i>
						<select name="nombreCComercial" required>
						    <option disabled selected>Nombre</option>
						    {!! $i= 1 !!}
						    @foreach ($centroComercial as $centroComerciales)
					    		<option name="nombreCComercial[{!! $i !!}]"> {!! $centroComerciales->nombre !!} </option>
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
			          	<input name="tiendas" type="text" class="validate" required>
			          	<label for="tiendas">Numero de Tiendas</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="locales" type="text" class="validate" required>
			          	<label for="locales">Numero de Locales</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="titulares" type="text" class="validate" required>
			          	<label for="titulares">Numero de Titulares</label>
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