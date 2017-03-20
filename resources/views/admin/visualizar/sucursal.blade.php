@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Sucursales Registradas</h5>
		  	</div>

		      <table class="centered highlight">
		        <thead>
		          <tr>
		              <th data-field="id">Id</th>
		              <th data-field="Estado">Estado</th>
		              <th data-field="ciudad">Ciudad</th>
		          </tr>
		        </thead>

		        <tbody>
		        @foreach ($sucursal as $sucursales)
		          <tr>
		            	<td>{{ $sucursales->id }}</td>
		            	<td>{{ $sucursales->estado }}</td>
		            	<td>{{ $sucursales->ciudad }}</td>
		          </tr>
		        @endforeach

		      </table>
    	    
	    </div>
	</div>

@endsection