<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catigorys;

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

Route::get('/', [catigorys::class, 'index']);

Route::get('categories' , [catigorys::class, 'index']) -> name('catigory.index');
Route::get('categories/create' , [catigorys::class, 'create']);
Route::post('categories' , [catigorys::class, 'store']) -> name('catigory.store');
Route::get('categories/{id}/edit' , [catigorys::class, 'edit']) -> name('catigory.edit');
Route::put('categories/{id}' , [catigorys::class, 'update']) -> name('catigory.update');
Route::delete('categories/{id}' , [catigorys::class, 'destroy']) -> name('catigory.destroy');
Route::get('categories/{id}' , [catigorys::class, 'show']) -> name('catigory.show');
