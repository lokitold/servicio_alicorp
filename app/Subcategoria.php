<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = "subcategoria";
    protected  $primaryKey = "ud_subcategoria";

    protected $fillable = [
        'sub_nombre',
        'sub_estado',
        'sub_descripcion',
        'categoria_id',
        'created_at',
        'updated_at'
    ];
}
