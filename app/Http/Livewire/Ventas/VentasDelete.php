<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;

class VentasDelete extends Component
{
    public Venta $venta;

    public function render()
    {
        $datos =
        Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
                ->where('usuarios.id', '=', $this->venta->id_usuario)
        ->join('libros', 'ventas.id_libro', '=', 'libros.id')
        ->where('libros.id', '=', $this->venta->id_libro)
            ->select(
                'usuarios.*',
                'libros.*',
            )->paginate(10);
        //dd($datos[0]->Titulo);
        $datos = $datos[0];
        return view('livewire.ventas.ventas-delete', compact('datos'));
    }

    public function delete(){
        $this->venta->delete();
        return redirect(route('ventas.index'));
    }
}
