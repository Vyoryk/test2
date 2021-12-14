<div>
    <form wire:submit.prevent="crear">
        <div class="card">

            <div class="card-body">
                <h3 class="card-title">Crear nueva venta</h3>

                @include('livewire.ventas.formulario')

            </div>

            <div>
                <button class="btn btn-success btn-sm"><i class="fa fa-save"></i>Guardar</button>
                <a href="{{route('ventas.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
