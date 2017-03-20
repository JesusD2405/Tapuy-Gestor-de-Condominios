@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  		<div class="col s12">
		  			<h5 style="text-align: center;" class="cyan-text">Seleccione La Sucursal a Eliminar</h5>
		  		</div>

		    <form class="col s12" action="{{ url('admin/delete/sucursal') }}" method="post">
		    	
		    	{{ csrf_field() }}
		 
		    	<div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">location_on</i>
						<select name="nombreEstado" required>
						    <option disabled selected>Estado</option>
						    { $i= 1}
						    @foreach ($sucursal as $sucursales)
					    		<option name="nombreEstado[{$i}]"> {{ $sucursales->estado }} </option>
					    		{$i++;}
					   		@endforeach
						</select>
					</div>

			    </div>

	  			<div class="row center">
					<button class="btn waves-effect waves-light cyan" type="submit">Eliminar
						<i class="large material-icons right">delete</i>
					</button>
		        </div>

		    </form>
	    </div>
	</div>

@endsection