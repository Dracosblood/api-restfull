<?php

namespace App\Http\Controllers;

use App\Models\enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enlace = new enlace();
        return $enlace->all();
    }

    public function store(Request $request)
    {
        $enlace = new enlace();
        $enlace->descripcion = $request->descripcion;
        $enlace->fecha_creacion = $request->fecha_creacion;
        $enlace->fecha_modificacion = $request->fecha_modificacion;
        $enlace->usuario_creacion = $request->usuario_creacion;
        $enlace->usuario_modificacion= $request->usuario_modificacion;
        $enlace->roles_id = $request->roles_id;
        $enlace->paginas_id = $request->paginas_id;
        $enlace->save();
        return "enlace creado";

    }

    public function show(string $id)
    {
        return enlace::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $enlace = enlace::find($id);
        $enlace->descripcion = $request->descripcion;
        $enlace->fecha_creacion = $request->fecha_creacion;
        $enlace->fecha_modificacion = $request->fecha_modificacion;
        $enlace->usuario_creacion = $request->usuario_creacion;
        $enlace->usuario_modificacion= $request->usuario_modificacion;
        $enlace->roles_id = $request->roles_id;
        $enlace->paginas_id = $request->paginas_id;
        $enlace->save();
        return "enlace editado";
    }

    public function destroy(string $id)
    {
        $enlace = enlace::find($id);
        $enlace->delete();
        return "enlace borrado";
    }
}
