@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  		<div class="col s12">
		  			<h5 style="text-align: center;" class="cyan-text">Seleccione El Servicio a Modificar</h5>
		  		</div>

		    <form class="col s12" action="{{ url('admin/update/servicio') }}" method="post">
		    	
		    	{{ csrf_field() }}
		 
		    	<div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">person_pin</i>
						<select name="nombreCondominio" required>
						    <option disabled selected>Condominio</option>
						    { $i= 1}
						    @foreach ($servicio as $servicios)
					    		<option name="nombreCondominio[{$i}]"> {{ $servicios->condominio }} </option>
					    		{$i++;}
					   		@endforeach
						</select>
					</div>

			    </div>

			    <div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">shopping_basket</i>
						<select name="nombreServicio" required>
						    <option disabled selected>Servicio</option>
						    { $i= 1}
						    @foreach ($servicio as $servicios)
					    		<option name="nombreEmpresa[{$i}]"> {{ $servicios->servicio }} </option>
					    		{$i++;}
					   		@endforeach
						</select>
					</div>

			    </div>

			    <div class="row">

			    	<div class="col s12">
		  				<h5 style="text-align: center;" class="cyan-text">Escoja EL Nuevo Tipo</h5>
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