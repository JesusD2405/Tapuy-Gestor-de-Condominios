<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Login */

Route::get('/', function () {
    return view('index');
});

/* Validacion de Login */

Route::post('login',[
	
	'uses' => 'LoginController@validar',
	'as'   => 'login'	
]);


				/* Vistas Admin */

Route::prefix('admin') -> group(function() {


	/* Pagina Principal */

		Route::name('admin.home')->get('home','LoginController@principal');



	/* Cuenta */

		//Agregar
		Route::name('agregar.cuenta')->get('agregar/cuenta','CuentaController@agregar');

		Route::name('add.cuenta')->post('add/cuenta','CuentaController@create');

		//Modificar
		Route::name('modificar.cuenta')->get('modificar/cuenta','CuentaController@modificar');

		Route::name('update.cuenta')->post('update/cuenta','CuentaController@update');



	/* Empresa */

		//Visualizar
		Route::name('visualizar.empresa')->get('visualizar/empresa','EmpresaController@visualizar');

		//Agregar
		Route::name('agregar.empresa')->get('agregar/empresa','EmpresaController@agregar');

		Route::name('add.empresa')->post('add/empresa','EmpresaController@create');

		//Modificar
		Route::name('modificar.empresa')->get('modificar/empresa','EmpresaController@modificar');

		Route::name('update.empresa')->post('update/empresa','EmpresaController@update');

		//Eliminar
		Route::name('eliminar.empresa')->get('eliminar/empresa','EmpresaController@eliminar');

		Route::name('delete.empresa')->post('delete/empresa','EmpresaController@delete');



	/* Servicio */

		//Visualizar
		Route::name('visualizar.servicio')->get('visualizar/servicio','ServicioController@visualizar');

		//Agregar
		Route::name('agregar.servicio')->get('agregar/servicio','ServicioController@agregar');

		Route::name('add.servicio')->post('add/servicio','ServicioController@create');

		//Modificar
		Route::name('modificar.servicio')->get('modificar/servicio','ServicioController@modificar');

		Route::name('update.servicio')->post('update/servicio','ServicioController@update');

		//Eliminar
		Route::name('eliminar.servicio')->get('eliminar/servicio','ServicioController@eliminar');

		Route::name('delete.servicio')->post('delete/servicio','ServicioController@delete');



	/* Sucursal */

		//Visualizar
		Route::name('visualizar.sucursal')->get('visualizar/sucursal','SucursalController@visualizar');

		//Agregar
		Route::name('agregar.sucursal')->get('agregar/sucursal','SucursalController@agregar');

		Route::name('add.sucursal')->post('add/sucursal','SucursalController@create');

		//Modificar
		Route::name('modificar.sucursal')->get('modificar/sucursal','SucursalController@modificar');

		Route::name('update.sucursal')->post('update/sucursal','SucursalController@update');

		//Eliminar
		Route::name('eliminar.sucursal')->get('eliminar/sucursal','SucursalController@eliminar');

		Route::name('delete.sucursal')->post('delete/sucursal','SucursalController@delete');	



	/* Condominio */

		//Visualizar
		Route::name('visualizar.condominio')->get('visualizar/condominio','CondominioController@visualizar');

		//Agregar
		Route::name('agregar.condominio')->get('agregar/condominio','CondominioController@agregar');

		Route::name('add.condominio')->post('add/condominio','CondominioController@create');

		//Modificar
		Route::name('modificar.condominio')->get('modificar/condominio','CondominioController@modificar');

		Route::name('update.condominio')->post('update/condominio','CondominioController@update');

		//Eliminar
		Route::name('eliminar.condominio')->get('eliminar/condominio','CondominioController@eliminar');

		Route::name('delete.condominio')->post('delete/condominio','CondominioController@delete');



	/* Residente */

		//Visualizar
		Route::name('visualizar.titular')->get('visualizar/titular','TitularController@visualizar');

		//Agregar
		Route::name('agregar.titular')->get('agregar/titular','TitularController@agregar');

		Route::name('add.titular')->post('add/titular','TitularController@create');

		//Modificar
		Route::name('modificar.titular')->get('modificar/titular','TitularController@modificar');

		Route::name('update.titular')->post('update/titular','TitularController@update');

		//Eliminar
		Route::name('eliminar.titular')->get('eliminar/titular','TitularController@eliminar');

		Route::name('delete.titular')->post('delete/titular','TitularController@delete');



	/* Empleado */

		//Visualizar
		Route::name('visualizar.empleado')->get('visualizar/empleado','EmpleadoController@visualizar');

		//Agregar
		Route::name('agregar.empleado')->get('agregar/empleado','EmpleadoController@agregar');

		Route::name('add.empleado')->post('add/empleado','EmpleadoController@create');

		//Modificar
		Route::name('modificar.empleado')->get('modificar/empleado','EmpleadoController@modificar');

		Route::name('update.empleado')->post('update/empleado','EmpleadoController@update');

		//Eliminar
		Route::name('eliminar.empleado')->get('eliminar/empleado','EmpleadoController@eliminar');

		Route::name('delete.empleado')->post('delete/empleado','EmpleadoController@delete');



	/* Centro Comercial */

		//Visualizar
		Route::name('visualizar.centroComercial')
			->get('visualizar/centroComercial','C_ComercialController@visualizar');

		//Agregar
		Route::name('agregar.centroComercial')
			->get('agregar/centroComercial','C_ComercialController@agregar');

		Route::name('add.centroComercial')
			->post('add/centroComercial','C_ComercialController@create');

		//Modificar
		Route::name('modificar.centroComercial')
			->get('modificar/centroComercial','C_ComercialController@modificar');

		Route::name('update.centroComercial')
			->post('update/centroComercial','C_ComercialController@update');

		//Eliminar
		Route::name('eliminar.centroComercial')
			->get('eliminar/centroComercial','C_ComercialController@eliminar');

		Route::name('delete.centroComercial')
			->post('delete/centroComercial','C_ComercialController@delete');



	/* Conjunto Residencial */

		//Visualizar
		Route::name('visualizar.conjuntoResidencial')
			->get('visualizar/conjuntoResidencial','C_ResidencialController@visualizar');

		//Agregar
		Route::name('agregar.conjuntoResidencial')
			->get('agregar/conjuntoResidencial','C_ResidencialController@agregar');

		Route::name('add.conjuntoResidencial')
			->post('add/conjuntoResidencial','C_ResidencialController@create');

		//Modificar
		Route::name('modificar.conjuntoResidencial')
			->get('modificar/conjuntoResidencial','C_ResidencialController@modificar');

		Route::name('update.conjuntoResidencial')
			->post('update/conjuntoResidencial','C_ResidencialController@update');

		//Eliminar
		Route::name('eliminar.conjuntoResidencial')
			->get('eliminar/conjuntoResidencial','C_ResidencialController@eliminar');

		Route::name('delete.conjuntoResidencial')
			->post('delete/conjuntoResidencial','C_ResidencialController@delete');

});