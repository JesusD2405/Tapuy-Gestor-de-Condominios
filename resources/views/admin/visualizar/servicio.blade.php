@extends('admin.plantilla.admin')

@section('divPrincipal')
	
	<br>

	<div class="white">

		<div class="row container">
			
		  	<div class="col s12">
		  		<h5 style="text-align: center;" class="cyan-text"> Servicios Privados Asociados</h5>
		  	</div>

		      <table class="centered highlight">
		        <thead>
		          <tr>
		              <th data-field="Servicio">Servicio</th>
		              <th data-field="Condominio">Condominio Asociado</th>
		              <th data-field="Tipo_Servicio">Tipo de Servicio</th>
		          </tr>
		        </thead>

		        <tbody>
		        @foreach ($servicio as $servicios)
		          <tr>
		            	<td>{{ $servicios->servicio }}</td>
		            	<td>{{ $servicios->condominio }}</td>
		            	<td>{{ $servicios->tipo_serv }}</td>
		          </tr>
		        @endforeach

		      </table>
    	    
	    </div>
	</div>

@endsection