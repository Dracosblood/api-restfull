<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persona = new persona();
        return $persona->all();
    }

    public function store(Request $request)
    {
        $persona = new persona();
        $persona->primer_nombre = $request->primer_nombre;
        $persona->segundo_nombre = $request->segundo_nombre;
        $persona->primer_apellido = $request->primer_apellido;
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->fecha_creacion = $request->fecha_creacion;
        $persona->fecha_modificacion = $request->fecha_modificacion;
        $persona->usuario_creacion = $request->usuario_creacion;
        $persona->usuario_modificacion = $request->usuario_modificacion;
        $persona->save();
        return "usuario creado";

    }

    public function show(string $id)
    {
        return persona::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $persona = persona::find($id);
        $persona->primer_nombre = $request->primer_nombre;
        $persona->segundo_nombre = $request->segundo_nombre;
        $persona->primer_apellido = $request->primer_apellido;
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->fecha_creacion = $request->fecha_creacion;
        $persona->fecha_modificacion = $request->fecha_modificacion;
        $persona->usuario_creacion = $request->usuario_creacion;
        $persona->usuario_modificacion = $request->usuario_modificacion;
        $persona->save();
        return "usuario editado";
    }

    public function destroy(string $id)
    {
        $persona = persona::find($id);
        $persona->delete();
        return "usuario borrado";
    }
}
