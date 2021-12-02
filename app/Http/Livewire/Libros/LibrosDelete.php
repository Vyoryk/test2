<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class LibrosDelete extends Component
{
    use WithFileUploads;
    public Libro $libro;

    public function render()
    {
        return view('livewire.libros.libros-delete');
    }
    public function delete(){
        if($this->libro->Foto != null){
            Storage::disk('public')->delete($this->libro->Foto);
        }

        $this->libro->delete();
        return redirect(route('libros.index'));
    }
}
