<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nom', 'editeur', 'genre'];

    public function pokemons() {
        return $this->belongsToMany(Pokemons::class, 'versions')
            ->as('versions')
            ->withPivot('numero', 'date_sortie');
    }
}
