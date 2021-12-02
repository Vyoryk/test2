<?php

namespace App\Http\Livewire\Libros;

class ReglasLibro
{
    public static function reglas(){
        return [
            'foto' => 'nullable|image',
            'libro.Titulo' => 'required|string',
            'libro.Editorial' => 'required|string',
            'libro.Autor' => 'required|string',
            'libro.Fecha_lanzamiento' => 'required|string'
        ];
    }
}
