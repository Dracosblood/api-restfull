<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    
    public function index()
    {
        $roles = new roles();
        return $roles->all();
    }

    public function store(Request $request)
    {
        $roles = new roles();
        $roles->rol= $request->rol;
        $roles->fecha_creacion = $request->fecha_creacion;
        $roles->fecha_modificacion = $request->fecha_modificacion;
        $roles->usuario_creacion = $request->usuario_creacion;
        $roles->usuario_modificacion = $request->usuario_modificacion;
        $roles->save();
        return "rol guardado";
    }

    
    public function show(string $id)
    {
        return roles::where('id',$id)->get();
    }

   
    public function update(Request $request, string $id)
    {
        $roles = roles::find($id);
        $roles->rol= $request->rol;
        $roles->fecha_creacion = $request->fecha_creacion;
        $roles->fecha_modificacion = $request->fecha_modificacion;
        $roles->usuario_creacion = $request->usuario_creacion;
        $roles->usuario_modificacion = $request->usuario_modificacion;
        $roles->save();
        return "rol modificado";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roles = roles::find($id);
        $roles->delete();
        return "rol borrado";
    }
}
