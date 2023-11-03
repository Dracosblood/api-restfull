<?php

use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\EnlaceController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas Roles

Route::get('/roles', [RolesController::class, 'index']);
Route::post('/roles', [RolesController::class, 'store']);
Route::get('/roles/{id}', [RolesController::class, 'show']);
Route::put('/roles/{id}', [RolesController::class, 'update']);
Route::delete('/roles/{id}', [RolesController::class, 'destroy']);

//Rutas usuarios

Route::get('/usuario', [UsuarioController::class,'index']);
Route::post('/usuario', [UsuarioController::class,'store']);
Route::get('/usuario/{id}', [UsuarioController::class,'show']);
Route::put('/usuario/{id}', [UsuarioController::class,'update']);
Route::delete('/usuario/{id}', [UsuarioController::class,'destroy']);

//Rutas enlace

Route::get('/enlace', [EnlaceController::class, 'index']);
Route::post('/enlace', [EnlaceController::class, 'store']);
Route::get('/enlace/{id}', [EnlaceController::class, 'show']);
Route::put('/enlace/{id}', [EnlaceController::class, 'update']);
Route::delete('/enlace/{id}', [EnlaceController::class, 'destroy']);

//Ruta Pagina

Route::get('/pagina', [PaginaController::class,'index']);

//Rutas Bitacora

Route::get('/bitacora',[BitacoraController::class,'index']);
Route::post('/bitacora',[BitacoraController::class,'store']);
Route::get('/bitacora/{id}',[BitacoraController::class,'show']);
Route::put('/bitacora/{id}',[BitacoraController::class,'update']);
Route::delete('/bitacora/{id}',[BitacoraController::class,'destroy']);

//Rutas Personas

Route::get('/persona',[PersonaController::class,'index']);
Route::post('/persona',[PersonaController::class,'store']);
Route::get('/persona/{id}',[PersonaController::class,'show']);
Route::put('/persona/{id}',[PersonaController::class,'update']);
Route::delete('/persona/{id}',[PersonaController::class,'destroy']);