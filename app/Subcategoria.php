<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = "subcategoria";
    protected  $primaryKey = "id_subcategoria";

    public $timestamps=false;

    protected $fillable = [
        'sub_nombre',
        'sub_estado',
        'sub_descripcion',
        'idcategoria',
        'created_at',
        'updated_at',
        'sub_icono'
    ];

    public  function  categoria() {
        return $this->belongsTo('App\Categoria', 'idcategoria','idcategoria');
    }
}
