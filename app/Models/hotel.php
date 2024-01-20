<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nom',
        'province',
        'ville',
        'adresse',
        'boite_mail',
    ];

    public function chambre()
    {
        return $this->hasMany(Chambre::class);
    }
}
