<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;

class Vinyl extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_year',
        'label',
        'artist_id',
        'description',
    ];
    // un vinyle peut avoir plusieurs commentaires
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // un vinyles appartient à un seul artiste
    public function artists()
    {
        return $this->belongsTo(Artist::class);
    }
}
