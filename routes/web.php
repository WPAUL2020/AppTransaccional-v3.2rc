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

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register'); /**Formulario de Registro */
Route::post('register', 'Auth\RegisterController@register');

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/appl', 'applController@index')->name('appl');
 Route::get('/Contact', 'ContactController@Contact')->name('Contact');
 Route::get('/Productos', 'ProductosController@Productos')->name('Productos');
 Route::get('/Servicios1', 'ServiciosController@Servicios')->name('Servicios1');

 /**RUTAS DE CLIENTES */
 Route::post('clientes/guardar', 'ClientesController@guardar');/**Guardar el registro en base de datos */
 Route::get('Clientes', 'ClientesController@GestionClientes'); /**Vizualizar los clientes creados */
 Route::get('/Clientes/agregar', 'ClientesController@getFrmInsertEmpresa');/**Formulario de agregar Clientes */
 Route::post('GestionClientes/changeEmpresa/{ID_EMPRESA_TERCERO}' , "ClientesController@changeEmpresa");
 Route::get('GestionClientesEdit/updateEmpresa/{ID_EMPRESA_TERCERO}', 'ClientesController@updateEmpresa');

 /**RUTAS DE USUARIOS TERCERO*/
 Route::get('UsuariosTercero', 'EmpleadosTerceroController@mostrarEmpleadosTer'); /**Vizualizar los clientes creados */
 Route::get('/GesUserTerCrear/agregar', 'EmpleadosTerceroController@getFrmInsertTercero');/**Formulario de agregar Clientes */
 Route::post('GesUserTerCrear/guardar', 'EmpleadosTerceroController@guardar');/**Guardar el registro en base de datos */
 Route::post('GesUserTerVista/changeUser/{ID_EMPLEADO_TERCERO}' , "EmpleadosTerceroController@changeUser");
 Route::get('GesUserTerEdit/updateUser/{ID_EMPLEADO_TERCERO}', 'EmpleadosTerceroController@updateUser');

 /**RUTAS DE USUARIOS INTERNO*/
 Route::get('UsuariosInterno', 'EmpleadosInternoController@mostrarEmpleadosInt'); /**Vizualizar los clientes creados */
 Route::post('GestUserIntCrear/guardar', 'EmpleadosInternoController@guardar');/**Guardar el registro en base de datos */
 Route::get('/GestUserIntCrear/agregar','EmpleadosInternoController@getFrmInsertInterno');
 Route::post('GestUserIntVista/changeUser/{ID_EMPLEADO_INTERNO}' , "EmpleadosInternoController@changeUser");
 Route::get('GestUserIntEdit/updateUser/{ID_EMPLEADO_INTERNO}', 'EmpleadosInternoController@updateUser');

 /**RUTAS DE USUARIO */
 Route::get('RegistroUsuarios/guardar', 'RegistroUsuariosController@guardar');/**Guardar el registro en base de datos*/
 Route::get('EditarUsuarios/updateUser/{id}' , "GestionUserController@updateUser");
 Route::post('GestionUser/changeUser/{id}' , "GestionUserController@changeUser");
 Route::get('/GestionUser', 'GestionUserController@GestionUser')->name('GestionUser');/**Vizualizar los usuarios creados */
 Route::get('GestionUserEdit/updateUser/{id}', 'GestionUserController@updateUser');/**Vizualizar los usuarios creados */

 /**RUTAS DE EMAIL */
 Route::post('Mail/store', 'MailController@store');
 Route::post('/Mail', 'MailController@Mail')->name('Mail');

 //Register the typical reset password routes for an application.
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

 //Register the typical email verification routes for an application.
 Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
 Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
 Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

  /**RUTAS DE ROLES*/
  Route::get('Roles', 'RolController@mostrarRol'); /**Vizualizar los roles creados */
  Route::get('/RolCrear/agregar', 'RolController@getFrmInsertRol');/**Formulario de agregar Roles */
  Route::post('RolCrear/guardar', 'RolController@guardar');/**Guardar el registro en base de datos */

  /**RUTAS DE MEDIO DE PAGOS*/
  Route::get('MedioPagos', 'MedioPagoController@mostrarMedioPago'); /**Vizualizar los roles creados */
  Route::get('/MedioPagoCrear/agregar', 'MedioPagoController@getFrmInsertMedioPago');/**Formulario de agregar Roles */
  Route::post('MedioPagoCrear/guardar', 'MedioPagoController@guardar');/**Guardar el registro en base de datos */

  /**RUTAS DE CATEGORIA*/
  Route::get('Categorias', 'CategoriaController@mostrarCategoria'); /**Vizualizar los roles creados */
  Route::get('/CategoriaCrear/agregar', 'CategoriaController@getFrmInsertCategoria');/**Formulario de agregar Roles */
  Route::post('CategoriaCrear/guardar', 'CategoriaController@guardar');/**Guardar el registro en base de datos */

  /**RUTAS DE SERVICIO*/
  Route::get('Servicios', 'ServicioController@mostrarServicio'); /**Vizualizar los roles creados */
  Route::get('/ServicioCrear/agregar', 'ServicioController@getFrmInsertServicio');/**Formulario de agregar Roles */
  Route::post('ServicioCrear/guardar', 'ServicioController@guardar');/**Guardar el registro en base de datos */

 /**RUTAS DE CARGOS*/
 Route::get('Cargos', 'CargoController@mostrarCargo'); /**Vizualizar los cargo creados */
 Route::get('/CargoCrear/agregar', 'CargoController@getFrmInsertCargo');/**Formulario de agregar Cargo */
 Route::post('CargoCrear/guardar', 'CargoController@guardar');/**Guardar el registro en base de datos */

 /**RUTAS DE SECTOR*/
 Route::get('Sector', 'SectorEmpresaTerceroController@mostrarSector'); /**Vizualizar los sectores creados */
 Route::get('/SectEmprTerCrear/agregar', 'SectorEmpresaTerceroController@getFrmInsertSector');/**Formulario de agregar Sector */
 Route::post('SectEmprTerCrear/guardar', 'SectorEmpresaTerceroController@guardar');/**Guardar el registro en base de datos */


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Instahunter Routes()

Route::get('instahunters', ['as' => 'instahunters', 'uses' => 'instahuntersController@getFrmInstaHunter']);
Route::post('instahunters/instahunters', 'instahuntersController@postGuzzleRequest');/**Consumir API */
Route::get('instahunterview', ['as' => 'instahunterview', 'uses' => 'instahuntersController@getFrmInstaHunterview']);
Route::post('instahunterview', 'instahuntersController@getCsv');/**Download Data */
