<?php

use App\Models\Bicicleta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BicicletaController;
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

//Ruta para mapear el controlador y todos sus métodos
Route::resource('/bicicletas', BicicletaController::class);