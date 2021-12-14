<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Libro;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class VentasEdit extends Component
{
    public Venta $venta;

    public function render()
    {
        $libros = Libro::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.ventas-edit', compact('libros', 'usuarios'));
    }

    public function editar(){
        $this->validate();

        $this->venta->save();
        return redirect(route('ventas.index'));
    }

    protected function rules(){
        return ReglasVenta::reglas();
    }
}
