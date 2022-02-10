<?php

namespace App\Http\Livewire\Ventas;

class ReglasVenta
{
    public static function reglas(){
        return [
            'venta.id_usuario' => 'required',
            'venta.id_libro' => 'required'
        ];
    }
}
