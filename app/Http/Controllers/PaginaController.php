<?php

namespace App\Http\Controllers;

use App\Models\pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
   
    public function index()
    {
        $pagina = new pagina();
        return $pagina->all();
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show(pagina $pagina)
    {
        //
    }

   
    public function update(Request $request, pagina $pagina)
    {
        //
    }

    public function destroy(pagina $pagina)
    {
        //
    }
}
