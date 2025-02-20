<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vinyl;

class VinylController extends Controller
{
    //affiche tous les vinyles
    public function index(){
        $vinyls = Vinyl::with('artists')->latest()->paginate(3);

        return view('vinyls', ['vinyls' => $vinyls]);
    }

    //crée un vinyle
    public function create(){
        return view('vinyls.create');
    }

    //montre un vinyle selon son id
    public function show($vinyl){
        return view('vinyls.show', ['vinyl' => $vinyl]);
    }


    public function store($vinyl){
        Vinyl::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/vinyls/'.$vinyl->id);
    }

    public function edit($vinyl){
        return view('vinyls.edit', ['vinyl' => $vinyl]);
    }

    //mettre à jour un vinyle
    public function update(Vinyl $vinyl){
        request()->validate([
            'title' => 'required',
            'salary' => 'required',
        ]);

        return redirect('/vinyls/'.$vinyl->id);
    }


    public function destroy($vinyl){
        $vinyl->delete();
        return redirect('/vinyls');
    }
}
