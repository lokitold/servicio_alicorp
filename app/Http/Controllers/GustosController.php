<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\GustosInterface;

use App\Categoria;
use App\Subcategoria;

class GustosController
{
    private $gustos;

    public  function __construct(GustosInterface $gustos)
    {
        $this->gustos = $gustos;
    }

    public  function listarCategoria(Request $request) {

        if ($request->isJson()){
            return $this->gustos->listar_categoria($request->all());
        }
    }

    public  function seleccionar_subcategoria(Request $request){

        if ($request->isJson()){

            $api_token =  $request->header('Authorization');

            $data  = [
                'api_token' => $api_token,

            ];

            return $this->gustos->seleccionar_subcategoria($request->all());
        }
    }

}
