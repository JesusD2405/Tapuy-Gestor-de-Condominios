@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Titulares Registrados</h5>
		  	</div>

		      <table class="centered highlight">
		        <thead>
		          <tr>
		              <th data-field="Ci">Cedula</th>
		              <th data-field="Nombre">Nombre</th>
		              <th data-field="Apellido">Apellido</th>
		              <th data-field="Telefono">Telefono</th>
		              <th data-field="Tipo de Propiedad">Tipo de Propiedad</th>
		              <th data-field="Id Propiedad">Id Propiedad</th>
		              <th data-field="Condominio">Condominio</th>
		          </tr>
		        </thead>

		        <tbody>
		        @foreach ($titular as $titulares)
		          <tr>
		            	<td>{{ $titulares->ci }}</td>
		            	<td>{{ $titulares->nombre }}</td>
		            	<td>{{ $titulares->apellido }}</td>
		            	<td>{{ $titulares->telefono }}</td>
		            	<td>{{ $titulares->tipo_propiedad }}</td>
		            	<td>{{ $titulares->id_propiedad }}</td>
		            	<td>{{ $titulares->condominio }}</td>
		          </tr>
		        @endforeach

		      </table>
    	    
	    </div>
	</div>

@endsection