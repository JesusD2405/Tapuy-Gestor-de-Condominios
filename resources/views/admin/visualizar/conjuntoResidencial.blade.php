@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Conj. Residenciales Registrados</h5>
		  	</div>

		      <table class="centered highlight">
		        <thead>
		          <tr>
		          	  <th data-field="nombre">Nombre</th>
		              <th data-field="Condominio">Condominio Asociado</th>
		              <th data-field="Num. de Casas">Num. de Casas</th>
		              <th data-field="Num. de Apartamentos">Num. de Apartamentos</th>
		              <th data-field="Num. de Toon House">Num. de Toon House</th>
		              <th data-field="Num. de Toon House">Num. de Titulares</th>
		          </tr>
		        </thead>

		        <tbody>
		        @foreach ($conjuntoResidencial as $conjuntoResidenciales)
		          <tr>
		            	<td>{{ $conjuntoResidenciales->nombre }}</td>
		            	<td>{{ $conjuntoResidenciales->condominio }}</td>
		            	<td>{{ $conjuntoResidenciales->cant_casas }}</td>
		            	<td>{{ $conjuntoResidenciales->cant_aptos }}</td>
		            	<td>{{ $conjuntoResidenciales->cant_thouse }}</td>
		            	<td>{{ $conjuntoResidenciales->cant_titulares }}</td>
		          </tr>
		        @endforeach

		      </table>
    	    
	    </div>
	</div>

@endsection