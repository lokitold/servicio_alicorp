<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends  Model
{
    protected $table = "archivo";
    protected  $primaryKey = "id_archivo";

    protected $fillable = [
        'arch_nombre',
        'arch_descripcion',
        'arch_url',
        'created_at',
        'updated_at',
        'arch_extension'

    ];
}
