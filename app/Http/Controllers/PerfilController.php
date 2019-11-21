<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;



class PerfilController extends Controller
{

    public  function listarUsuarioActivo(Request $request){
        $api_token  = $request->header('Authorization');
        $data = User::with('persona')->where('api_token', '=',$api_token )->first();
        return response()->json(['status' => 'true', 'data' => $data]);
    }
}
