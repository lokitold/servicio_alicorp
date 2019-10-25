<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\interfaces\AuthInterface;
use Illuminate\Http\Request;


class AuthController
{
    private $auth;

    public  function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    public  function  getApiToken (Request $request) {

        if ($request->isJson()){
            return $this->auth->login($request->all());
        }
    }

}
