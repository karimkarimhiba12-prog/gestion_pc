<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    protected $fillable = [
    'numero_serie',
    'modele',
    'etat',
    'emplacement',
    'user_id',
];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}