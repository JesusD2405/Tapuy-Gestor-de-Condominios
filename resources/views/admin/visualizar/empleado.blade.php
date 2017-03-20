@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Empleados Registrados</h5>
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
		              <th data-field="Sucursal">Sucursal</th>
		          </tr>
		        </thead>

		        <tbody>
		        @foreach ($empleado as $empleados)
		          <tr>
		            	<td>{{ $empleados->ci }}</td>
		            	<td>{{ $empleados->nombre }}</td>
		            	<td>{{ $empleados->apellido }}</td>
		            	<td>{{ $empleados->telefono }}</td>
		            	<td>{{ $empleados->tipo_propiedad }}</td>
		            	<td>{{ $empleados->id_propiedad }}</td>
		            	<td>{{ $empleados->sucursal }}</td>
		          </tr>
		        @endforeach

		      </table>
    	    
	    </div>
	</div>

@endsection