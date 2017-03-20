@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="container">
			
		  <div class="row">

		  	<div class="col s12 center">
		  		<h5 class="cyan-text">Crear Cuenta Nueva</h5>
		  	</div>
		  	<br>

		    <form class="col s12" action="{{ url('admin/add/cuenta') }}" method="post">

		    	{{ csrf_field() }}
		      	
		      	<div class="row">

				  	<div class="row">

				  		<div class="input-field col s12">
				  			<i class="material-icons prefix brown-text">person_pin</i>
						    <select name="rol" required>
						      	<option  disabled selected>Rol</option>
						      	<option name="rol[1]"> Administrador </option>
						      	<option name="rol[2]"> Gerente </option>
						      	<option name="rol[3]"> Socio </option>
						    </select>
					  	</div>

				  		<div class="input-field col s6">
				        	<i class="material-icons prefix brown-text">account_circle</i>
				          	<input name="nombre" type="text" class="validate" required>
				          	<label for="nombre">Nombres</label>
			        	</div>
			    
			       		<div class="input-field col s6">
				          	<input name="apellido" type="text" class="validate" required>
				          	<label for="apellido">Apellidos</label>
			        	</div>

				  	</div>

				  	<div class="col s12">
				  		<h5 style="text-align: center;" class="cyan-text">Datos De La Cuenta</h5>
				  	</div>

				  	<div class="row">

			      		<div class="input-field col s6">
			      			<i class="material-icons prefix brown-text">account_circle</i>
				          	<input name="user" type="text" class="validate" required>
				          	<label for="user">User</label>
				        </div>
				        
				        <div class="input-field col s6">
				        	<i class="material-icons prefix brown-text">vpn_key</i>
				          	<input name="password" type="password" class="validate" required>
				          	<label for="password">Password</label>
				        </div>

				    </div>

	  				<div class="row center">
					  	<button class="btn waves-effect waves-light cyan" type="submit">Crear Cuenta
						<i class="large material-icons right">done</i>
						</button>
		        	</div>
		        </div>

		    </form>

		  </div>

	    </div>

	</div>

@endsection