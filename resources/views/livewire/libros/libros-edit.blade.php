<div>
    <form wire:submit.prevent="editar">
        <div class="card">

            <div class="card-body">
                <h3 class="card-title">Editar libro</h3>

                @include('livewire.libros.formulario')

            </div>

            <div>
                <button wire:loading.attr="disable" wire:target="foto" class="btn btn-success btn-sm"><i class="fa fa-save"></i>Guardar</button>
                <a href="{{route('libros.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
