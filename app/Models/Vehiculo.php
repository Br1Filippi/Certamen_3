<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';

    public $timestamps =false;


    // Relacion de vehiculos a tipo 
    public function tipos():BelongsTo{
        return $this->belongsTo(Tipo::class);
    }

    //Relacion de vehiculos a arriendos
    public function arriendos():HasMany{
        return $this->hasMany(Arriendo::class);
    }
}
