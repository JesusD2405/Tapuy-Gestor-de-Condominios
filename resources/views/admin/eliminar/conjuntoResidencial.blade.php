@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Seleccione El Conjunto Residencial a Eliminar</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/delete/conjuntoResidencial') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">person_pin</i>
						<select name="nombreCResidencial" required>
						    <option disabled selected>Nombre</option>
						    {!! $i= 1; !!}
						    @foreach ($conjuntoResidencial as $conjuntoResidenciales)
					    		<option name="nombreCResidencial{$i}]"> {!! $conjuntoResidenciales->nombre !!} </option>
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