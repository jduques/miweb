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
    return view('index');
});

Route::get('articles', function() {
	echo "Articulos";
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', 'UsersController@destroy')->name('users.destroy');

	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', 'CategoriesController@destroy')->name('categories.destroy');

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', 'TagsController@destroy')->name('tags.destroy');

	Route::resource('articles', 'ArticlesController');
	Route::get('articles/{id}/destroy', 'ArticlesController@destroy')->name('articles.destroy');

});

Auth::routes();

//Route::get('/login', "Auth\LoginController@getLogin")->name('login');
//Route::post('/login', "MiAuthController@posLogin")->name('login');
//Route::get('/logout', "MiAuthController@getlogout")->name('logout');

Route::get('/home', 'HomeController@index')->name('index');
