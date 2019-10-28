<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";
    protected  $primaryKey = "idcategoria";

    protected $fillable = [
        'cat_nombre',
        'cat_estado',
        'cat_descripcion'
    ];

}
