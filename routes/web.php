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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Client Simple Routes
Route::get('/logout', 'LogoutController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/client/add', 'ClientSimpleController@addClientSimple')->name('addClient');

Route::get('/client/edit/{id}', 'ClientSimpleController@edit')->name('editClient');

Route::post('/client/update', 'ClientSimpleController@update')->name('updateClient');

Route::get('/client/delete/{id}', 'ClientSimpleController@delete')->name('deleteClient');

Route::get('/client/getAll', 'ClientSimpleController@getAll')->name('getallClient');

Route::post('/client/persist', 'ClientSimpleController@persist')->name('persistclient');


//Compte Simple Routes
Route::get('/compte/addCompte', 'CompteSimpleController@addcompteSimple')->name('addCompte');

Route::get('/compte/editer/{id}', 'CompteSimpleController@editer')->name('editCompte');

Route::post('/compte/miseajour', 'CompteSimpleController@miseajour')->name('updateCompte');

Route::get('/compte/supprimer/{id}', 'CompteSimpleController@supprimer')->name('deleteCompte');

Route::get('/compte/lister', 'CompteSimpleController@lister')->name('getallCompte');

Route::post('/compte/ajouter', 'CompteSimpleController@ajouter')->name('ajouterCompte');


//Client Courant routes
Route::get('/clientcourant/ajouter', 'ClientCourantController@addClientCourant')->name('ajoutClientCourant');
//add client courant 
Route::post('/clientcourant/ajouter', 'ClientCourantController@persist')->name('addClientCourant');
//lister
Route::get('/clientCourant/getall', 'ClientCourantController@getAll')->name('getallCourant');


// Compte Courant Routes
Route::get('/comptecourant/ajouter', 'CompteCourantController@addCompteCourant')->name('ajoutCompteCourant');

Route::post('/comptecourant/ajouter', 'CompteCourantController@ajouter')->name('addCompteCourant');

Route::get('/comptecourant/lister', 'CompteCourantController@lister')->name('listCompteCourant');


//Client Bloque Routes 
Route::get('/clientbloque/ajouter', 'ClientBloqueController@addClientBloque')->name('ajoutClientBloque');
Route::post('/clientbloque/add', 'ClientBloqueController@ajouter')->name('addClientBloque');
Route::get('/clientBloque/lister', 'ClientBloqueController@lister')->name('listClientBloque');
//Compte Bloque
Route::get('/comptebloque/ajouter', 'CompteBloqueController@addCompteBloque')->name('ajoutCompteBloque');
Route::post('/comptebloque/add', 'CompteBloqueController@ajouter')->name('addCompteBloque');
Route::get('/compteBloque/lister', 'CompteBloqueController@lister')->name('listCompteBloque');
