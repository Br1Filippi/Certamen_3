<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\HasMany;

class Tipo extends Model
{
    use HasFactory;
    protected $table = 'tipos';
    public $timestamps = false;

    // Relacion tipo a vehiculo
    public function vehiculos(): HasMany{
        return $this->hasMany(Vehiculo::class);
    }
}
