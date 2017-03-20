@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="container">
			
		  <div class="row">
		  	<div class="col s12 center">
		  		<h5 class="cyan-text">Datos de la Sucursal</h5>
		  	</div>
		  	<br>

		    <form class="col s12" action="{{ url('admin/add/sucursal') }}" method="post">
		    
		    {{ csrf_field() }}

		      	<div class="row">

		      		<div class="input-field col s6">
		      			<i class="material-icons prefix cyan-text">location_on</i>
			          	<input name="estado" type="text" class="validate" required>
			          	<label for="estado">Estado</label>
			        </div>
			        
			        <div class="input-field col s6">
			        	<i class="material-icons prefix cyan-text">my_location</i>
			          	<input name="ciudad" type="text" class="validate" required>
			          	<label for="ciudad">Ciudad</label>
			        </div>

	  				<div class="row center">
					  	<button class="btn waves-effect waves-light cyan" type="submit">Guardar
						<i class="large material-icons right">done</i>
						</button>
		        	</div>
		        </div>
		    </form>
		  </div>
	    </div>
	</div>

@endsection