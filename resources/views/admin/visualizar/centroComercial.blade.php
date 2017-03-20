@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text">Centros Comerciales Registrados</h5>
		  	</div>

		      <table class="centered highlight">
		        <thead>
		          <tr>
		          	  <th data-field="nombre">Nombre</th>
		              <th data-field="Condominio">Condominio Asociado</th>
		              <th data-field="Num. de Tiendas">Num. de Tiendas</th>
		              <th data-field="Num. de Locales">Num. de Locales</th>
		              <th data-field="Cantidad de Titulares">Num. de Titulares Asociados</th>
		          </tr>
		        </thead>

		        <tbody>
		        @foreach ($centroComercial as $centroComerciales)
		          <tr>
		            	<td>{{ $centroComerciales->nombre }}</td>
		            	<td>{{ $centroComerciales->condominio }}</td>
		            	<td>{{ $centroComerciales->cant_mtiendas }}</td>
		            	<td>{{ $centroComerciales->cant_locales }}</td>
		            	<td>{{ $centroComerciales->cant_titulares }}</td>
		          </tr>
		        @endforeach

		      </table>
    	    
	    </div>
	</div>

@endsection