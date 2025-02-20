<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistFactory> */
    use HasFactory;

    // un artiste peut avoir plusieurs vinyles
    public function vinyls()
    {
        return $this->hasMany(Vinyl::class);
    }
    // un artiste peut avoir plusieurs commentaires
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
