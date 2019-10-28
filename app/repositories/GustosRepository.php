<?php


namespace App\repositories;

use App\Interfaces\GustosInterface;




class GustosRepository implements GustosInterface
{

    public function listar_categoria(array $data)
    {
        // TODO: Implement listar_categoria() method.
        return response()->json($data);
    }

    public function seleccionar_subcategoria(array $data)
    {
        // TODO: Implement seleccionar_subcategoria() method.
    }
}
