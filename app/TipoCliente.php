<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    protected $table = "tipo_cliente";
    protected  $primaryKey = "idtipo_cliente";
    public $timestamps=false;

    protected $fillable = [
        'tipcl_nombre',
        'tipcl_descripcion',
    ];
}
