<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = new usuario();
        return $usuario->all();
    }

    public function store(Request $request)
    {
        $usuario = new usuario();
        $usuario->usuario= $request->usuario;
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->fecha_creacion = $request->fecha_creacion;
        $usuario->fecha_modificacion = $request->fecha_modificacion;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->usuario_modificacion = $request->usuario_modificacion;
        $usuario->roles_id = $request->roles_id;
        $usuario->personas_id = $request->personas_id;
        $usuario->save();
        return "usuario guardado";
    }

   
    public function show(string $id)
    {
        return usuario::where('id',$id)->get();
    }


    public function update(Request $request, string $id)
    {
        $usuario = usuario::find($id);
        $usuario->usuario= $request->usuario;
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->fecha_creacion = $request->fecha_creacion;
        $usuario->fecha_modificacion = $request->fecha_modificacion;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->usuario_modificacion = $request->usuario_modificacion;
        $usuario->roles_id = $request->roles_id;
        $usuario->personas_id = $request->personas_id;
        $usuario->save();
        return "usuario modificado";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = usuario::find($id);
        $usuario->delete();
        return "usuario borrado";
    }
}
