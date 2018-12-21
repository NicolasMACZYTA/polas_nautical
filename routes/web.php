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
    return view('accueil');
});

Route::get('/port/supprimer/{id}', ['as' => 'id','uses' =>'PortController@supprimer']);

Route::get('/port/destroy/{id}', ['as' => 'id','uses' =>'PortController@destroy']);

Route::get('/utilisateur/deconnexion', 'UtilisateurController@deconnexion');

ROUTE::get('/utilisateur/connexion','UtilisateurController@verification');

Route::get('/utilisateur/creer', 'UtilisateurController@create');

Route::get('/utilisateur/panneau', 'UtilisateurController@show');

Route::get('/bateau/creer', 'BateauxController@create');

Route::get('/bateau/supprimer', 'BateauxController@destroy');

Route::get('/port/creer', 'PortController@create');

ROUTE::resource('bateaux','BateauxController');

ROUTE::resource('utilisateur','UtilisateurController');

ROUTE::resource('emplacement','EmplacementController');

ROUTE::resource('port','PortController');


