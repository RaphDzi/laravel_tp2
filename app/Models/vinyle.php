<?php

namespace App\Models;

use illuminate\Support\Arr;

class Vinyle
{
    public static function all() : array
    {
        return
        [
            [
                'id' => 1,
                'nom' => 'Pink Floyd - The Dark Side of the Moon',
                'prix' => 25,
                'description' => 'Un classique du rock psychédélique.'
            ],
            [
                'id' => 2,
                'nom' => 'The Beatles - Abbey Road',
                'prix' => 30,
                'description' => 'L\'album iconique avec la célèbre pochette.'
            ],
            [
                'id' => 3,
                'nom' => 'Nirvana - Nevermind',
                'prix' => 28,
                'description' => 'L\'album grunge emblématique des années 90.'
            ],
            [
                'id' => 4,
                'nom' => 'Daft Punk - Random Access Memories',
                'prix' => 35,
                'description' => 'Un chef-d\'œuvre électro aux sons futuristes.'
            ],
            [
                'id' => 5,
                'nom' => 'Michael Jackson - Thriller',
                'prix' => 40,
                'description' => 'L\'album le plus vendu de tous les temps.'
            ],
            [
                'id' => 6,
                'nom' => 'Queen - A Night at the Opera',
                'prix' => 27,
                'description' => 'Contient le légendaire "Bohemian Rhapsody".'
            ]
        ];
    }


    public static function find($id) : array
    {
        $vinyle =  Arr::first(Vinyle::all(), fn($vinyle) => $vinyle['id'] == $id);

        if (!$vinyle) {
            abort(404);
        }
        return $vinyle;
    }
}
