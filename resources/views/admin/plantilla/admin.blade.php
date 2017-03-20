<!DOCTYPE html>
<html>

    <head>
    	<title>Tapuy</title>
    	<link rel="shortcut icon" type="image/x-icon" href="../image/logo.png">
    	<meta name="author" content="Jesus David Perez, Daniel Rodriguez, Jhonny Rojas">
		<meta name="description" content="Gestor De Condominios">
    	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	    <!--Import materialize.css-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}" media="screen,projection">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylePrincipal.css') }}">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
    </head>

    <body>

	    
	  <section>
	  	
		  <nav>

		  	<!-- Dropdown Structure -->
			<ul id="dropdown1" class="dropdown-content">
			  	<li><a href="{{ url('admin/agregar/cuenta') }}">Crear Nueva</a></li>
			  	<li><a href="#">Modificar</a></li>
			</ul>

		    <div class="nav-wrapper green lighten-1">
		      	<a href="{{ url('admin/home') }}" class="brand-logo center">Tapuy</a>
		      	<ul id="nav-mobile" class="right hide-on-med-and-down">
		      		 <!-- Dropdown Trigger -->
      				<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Cuentas<i class="material-icons right">supervisor_account</i></a></li>
		        	<li><a href="/">Salir<i class="material-icons right">settings_power</i></a></li>
		      	</ul>
		    </div>
		  </nav>
        
	  </section>

	    <section>
	    	<div class="row">
	        	<br><br>
	        	<div class="col s12 m4 l3">
		        	<ul class="collapsible collapsible-accordion">
		            	<a class="collapsible-header waves-effect waves-teal"><i class="large material-icons">assignment_ind</i>Panel de Administracion</a>
		            	<li class="bold">
		            		<a class="collapsible-header waves-effect waves-teal"><i class="large material-icons">visibility</i>Visualizar</a>
		              		<div class="collapsible-body">
		                		<ul>
		                			<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/visualizar/empresa') }}">Empresa</a>
				                  	</li>
			                		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/visualizar/servicio') }}">Servicios</a>
				                  	</li>
			                  		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/visualizar/sucursal') }}">Sucursales</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/visualizar/condominio') }}">Condominios</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/visualizar/titular') }}">Residentes</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/visualizar/empleado') }}">Empleado</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/visualizar/centroComercial') }}">Centro Comercial</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/visualizar/conjuntoResidencial') }}">Conjunto Residencial</a>
				                  	</li>
		                		</ul>
		              		</div>
		            	</li>
		            	
		            	<li class="bold">
		            		<a class="collapsible-header waves-effect waves-teal"><i class="large material-icons">queue</i>Agregar</a>
		            		
		            		<div class="collapsible-body">
			                	<ul>
			                		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/agregar/empresa') }}">Empresa</a>
				                  	</li>
			                		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/agregar/servicio') }}">Servicios</a>
				                  	</li>
			                  		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/agregar/sucursal') }}">Sucursales</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/agregar/condominio') }}">Condominios</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/agregar/titular') }}">Residentes</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/agregar/empleado') }}">Empleado</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/agregar/centroComercial') }}">Centro Comercial</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/agregar/conjuntoResidencial') }}">Conjunto Residencial</a>
				                  	</li>
			                	</ul>
		              		</div>
		            	</li>

		            	<li class="bold">
		            		<a class="collapsible-header waves-effect waves-teal"><i class="large material-icons">mode_edit</i>Modificar</a>
		            		
		            		<div class="collapsible-body">
			                	<ul>
			                  		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/modificar/empresa') }}">Empresa</a>
				                  	</li>
			                		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/modificar/servicio') }}">Servicios</a>
				                  	</li>
			                  		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/modificar/sucursal') }}">Sucursales</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/modificar/condominio') }}">Condominios</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/modificar/titular') }}">Residentes</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/modificar/empleado') }}">Empleado</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/modificar/centroComercial') }}">Centro Comercial</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/modificar/conjuntoResidencial') }}">Conjunto Residencial</a>
				                  	</li>
			                	</ul>
		              		</div>
		            	</li>

		            	<li class="bold">
		            		<a class="collapsible-header waves-effect waves-teal"><i class="large material-icons">delete</i>Eliminar</a>
		            		
		            		<div class="collapsible-body">
			                	<ul>
			                  		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/eliminar/empresa') }}">Empresa</a>
				                  	</li>
			                		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/eliminar/servicio') }}">Servicios</a>
				                  	</li>
			                  		<li class="collapsible-header waves-effect waves-teal">
			                  			<a href="{{ url('admin/eliminar/sucursal') }}">Sucursales</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/eliminar/condominio') }}">Condominios</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/eliminar/titular') }}">Residentes</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/eliminar/empleado') }}">Empleado</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/eliminar/centroComercial') }}">Centro Comercial</a>
				                  	</li>
				                  	<li class="collapsible-header waves-effect waves-teal">
				                  		<a href="{{ url('admin/eliminar/conjuntoResidencial') }}">Conjunto Residencial</a>
				                  	</li>
			                	</ul>
		              		</div>
		            	</li>
		          	</ul>
		          	<div class="row">
		          		<img src="{{ asset('images/aguilaHarpia.png') }}" class="swing" id="aguilaHarpia">
		          	</div>
	        	</div>
	        	
	        	<div class="col s12 m4 l9" id="principal">

		       		<section>
		       			@yield('divPrincipal')
		       		</section>
		       </div>

	        </div>
	  	</section>

	    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
	    <script src="{{ asset('jquery/scriptPrincipal.js') }}"></script>
	    <script src="{{ asset('js/materialize.min.js') }}"></script>

    </body>

</html>