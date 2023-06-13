<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\InstitutionController;
use Illuminate\Support\Facades\Route;

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

Route::resource('institutions', InstitutionController::class);
Route::resource('projects', ProjectController::class);
Route::get('projects/pdf/{id}',[\App\Http\Controllers\ProjectController::class,'getPDF'])->name('projects.report');