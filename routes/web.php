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
    return view('home');
});

Auth::routes();
//Auth::loginUsingId(1);
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => '/'], function (){

	Route::get('home', ['as' => 'home', 'uses' => 'PagesController@home' ]);
	Route::get('sobrenos', ['as' => 'sobrenos', 'uses' => 'PagesController@sobrenos' ]);
	Route::get('contato', ['as' => 'contato', 'uses' => 'PagesController@contato' ]);
	Route::get('professores', ['as' => 'professores', 'uses' => 'PagesController@professores' ]);
	Route::get('materiais', ['as' => 'materiais', 'uses' => 'PagesController@materiais' ]);
	Route::get('cursos', ['as' => 'cursos', 'uses' => 'PagesController@cursos' ]);
	Route::get('cursos/detalhe/{curso}', ['as' => 'cursos.detalhes', 'uses' => 'PagesController@Detalhes' ]);

});



// , 'middleware' => ['autoridade']


Route::group(['prefix' => 'restrito'], function (){

	Route::get('home', function(){

		return view('home');
	});






	Route::resource('curso','CursoController');
	Route::resource('materia','MateriaController');
	Route::resource('aula','AulaController');
	Route::resource('material','MaterialController');


});



Route::get('materiais/{slug}', [
    'as' => 'materiais.show',
    'uses' => 'MaterialController@show',
    'middleware' => 'auth',
]);