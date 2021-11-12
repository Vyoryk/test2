<?php

use App\Http\Livewire\Libros\LibrosCreate;
use App\Http\Livewire\Libros\LibrosDelete;
use App\Http\Livewire\Libros\LibrosIndex;
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

Route::get('/',LibrosIndex::class)->name('libros.index');
Route::get('/crear',LibrosCreate::class)->name('libros.create');
Route::get('/{libro}/eliminar',LibrosDelete::class)->name('libros.delete');
