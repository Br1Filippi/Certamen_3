<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Arriendo extends Model
{
    use HasFactory;

    protected $table = 'arriendos';

    public $timestamps = false;

    //Relacion de Arriendo con Vehiculos
    public function vehiculos(){
        return $this->belongsTo(Vehiculo::class);
    }

    //Relacion de Arriendo con Vehiculos
    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }
}
