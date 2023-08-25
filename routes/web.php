<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\RegisterPersonController;
use App\Http\Controllers\RegisterVivereController;
use App\Http\Controllers\StatisticController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registervivere', [RegisterVivereController::class, 'index'])->name('registervivere');
Route::post('/registervivere', [RegisterVivereController::class, 'store'])->name('platosstore');
Route::put('/registervivereActualiza/{id}', [RegisterVivereController::class, 'update'])->name('viveres.actualiza');
Route::put('/registervivereActualizados/{id}', [RegisterVivereController::class, 'update2'])->name('viveres.actualizados');
Route::get('/registerperson', [RegisterPersonController::class, 'index'])->name('registerperson');
Route::get('/registerpersonedit', [RegisterPersonController::class, 'index'])->name('PersonEdit');
Route::put('/registerpersonedit{persona}', [RegisterPersonController::class, 'update'])->name('PersonEditUpdate');
Route::get('/registerperson/{persona}/edit', [RegisterPersonController::class, 'edit'])->name('registerpersonedit');
Route::post('/resgisterperson', [RegisterPersonController::class, 'store'])->name('registerpersonstore');
Route::get('/statistic', [StatisticController::class, 'index'])->name('statistic');
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
