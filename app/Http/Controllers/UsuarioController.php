<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  //Get de todos los usuarios
    public function index()
    {
    
        return Usuario::all();
    }

      
    //POST para insertar datos
    public function store(CreateUsuarioRequest $request)
    {
        $input = $request->all();
        Usuario::create($input);
        return response()->json([
            'res' => true,
            'mensaje' => 'usuario insertado correctamente'
        ], 200);
    }

    //Get de cada usuario segun su ID
    public function show($id)
    {
       return Usuario::find($id);
    }

 //PUT actualizar usuarios
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $input=$request->all();
        $usuario->update($input);
        return response()->json([
            'res' => true,
            'mensaje' => 'usuario actualizado correctamente'
        ], 200);
       
    }

//DELETE Eliminar usuario
    public function destroy($id)
    {
        Usuario::destroy($id);
        return response()->json([
            'res' => true,
            'mensaje' => 'usuario Eliminado correctamente'
        ], 200);
    }
}
