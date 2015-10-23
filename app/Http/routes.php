<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

Route::get('/', function () {
    return view('welcome');
});
//Filtros Admin
Route::filter('is_admin', function()
{
    if(Auth::user()->type != 'Admin' ) return Redirect::to('/');
});
Route::group(['before' => 'is_admin', 'prefix'=> 'admin', 'namespace' => 'Admin'], function()
{
    Route::get('home', 'GeneralController@index');
    Route::get('reportes', 'ReportesController@index');
    Route::post('save_reportes', 'ReportesController@save');
    Route::get('usuarioreportes', 'ReportesController@usuarios');
    Route::get('find', 'ReportesController@buscar');
    Route::post('reportes/guardarusuario', 'ReportesController@saveUsuarios');
    Route::resource('excel','ExcelController');
});
//Filtros Cursante
Route::filter('is_cursante', function()
{
    if(Auth::user()->type != 'Cursante' ) return Redirect::to('/');
});
Route::group(['before' => 'is_cursante', 'prefix'=> 'cursante', 'namespace' => 'Cursante'], function()
{
    Route::get('home', 'CursanteController@index');
});
//FIltros Tutor
Route::filter('is_tutor', function()
{
    if(Auth::user()->type != 'Tutor' ) return Redirect::to('/');
});
Route::group(['before' => 'is_tutor', 'prefix'=> 'tutor', 'namespace' => 'Tutor'], function()
{
    Route::get('home', 'TutorController@index');
});
Route::group(['prefix'=> 'sistema', 'namespace' => 'Sistema'], function()
{
    Route::get('succes', 'LoginController@loginExitoso');
    Route::get('nuevotrabajo', 'TrabajoController@nuevoTrabajo');
    Route::get('find', 'TrabajoController@buscar');
    Route::post('guardar', 'TrabajoController@save');
    Route::get('ListaTrabajos', 'TrabajoController@listadoTrabajos');
    Route::get('MisTrabajos', 'TrabajoController@misTrabajos');
    Route::get('ListaRevision', 'SeguimientoController@ListaRevision');
    Route::get('revision/tutor/{id}', 'SeguimientoController@seguimientoTutor');
    Route::get('revision/cursante/{id}', 'SeguimientoController@seguimientoCursante');
    Route::post('revision/guardar', 'SeguimientoController@saveRevision');
    Route::get('storage/{archivo}', function ($archivo) {
        $url = storage_path('app/').$archivo;
        //verificamos si el archivo existe y lo retornamos
        if (\Illuminate\Support\Facades\Storage::exists($archivo))
        {
            return response()->download($url);
        }
        //si no se encuentra lanzamos un error 404.
        abort(404);

    });
    Route::get('storage/Documentacion/{archivo}', function ($archivo) {
        $public_path = public_path();
        $url = $public_path.'/storage/'.$archivo;
        //verificamos si el archivo existe y lo retornamos
        if (Storage::exists($archivo))
        {
            return response()->download($url);
        }
        //si no se encuentra lanzamos un error 404.
        abort(404);

    });
});
//CALENDARIO
Route::group(['prefix'=> 'calendar', 'namespace' => 'Calendar'], function() {
    route::get('calendar', 'FullCalendarController@getCalendar');
    route::get('calendar/number', 'FullCalendarController@getNumberEvents');
    Route::post('calendar/getcalendar', 'FullCalendarController@calendarevents');
    Route::post('getModified', 'FullCalendarController@getModified');
    Route::get('find', 'FullCalendarController@buscar');
});