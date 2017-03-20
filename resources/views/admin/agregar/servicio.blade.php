@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  		<div class="col s12">
		  			<h5 style="text-align: center;" class="cyan-text">Datos De Los Servicios</h5>
		  		</div>

		    <form class="col s12" action="{{ url('admin/add/servicio') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s6">
			          	<div class="input-field col s12">
					    	<i class="material-icons prefix cyan-text">shopping_basket</i>
						    <select name="servicio" required>
						      <option disabled selected>Servicio</option>
						      <option name="servicio[1]"> Limpieza </option>
						      <option name="servicio[2]"> Mantenimiento </option>
						      <option name="servicio[3]"> Seguridad </option>
						    </select>
					  	</div>
			        </div>
			        
			        <div class="input-field col s6">
			          	<div class="input-field col s12">
						    <select name="tipo_serv" required>
						      <option disabled selected>Tipo de Servicio</option>
						      <option name="tipo_serv[1]"> Standar </option>
						      <option name="tipo_serv[2]"> Medio </option>
						      <option name="tipo_serv[3]"> Ejecutivo </option>
						    </select>
					  	</div>
			        </div>
			    
			        <div class="input-field col s12">
			          	<div class="input-field col s12">
						    <select name="condominio" required>
						      <option disabled selected>Condominio</option>
						      	{!! $i= 1; !!}
						      	@foreach ($condominio as $condominios)
					    			<option name="condominio[{!! $i; !!}]"> {!! $condominios->nombre !!} </option>
					    			{!! $i++; !!}
					    		@endforeach
						    </select>
					  	</div>
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