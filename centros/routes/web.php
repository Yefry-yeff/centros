<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentroControler;

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

Route::get('/', function () {
     return redirect()->route('login');
 });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('centros.index');
})->name('dashboard');


Route::resource("/centro", "App\Http\Controllers\CentroControler");

//Route::get('/centro', 'SweetController@notification');

Route::get('/colonias/escuelas/{idColonia}', [CentroControler::class, 'getEscuelas']);
Route::get('/empleado', [EmpleadoController::class, 'getDeptos']);


