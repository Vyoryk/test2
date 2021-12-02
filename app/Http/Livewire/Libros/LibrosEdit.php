<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class LibrosEdit extends Component
{
    //Para imagenes
    use WithFileUploads;
    public Libro $libro;
    public $foto;

    public function render()
    {
        return view('livewire.libros.libros-edit');
    }

    public function editar(){
        $this->validate();

        if($this->foto != null){
            if($this->libro->Foto != null){
                Storage::disk('public')->delete($this->libro->Foto);
            }
            $this->libro->Foto = Storage::disk('public')->put('images/Libros',$this->foto);
        }
        $this->libro->save();

        return redirect(route('libros.index'));
    }

    protected function rules(){
        return ReglasLibro::reglas();
    }
}
