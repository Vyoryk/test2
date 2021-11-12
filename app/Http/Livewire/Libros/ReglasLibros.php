<?php

namespace App\Http\Livewire\Libros;

class ReglasLibros
{
    public static function reglas(){
        return [
            'libro.Titulo' => 'required|string',
            'libro.Editorial' => 'required|string',
            'libro.Autor' => 'required|string',
            'libro.Fecha_lanzamiento' => 'required|string'
        ];
    }
}
