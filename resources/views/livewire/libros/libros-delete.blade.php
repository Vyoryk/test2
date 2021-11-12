<div>
    <div class="mx-auto card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center;">Eliminar</h5>
            <h5 class="card-title">{{$libro->Titulo}}</h5>
            <p class="card-text">{{$libro->Autor}}</p>
            <button wire:click="delete" class="btn btn-success btn-sm">Confirmar</button>
            <a href="{{route('libros.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
        </div>
    </div>
</div>
