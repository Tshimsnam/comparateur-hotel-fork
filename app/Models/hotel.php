<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'province',
        'ville',
        'commune',
        'adresse',
        'boite_mail',
    ];

    public function chambre()
    {
        return $this->hasMany(Chambre::class);
    }
}
