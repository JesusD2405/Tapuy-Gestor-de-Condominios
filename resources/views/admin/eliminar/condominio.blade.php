@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Seleccione El Condominio a Eliminar</h5>
		  	</div>

		    <form class="col s12" action="{{ url('admin/delete/condominio') }}" method="post">
		    	
		    	{{ csrf_field() }}
		      	
		      	<div class="row">

			        <div class="input-field col s12">
			         	<i class="material-icons prefix cyan-text">dialpad</i>
						<select name="rif" required>
						    <option disabled selected>Rif</option>
						    {!! $i= 1 !!}
						    @foreach ($condominio as $condominios)
					    		<option name="rif[{!! $i !!}]"> {!! $condominios->rif !!} </option>
					    		{!! $i++; !!}
					   		@endforeach
						</select>
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