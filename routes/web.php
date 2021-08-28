<?php

use Illuminate\Support\Facades\Route;

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
    return view('PaginaWeb.Inicio');
});
Route::get('/Productos-Servicios', function () {
    return view('PaginaWeb.Productos-Servicios');
});
Route::get('/SobreNosotros', function () {
    return view('PaginaWeb.SobreNosotros');
});
Route::get('/Cobertura', function () {
    return view('PaginaWeb.Cobertura');
});
Route::get('/Contacto', function () {
    return view('PaginaWeb.Contacto');
});
Route::get('/Productos-Servicios/tecnologia', function () {
    return view('PaginaWeb.Tecnologia');
});
Route::get('/Productos-Servicios/servicios', function () {
    return view('PaginaWeb.Servicio');
});
Route::get('/terminos', function () {
    return view('PaginaWeb.Terminos');
});
Route::get('/politica', function () {
    return view('PaginaWeb.Politica');
});
Route::post('Telcobras/Soporte','MailController@MailSoporte');
Route::post('Telcobras/Contacto','MailController@MailContacto');