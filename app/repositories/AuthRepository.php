<?php


namespace App\repositories;

use App\interfaces\AuthInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\User;
use DB;


class AuthRepository implements AuthInterface
{
    public  function __construct(User $user){
        $this->user = $user;
    }

    public function login(array $data)
    {
        // TODO: Implement login() method.

        try{
            $user = $this->user->where('usu_usuario', $data['usuario'])->first();
                if ($user &&Hash::check($data['password'],$user->usu_password)){
                    $api_token = base64_encode(str_random(40));
                    $this->user->where('usu_usuario', $data['usuario'])->update(['api_token' => "$api_token"]);
                    $usuario = $this->user->where('usu_usuario', $data['usuario'])->first();
                        return response()->json(['status'=>'success','users'=>$usuario],200);
                }else{
                    return response()->json(['status'=>'false']);
                }

        } catch (ModelNotFoundException$e){
            return response()->json(['status'=>'false']);
        }

        return response()->json(['status'=>'Unauthorized']);

    }

    public function logOut()
    {
        // TODO: Implement logOut() method.
    }

}
