<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", HomeController::class);
Route::get("login", [LoginController::class,'index']);
Route::get("menu", [LoginController::class,'ShowMenu']);
Route::get("negocio", [LoginController::class,'ShowNegocio']);
Route::get("listaralumnos", [LoginController::class,'showalumnos']);
Route::get("curriculum", [LoginController::class,'showcurriculum']);
Route::get("calculadora", [LoginController::class,'showcalculadora']);
Route::get("volumen", [LoginController::class,'showvolumen']);
Route::get("clientes", [LoginController::class,'FormCliente']);
Route::post("clientes", [LoginController::class,'CrearCliente']);
Route::get("index", [LoginController::class,'logout']);
Route::post("login", [LoginController::class,'authenticate']);