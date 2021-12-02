<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosEdit extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.usuarios-edit');
    }

    public function editar(){
        $this->validate();
        if($this->foto != null){
            if($this->usuario->Foto != null){
                Storage::disk('public')->delete($this->usuario->Foto);
            }
            $this->usuario->Foto = Storage::disk('public')->put('images/Usuarios', $this->foto);
        }
        $this->usuario->save();

        return redirect(route('usuarios.index'));
    }

    protected function rules(){
        return ReglasUsuario::reglas();
    }
}
