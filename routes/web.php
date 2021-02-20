<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//use the plural form of the model for displaying data
//for route names, just indicate the plural form of model + . + name of code
Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('patients/create',[PatientController::class, 'create'])->name('patients.create');
Route::post('patients/store',[PatientController::class, 'store'])->name('patients.store');




