<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends  Model
{
    protected $table = "archivo";
    protected  $primaryKey = "id_atchivo";

    protected $fillable = [
        'arch_nombres',
        'arch_descripcion',
        'arch_url',
        'created_at',
        'updated_at'

    ];
}
