<!DOCTYPE html>
<html>
    <head>
    	<title>Tapuy</title>
    	<link rel="shortcut icon" type="image/x-icon" href="../image/logo.png">
    	<meta name="author" content="Jesus David Perez">
		<meta name="description" content="Gestor De Condominios">
    	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	    <!--Import materialize.css-->
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}" media="screen,projection">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleindex.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('sweetalert/dist/sweetalert.css') }}">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
    </head>

    <body>

    <nav>
        <div class="nav-wrapper green lighten-1">
            <a href="#" class="brand-logo center" id="navTitulo">Gestor de Condominios</a>
        </div>
    </nav>

    <div class="parallax-container">
        <div class="parallax"><img id="fondo" src="{{ asset('images/tapuy-login1.jpg') }}"></div>

        <div class="row container">
            <br><br><br><br><br>
            
            <div class="col s12 m4">
                <!-- Logotipo de Tapuy Gestor de Condominios -->
                <img src="{{ asset('images/Tapuy.png') }}" class="tapuyLogo">
            </div>

            <div class="col s12 m4">
                <form action="login" method="post">
                    {{ csrf_field() }}

                    <div class="input-field col s12">
                        <i class="material-icons prefix brown-text">account_circle</i>
                        <input id="User" name="user" type="text" class="validate" required>
                        <label for="User">User</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix brown-text">vpn_key</i>
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="row">
                        <div class="row col s12 center">                  
                            <button class="btn waves-effect waves-light" type="submit">Entrar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col s12 m4 flow-text">
                <!-- Imagen de Acceso -->
                <img src="{{ asset('images/guacamaya.png') }}" class="guacamaya">
            </div>

            <script src="{{ asset('sweetalert/dist/sweetalert.min.js') }}"></script>
            <!-- Include this after the sweet alert js file -->
            @include('sweet::alert')
        
        </div>
  
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('jquery/scriptIndex.js') }}"></script>
        <script src="{{ asset('js/materialize.min.js') }}"></script>

    </body>

</html>