@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">
			
			  	<div class="col s12">
			  		<h5 style="text-align: center;" class="cyan-text">Condominios Registrados</h5>
			  	</div>

			      <table class="centered highlight">
			        
			        <thead>
			          <tr>
			              <th data-field="id">Rif</th>
			              <th data-field="nombre">Nombre</th>
			              <th data-field="ciudad">Ciudad</th>
			              <th data-field="Estado">Estado</th>
			              <th data-field="Cant_CComerciales">Num. Centros Comerciales</th>
			              <th data-field="Cant_CResidenciales">Num. Conj. Residenciales</th>
			              <th data-field="Cant_Titulares">Num. Titulares</th>
			          </tr>
			        </thead>

			        <tbody>
			        @foreach ($condominio as $condominios)
			          <tr>
			            	<td>{{ $condominios->rif }}</td>
			            	<td>{{ $condominios->nombre }}</td>
			            	<td>{{ $condominios->ciudad }}</td>
			            	<td>{{ $condominios->estado }}</td>
			            	<td>{{ $condominios->cant_comerciales }}</td>
			            	<td>{{ $condominios->cant_residenciales }}</td>
			            	<td>{{ $condominios->cant_titulares }}</td>
			          </tr>
			        @endforeach

			      </table>

	</div>

@endsection