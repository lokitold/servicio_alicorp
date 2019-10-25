<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "persona";
    protected  $primaryKey = "id_persona";

    protected $fillable = [
        'per_nombres',
        'per_apellido',
        'per_dni',
        'per_email',
        'per_telefono',
        'created_at',
        'updated_at',
    ];

    public  function  user() {
        return $this->hasOne('App\User', 'id_persona', 'id_persona');
    }
}
