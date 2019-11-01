<?php


namespace App\repositories;

use App\Interfaces\GustosInterface;
use App\Categoria;
use App\Subcategoria;
use App\User;
use DB;



class GustosRepository implements GustosInterface
{
    private $categoria;

    private $subcategoria;
    private  $user;

    public  function __construct(Categoria $categoria, Subcategoria $subcategoria, User $user ){
        $this->categoria = $categoria;
        $this->subcategoria = $subcategoria;
        $this->user = $user;
    }

    public function listar_categoria(array $data)
    {
        $result = $this->categoria->with('subcategoria')->get();

        return response()->json($result);
    }

    public function seleccionar_subcategoria(array $data)
    {
        // TODO: Implement seleccionar_subcategoria() method.

        $datos = $data['api_token'];

        $user_activo =  $this->user->where('api_token', '=', $data['api_token'])->first();

        $array_id  = $data['subcategoria'];



        return response()->json($array_id);
    }
}
