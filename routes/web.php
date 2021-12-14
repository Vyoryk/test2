<?php

use App\Http\Livewire\Libros\LibrosCreate;
use App\Http\Livewire\Libros\LibrosDelete;
use App\Http\Livewire\Libros\LibrosEdit;
use App\Http\Livewire\Libros\LibrosIndex;
use App\Http\Livewire\Libros\LibrosShow;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosShow;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Livewire\Ventas\VentasDelete;
use App\Http\Livewire\Ventas\VentasEdit;
use App\Http\Livewire\Ventas\VentasIndex;
use App\Http\Livewire\Ventas\VentasShow;
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

//Inicio de sesión
Route::get('/', Login::class)->name('login');

//Protección de Rutas en grupo
Route::group(['middleware' => 'auth'], function(){
    //Libros
    Route::get('/libros',LibrosIndex::class)->name('libros.index');
    Route::get('/libros/crear',LibrosCreate::class)->name('libros.create');
    Route::get('/libros/{libro}/eliminar',LibrosDelete::class)->name('libros.delete');
    Route::get('/libros/{libro}/editar',LibrosEdit::class)->name('libros.edit');
    Route::get('/libros/{libro}/mostrar',LibrosShow::class)->name('libros.show');
    //Ventas
    Route::get('/ventas',VentasIndex::class)->name('ventas.index');
    Route::get('/ventas/crear',VentasCreate::class)->name('ventas.create');
    Route::get('/ventas/{venta}/eliminar',VentasDelete::class)->name('ventas.delete');
    Route::get('/ventas/{venta}/editar',VentasEdit::class)->name('ventas.edit');
    Route::get('/ventas/{venta}/mostrar',VentasShow::class)->name('ventas.show');
    //Usuarios
    Route::get('/usuarios',UsuariosIndex::class)->name('usuarios.index');

    Route::get('/usuarios/{usuario}/eliminar',UsuariosDelete::class)->name('usuarios.delete');
    Route::get('/usuarios/{usuario}/editar',UsuariosEdit::class)->name('usuarios.edit');
    Route::get('/usuarios/{usuario}/mostrar',UsuariosShow::class)->name('usuarios.show');
});
Route::get('/usuarios/crear',UsuariosCreate::class)->name('usuarios.create');
//Protección de Rutas unitarias
//Route::get('/libros',LibrosIndex::class)->name('libros.index')->middleware('auth');

