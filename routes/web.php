<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Paciente;

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
    $paciente=Paciente::orderBy('id','desc')->get();
    return view('home.index',compact('paciente'));
});
Route::get('/inicio', [HomeController::class,'index'])->name('home.index');
Route::post('/paciente', [HomeController::class,'store'])->name('paciente.store');
Route::get('/paciente/{paciente}/edit', [HomeController::class,'edit'])->name('paciente.edit');
Route::PUT('/paciente/{paciente}/update', [HomeController::class,'update'])->name('paciente.update');
Route::delete('/paciente/{paciente}/delete', [HomeController::class,'delete'])->name('paciente.delete');
