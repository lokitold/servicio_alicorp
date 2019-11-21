<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\interfaces\AdjuntarArchivoInterface;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\File;
use App\Archivo;
use  App\ArchivoSubcategoria;

class ArchivoController
{

    public function adjuntarArchivo(Request $request)
    {

        if (Input::file('arch_file')) {

            $file = Input::file('arch_file');
            if (file_exists(Input::file('arch_file'))) {
                $extension = $file->getClientOriginalExtension();
                $data = $file->store('archivo', 's3');
                $img_url = 'https://alicorp.s3.us-east-2.amazonaws.com/' . '' . $data;
                $datos = [
                    'arch_url' => $img_url
                ];

                $data = new Archivo();
                $data->arch_nombre = $request->input('arch_nombre');
                $data->arch_descripcion = $request->input('arch_descripcion');
                $data->arch_url = $datos['arch_url'];
                $data->arch_extension = $extension;
                $data->save();

                $archivo_sub = new ArchivoSubcategoria();
                $archivo_sub->subcategoria_id = $request->input('subcategoria_id');
                $archivo_sub->archivo_id = $data->id_archivo;
                $archivo_sub->categoria_id = $request->input('categoria_id');
                $archivo_sub->save();

                return response()->json(['status' => 'true', 'data' => $datos]);
            } else {
                return response()->json(['status' => 'false']);
            }
        }

    }

    public function visualizarArchivo(Request $request)
    {
        if (empty($request->all())) {
            return response()->json(['status' => 'false']);
        } else {
            $data = Archivo::where('id_archivo', '=', $request->input('id_archivo'))->select('arch_url')->get();
            return response()->json(['status' => 'true', 'data' => $data]);
        }
    }

    public  function  buscar_archivo(){
        
    }
}
