@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Empresas Registradas</h5>
		  	</div>

		      <table class="centered highlight">
		        <thead>
		          <tr>
		              <th data-field="id">Rif</th>
		              <th data-field="nombre">Nombre</th>
		              <th data-field="ciudad">Ciudad</th>
		              <th data-field="Estado">Estado</th>
		              <th data-field="Tipo_Servicio">Tipo de Servicio</th>
		              <th data-field="Nomina">Nomina</th>
		          </tr>
		        </thead>

		        <tbody>
		        @foreach ($empresa as $empresas)
		          <tr>
		            	<td>{{ $empresas->rif }}</td>
		            	<td>{{ $empresas->nombre }}</td>
		            	<td>{{ $empresas->ciudad }}</td>
		            	<td>{{ $empresas->estado }}</td>
		            	<td>{{ $empresas->tipo_servicio }}</td>
		            	<td>{{ $empresas->nomina }}</td>
		          </tr>
		        @endforeach

		      </table>
    	    
	    </div>
	</div>

@endsection