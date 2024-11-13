<?php

use App\Http\Controllers\ClientesLoginController;
use App\Http\Controllers\FakeStoreApiController;
use App\Http\Controllers\InventarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('clientes.auth')->group(function () {
    Route::get('/pagina/index', [InventarioController::class, 'index']);
    Route::get('/catalogo/listado', [FakeStoreApiController::class, 'productos']);
    Route::get('/catalogo/detalle/{id}', [FakeStoreApiController::class, 'productobyid']);
    Route::get('/pagina/index', [InventarioController::class, 'index']);
    Route::post('/pagina/agregar', [InventarioController::class, 'agregarCarrito']);
    Route::get('/prueba/carrito', [InventarioController::class, 'productosCarrito']);
});

//Login y Register
Route::get('/sesiones/register', [ClientesLoginController::class, 'index']);
Route::post('/sesiones/register', [ClientesLoginController::class, 'registrar']);
Route::get('/sesiones/login', [ClientesLoginController::class, 'mostrar']);
Route::post('/sesiones/login', [ClientesLoginController::class, 'login']);
Route::post('/logout', [ClientesLoginController::class, 'logout']);

Route::view('/navegacion/navegacion', '/navegacion/navegacion');
Route::view('/navegacion/navbarcliente', '/navegacion/navbarcliente');