<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;
use Livewire\WithPagination;

class LibrosIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $libros = ($this->cargado == true) ? Libro::where('Titulo', 'LIKE', '%' . $this->search . '%')
            ->orwhere('Editorial', 'LIKE', '%' . $this->search . '%')
            ->orwhere('Autor', 'LIKE', '%' . $this->search . '%')
            ->orwhere('Fecha_lanzamiento', 'LIKE', '%' . $this->search . '%')
            ->paginate(5) : [];

        return view('livewire.libros.libros-index', compact('libros'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
