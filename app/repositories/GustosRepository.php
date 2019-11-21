<?php


namespace App\repositories;

use App\Interfaces\GustosInterface;
use App\Categoria;
use App\Subcategoria;
use App\UsuarioSubcategoria;
use App\User;
use DB;
use http\Env\Response;


class GustosRepository implements GustosInterface
{
    private $categoria;

    private $subcategoria;
    private  $user;
    private  $subcat;

    public  function __construct(Categoria $categoria, Subcategoria $subcategoria, User $user, UsuarioSubcategoria $subcat ){
        $this->categoria = $categoria;
        $this->subcategoria = $subcategoria;
        $this->user = $user;
        $this->subcat = $subcat;
    }

    public function listar_categoria(array $data)
    {
        $result = $this->categoria->with('subcategoria')->get();

        return response()->json($result);
    }

    public function seleccionar_subcategoria(array $data)
    {
        // TODO: Implement seleccionar_subcategoria() method.

        if(empty($data)){
            return response()->json(['status' => 'No hay datos']);
        }else {
            $user_activo =  $this->user->where('api_token', '=', $data['api_token'])->first();
            foreach ($data['subcategoria'] as $req){
                $this->subcat->create([
                    'usuario_id' => $user_activo->id_usuario,
                    'subcategoria_id' => $req['id_subcategoria']
                ]);
                $this->user->where('api_token', $data['api_token'])->update(['usu_preferencia' => "1"]);
            }
            return response()->json(['status' => 'true']);
        }
        return response()->json(['status' => 'false']);
    }

    public function listar_archivos(array $data)
    {
        $user_activo =  $this->user->where('api_token', '=', $data['api-token'])->first();

        $data = DB::table('usuario_subcategoria as us_sub')
            ->join('archivo_subcategoria as archs', 'us_sub.subcategoria_id', '=', 'archs.subcategoria_id')
            ->join('archivo as archi', 'archs.archivo_id', '=', 'archi.id_archivo')
            ->select('archi.id_archivo', 'archi.arch_nombre', 'archi.arch_descripcion', 'archi.arch_url', 'archi.created_at')
            ->where('us_sub.usuario_id', $user_activo->id_usuario)
            ->get();

        return response()->json($data);
    }
}
