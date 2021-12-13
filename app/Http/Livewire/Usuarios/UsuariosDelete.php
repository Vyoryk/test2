<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosDelete extends Component
{
    use WithFileUploads;
    public Usuario $usuario;

    public function render()
    {
        return view('livewire.usuarios.usuarios-delete');
    }

    public function delete(){
        if($this->usuario->foto =! null){
            Storage::disk('public')->delete($this->usuario->foto);
        }

        $this->usuario->delete();
        return redirect(route('usuarios.index'));
    }
}
