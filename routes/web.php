<?php

use App\Models\Vinyle;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});

//affiche tous les vinyles
Route::get('/vinyles', function () {
    return view ('vinyles', [ 'vinyles' => Vinyle::all()]);
});

Route::get('/contact', function () {
    return view('contact');
});


//affichage de la page de détail de chaque vinyle
Route::get('/vinyles/{id}', function($id){
    $vinyles = Vinyle::all();
    $vinyle = Vinyle::find($id);

    return view('vinyle', ['vinyle' => $vinyle]);
});


//erreur 404 pour touts les autres pages
Route::get('/*' ,function(){
    return view('404');
});
