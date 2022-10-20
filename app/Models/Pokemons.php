<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemons extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'extension',
        'vie',
        'type',
        'faiblesse',
        'degat',
        'url_media'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function jeu() {
        return $this->belongsToMany(Jeu::class, 'versions')
            ->as('versions')
            ->withPivot('numero', 'date_sortie');
    }
}
