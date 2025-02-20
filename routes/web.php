<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinylController;

//par défaut
Route::view('/home', 'welcome');


Route::view('/contact', 'contact');

//erreur 404 pour touts les autres pages
Route::view('/*' , '404');

//vinyl all
//Route::controller(VinylController::class)->group(function() {
//    Route::get('/vinyls', 'index');
//    //montre un vinyle
//    Route::get('/vinyls', 'show');
//    //crée
//    Route::get('/vinyls', 'create');
//    //store
//    Route::get('/vinyls', 'store');
//    //edit
//    Route::get('/vinyls', 'edit');
//    //update
//    Route::get('/vinyls', 'update');
//    //destroy
//    Route::get('/vinyls', 'destroy');
//});


//optimisation en une seule ligne
Route::ressource('vinyls', VinylController::class);
