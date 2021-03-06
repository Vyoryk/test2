<div>
    <br>
    <div class="mx-auto card" style="max-width: 560px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img style="width: 200px;height:200px;"
                    src="{{ Storage::disk('public')->url($libro->Foto != null ? $libro->Foto : 'images/Libros/default.png') }}"
                    alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title text-danger" style="text-align: center;">Eliminar</h2>
                    <h5 class="card-text">{{$libro->Titulo}}</h5>
                    <p class="card-text">Editorial: {{$libro->Editorial}}</p>
                    <p class="card-text">Autor: {{$libro->Autor}}</p>
                    <p class="card-text">Fecha de lanzamiento: {{$libro->Fecha_lanzamiento}}</p>
                    <button wire:click="delete" class="btn btn-danger btn-sm">Confirmar</button>
                    <a href="{{route('libros.index')}}" class="btn btn-primary btn-sm">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
