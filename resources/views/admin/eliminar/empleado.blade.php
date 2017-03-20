@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Seleccione el Empleado a Eliminar</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/delete/empleado') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">
			        
			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">business</i>
						<select name="ci" !! re !!quired>
						    <option disabled selected>Cedula</option>
						    {!! $i= 1; !!}
						    @foreach ($empleado as $empleados)
					    		<option name="ci[{!! $i !!}]"> {!! $empleados->ci !!} </option>
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