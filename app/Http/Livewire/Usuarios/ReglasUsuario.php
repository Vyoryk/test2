<?php

namespace App\Http\Livewire\Usuarios;

class ReglasUsuario
{
    public static function reglas(){
        return [
            'foto' => 'nullable|image',
            'usuario.Nombre_usuario' => 'required|string',
            'usuario.Email' => 'required|string',
            'usuario.Password' => 'required|string'
        ];
    }
}
