<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UsusarioController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\ServicioController;

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

//rutass de inicio 

Route::get('/', [\App\Http\Controllers\PageController::class, 'welcome']);

//ruta de inicio autenticado 
//son las rutas que usa autenticacion  
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [\App\Http\Controllers\PageController::class, 'dashboard'])
        ->name('dashboard');
   
    //ruta de Usuario
    route::resource('User',\App\Http\Controllers\UsusarioController::class);
    
    //rutas de cliente
    route::resource('Cliente',\App\Http\Controllers\ClienteController::class);

    //rutas de tecnico 
    route::resource('Tecnico', App\Http\Controllers\TecnicoController::class);

    //rutas de descuento
    route::resource('Descuento', App\Http\Controllers\DescuentoController::class);

    //rutas de servicio
    route::resource('Servicio', App\Http\Controllers\ServicioController::class);
    
});


