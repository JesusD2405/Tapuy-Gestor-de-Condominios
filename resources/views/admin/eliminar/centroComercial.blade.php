@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Seleccione El Centro Comercial a Modificar</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/delete/centroComercial') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">person_pin</i>
						<select name="nombreCComercial" required>
						    <option disabled selected>Nombre</option>
						    {!! $i= 1; !!}
						    @foreach ($centroComercial as $centroComerciales)
					    		<option name="nombreCComercial[{!! $i !!}]"> {!! $centroComerciales->nombre !!} </option>
					    		{!! $i++; !!}
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