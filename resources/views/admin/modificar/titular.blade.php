@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Seleccione el Titular a Modificar</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/update/titular') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">account_circle</i>
						<select name="ci" required>
						    <option disabled selected>Cedula</option>
						    {!! $i= 1; !!}
						    @foreach ($titular as $titulares)
					    		<option name="ci [{!! $i !!}]"> {!! $titulares->ci !!} </option>
					    		{!! $i++; !!}
					   		@endforeach
						</select>
					</div>
			       
			    </div>

			    <div class="row">

			    	<h5 style="text-align: center;" class="cyan-text"> Datos Personales</h5>
			        
			        <div class="input-field col s12 m6">
			        	<i class="material-icons prefix cyan-text">dialpad</i>
			          	<input name="nuevaCi" type="text" class="validate" required>
			          	<label for="nuevaCi">Cedula</label>
			        </div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">phone</i>
			          	<input name="tlf" type="text" class="validate" required>
			          	<label for="tlf">Numero de Telefono</label>
			        </div>
			        
			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">account_circle</i>
			          	<input name="nombre" type="text" class="validate" required>
			          	<label for="nombre">Nombres</label>
			        </div>
			    
			        <div class="input-field col s6">
			          	<input name="apellido" type="text" class="validate" required>
			          	<label for="apellido">Apellidos</label>
			        </div>

			    </div>

			    <div class="row">
			        
			        <h5 style="text-align: center;" class="cyan-text"> Detalles y Ubicacion de Vivienda</h5>
			      
			        <div class="row">
				        
				        <div class="input-field col s6">
				        	<i class="material-icons prefix cyan-text">store</i>
				          	<input name="id" type="text" class="validate" required>
				          	<label for="id">Numero de Residencia</label>
				        </div>
				        
				        <div class="input-field col s6">
						    <select name="tipo_propiedad" required>
						      	<option  disabled selected>Tipo de propiedad</option>
						      	<option name="tipo_propiedad[1]"> Casa </option>
						      	<option name="tipo_propiedad[2]"> Apartamento </option>
						      	<option name="tipo_propiedad[3]"> Toon House </option>
						    </select>
					  	</div>
				    
				    </div>

				    <div class="input-field col s12">
				    	<i class="material-icons prefix cyan-text">location_on</i>
			          	<input name="direccion" type="text" class="validate" required>
			          	<label for="direccion">Direccion</label>
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