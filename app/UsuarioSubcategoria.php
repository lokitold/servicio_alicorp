<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioSubcategoria extends  Model
{
    protected $table = "usuario_subcategoria";
    protected  $primaryKey = "id_usuario_subcategoria";

    public $timestamps=false;

    protected $fillable = [
        'usuario_id',
        'subcategoria_id',
        'fecha_registro'
    ];

}
