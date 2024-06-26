<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primatyKey = 'email';
    protected $keyType = 'string';

    public $incrementing = false;
    public $timestamps = false;

    //Relacion con perfiles
    public function perfiles(){
        return $this->belongsTo(Perfil::class);
    }
}
