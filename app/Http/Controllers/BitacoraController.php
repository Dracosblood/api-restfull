<?php

namespace App\Http\Controllers;

use App\Models\bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
   
    public function index()
    {
        $bitacora = new bitacora();
        return $bitacora->all();
    }

    public function store(Request $request)
    {
        $bitacora = new bitacora();
        $bitacora->bitacora = $request->bitacora;
        $bitacora->fecha = $request->fecha;
        $bitacora->hora = $request->hora;
        $bitacora->ip = $request->ip;
        $bitacora->so = $request->so;
        $bitacora->navegador = $request->navegador;
        $bitacora->usuario = $request->usuario;
        $bitacora->usuarios_id = $request->usuarios_id;
        $bitacora->save();
        return "bitacora creada";
    }

    public function show(string $id)
    {
        return bitacora::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $bitacora = bitacora::find($id);
        $bitacora->bitacora = $request->bitacora;
        $bitacora->fecha = $request->fecha;
        $bitacora->hora = $request->hora;
        $bitacora->ip = $request->ip;
        $bitacora->so = $request->so;
        $bitacora->navegador = $request->navegador;
        $bitacora->usuario = $request->usuario;
        $bitacora->usuarios_id = $request->usuarios_id;
        $bitacora->save();
        return "bitacora editada";
    }

    public function destroy(string $id)
    {
        $bitacora = bitacora::find($id);
        $bitacora->delete();
        return "bitacora borrada";
    }
}
