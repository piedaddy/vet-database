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
    return view('welcome');
});

Route::post('/pets', 'PetController@search');
Route::get('/pets', 'PetController@index');
Route::get('/pets/show/{id}', 'PetController@show');
Route::get('/pets/edit/{id}', 'PetController@edit');
Route::post('/pets/edit/{id}', 'PetController@update');
Route::delete('/pets/{id}', 'PetController@delete'); 

Route::get('/pets/create', 'PetController@create');
// Route::post('/pets/show/{id}', 'PetController@show');



//for the form
Route::get('/pets/visits', 'VisitController@index');
//for the submit
Route::post('/pets/visits', 'VisitController@create');




Route::get('/owners', 'OwnerController@index');
Route::get('/owner/{id}', 'OwnerController@show');



