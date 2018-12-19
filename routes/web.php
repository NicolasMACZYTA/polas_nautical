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
Route::get('/admin', function() {
    return view('admin');
});
Route::get('/adminPlaces',function(){
    return view('adminPlaces');
});

Route::get('/proprietaire', function() {
    return view('proprietaire');
});
Route::get('/gestionnaire', function() {
    return view('gestionnaire');
});

Route::get('/utilisateur/deconnexion', 'UtilisateurController@deconnexion');

ROUTE::get('/utilisateur/connexion','UtilisateurController@verification');

Route::get('/utilisateur/creer', 'UtilisateurController@create');

ROUTE::resource('bateaux','BateauxController');

ROUTE::resource('utilisateur','UtilisateurController');

ROUTE::resource('emplacement','EmplacementController');

ROUTE::resource('port','PortController');


