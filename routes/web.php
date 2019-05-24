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
// Route par défaut
Route::get('/', function () {
    return view('welcome');
});

// Ma première route Laravel à la main. Emotion.
Route::get('/test', function () {
    return view('test');
});

// Route sans vue mais avec param dynamiques
Route::get('/coucou/{name}', function($name){
    return "coucou $name";
});

// Route nommée
Route::get('/nom', ['as' => 'nom', function() {
    return "coucou route nommée";
}]);

// Routes groupées
Route::group(['prefix' => 'admin'], function(){
    Route::get('/salut', function(){
      Return "Salut l'admin !";
    });
});

Route::get('/auth', ['middleware' => 'auth'], function() {
  Return "coucou";
});
