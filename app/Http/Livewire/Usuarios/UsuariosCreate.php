<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class UsuariosCreate extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $c_password;
    public $password;

    public function mount(){
        $this->usuario = new Usuario();
    }
    public function render()
    {
        return view('livewire.usuarios.usuarios-create');
    }

    public function crear(){
        $this->validate();
        $this->usuario->password = Hash::make($this->password);

        if($this->foto != null){
            $this->usuario->foto = Storage::disk('public')->put('images/Usuarios', $this->foto);
        }

        $this->usuario->save();
        return redirect(route('usuarios.index'));
    }

    protected function rules(){
        return ReglasUsuario::reglas();
    }
}
