<?php

use App\Models\Vinyle;
use Illuminate\Support\Facades\Route;

route::get('/', function() {
    $vinyles = Vinyle::allVinyles();
    dd($vinyles);
    //dd($vinyles[0]); cible uniquement la 1ere entitée
});

Route::get('/home', function () {
    return view('home');
});

//affiche tous les vinyles
Route::get('/vinyles', function () {
    return view ('vinyles', [ 'vinyles' => Vinyle::allVinyles()]);
});

Route::get('/contact', function () {
    return view('contact');
});


//affichage de la page de détail de chaque vinyle
Route::get('/vinyles/{id}', function($id){
    $vinyles = Vinyle::allVinyles();
    $vinyle = Vinyle::find($id);

    return view('vinyle', ['vinyle' => $vinyle]);
});


//erreur 404 pour touts les autres pages
Route::get('/*' ,function(){
    return view('404');
});
