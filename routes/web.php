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

//Route::get('/', function () {
  // return view('welcome');
//});

// Exécution de la méthode index
Route::get('/',"Shop\MainController@index")->name('homepage');

// Execution de la méthode produit
Route::get('/produit/{id}','Shop\MainController@produit')->name('voir_produit');

// Exécution de la méthode category
Route::get('/categorie/{id}','Shop\MainController@viewByCategory')->name('voir_produits_par_cat');

// exécution de la méthode tag
Route::get('/tag/{id}','Shop\MainController@viewByTag')->name('voir_produits_par_tag');

// Exécution de la méthode panier
Route::post('/panier/add{id}','Shop\CartController@add')->name('cart_add');

Route::get('/panier','Shop\CartController@index')->name('cart_index');

