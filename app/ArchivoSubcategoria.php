<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoSubcategoria extends  Model
{
    protected $table = "archivo_subcategoria";
    protected  $primaryKey = "id_archivo_subcategoria";

    protected $fillable = [
        'subcategoria_id',
        'archivo_id',
        'created_at',
        'updated_at',
        'categoria_id'
    ];

    public  function subcategoria(){

    }

    public  function  archivo(){
        
    }

    public  function  categoria(){

    }
}
