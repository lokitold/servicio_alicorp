<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";
    protected  $primaryKey = "idcategoria";

    public $timestamps=false;

    protected $fillable = [
        'cat_nombre',
        'cat_estado',
        'cat_descripcion'
    ];

    public  function  subcategoria() {
        return $this->hasMany('App\Subcategoria', 'idcategoria',  'idcategoria');
    }

}
