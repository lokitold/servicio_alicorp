<?php


namespace App\interfaces;


interface AuthInterface
{
    public  function login(array $data);

    public function logOut();
}
