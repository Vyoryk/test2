<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class LibrosIndex extends Component
{
    public function render()
    {
        // $libros = Producto::all();
        $libros = Libro::paginate(10);
        //dd($libros);
        return view('livewire.libros.libros-index', compact('libros'));
    }
}
