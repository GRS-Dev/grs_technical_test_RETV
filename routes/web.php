<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyeccionVentaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [ProyeccionVentaController::class, 'index'])
->name('proyecciones.index');


