<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class LibrosCreate extends Component
{
    use WithFileUploads;
    public Libro $libro;
    public $foto;

    public function mount(){
        $this->libro = new Libro();
    }

    public function render()
    {
        return view('livewire.libros.libros-create');
    }

    public function crear(){
        $this->validate();

        if($this->foto != null){
            $this->libro->Foto = Storage::disk('public')->put('images/Libros', $this->foto);
        }
        $this->libro->save();
        return redirect(route('libros.index'));
    }

    protected function rules()
    {
        return ReglasLibro::reglas();
    }
}
