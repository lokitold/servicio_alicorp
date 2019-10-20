<?php


namespace App\Repository;
use App\interfaces\AuthInterface;


class AuthServiceRepository implements AuthInterface
{

    public function login(array $data)
    {
        return response()->json($data);
    }
}
