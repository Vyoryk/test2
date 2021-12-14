<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentasIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $ventas = ($this->cargado == true) ?
        Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
            ->join('libros', 'ventas.id_libro', '=', 'libros.id')
            ->select(
                'ventas.*',
                'usuarios.nombre_usuario',
                'libros.Titulo',
                'libros.created_at',
            )->paginate(10) : [];
        return view('livewire.ventas.ventas-index', compact('ventas'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
