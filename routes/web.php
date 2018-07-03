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
Route::get('/', ['as'=>'welcome',function () {

	return view('welcome');
}]);


Route::group(array( 'namespace' => 'Auth'), function(){
	
	Route::post('/register/enviar_codigo/{name}/{email}/{idUser}', ['as' => 'code_confirmation', 'uses' => 'RegisterController@send_code_confirmation']);

	Route::get('/register/verify/{code}', ['as' => 'verify', 'uses' => 'RegisterController@verify']);
});

Route::get('lang/{lang}', function ($lang) {
	session(['lang' => $lang]);
	return \Redirect::back();
})->where([
	'lang' => 'en|es'
]);







Route::group(['University'], function()
{
	Route::get('/registrar_estudiante', ['as'=>'university.register_students','uses'=> 'UniversityController@showCreateStudentsForm']);
	Route::post('/registrar_estudiante', ['as'=>'university.register_students','uses'=> 'UniversityController@createStudent']);


	//Route::get('/universidad',['as'=>'university.index','uses'=> 'UniversityController@index']);
	Route::post('/universidad',['as'=>'university.index','uses'=> 'UniversityController@index']);
	Route::put('/universidad',['as'=>'university.index','uses'=> 'UniversityController@index']);
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
