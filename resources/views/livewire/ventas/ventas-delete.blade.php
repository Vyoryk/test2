<div>
    <div class="card-deck">
        <div class="card">
            <img class="rounded mx-auto d-block"
                style="width: 200px;height:200px;"
                src="{{ Storage::disk('public')->url($datos->Foto != null ? $datos->Foto : 'images/Libros/default.png') }}"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $datos->Titulo }}</h5>
                <p class="card-text">Editorial: {{ $datos->Editorial }}</p>
                <p class="card-text">Autor: {{ $datos->Autor }}</p>
                <p class="card-text">Fecha de lanzamiento: {{ $datos->Fecha_lanzamiento }}</p>
            </div>
        </div>
        <div class="card">
            <img style="width: 200px;height:200px;"
                class="rounded mx-auto d-block"
                src="{{ Storage::disk('public')->url($datos->foto != null ? $datos->foto : 'images/Usuarios/default.png') }}"
                alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $datos->nombre_usuario }}</h5>
                <p class="card-text">Correo: {{$datos->email}}</p>
            </div>
        </div>
      </div>
    <div class="mx-auto d-block">
        <button wire:click="delete" class="btn btn-danger btn-sm">Confirmar</button>
        <a href="{{route('libros.index')}}" class="btn btn-primary btn-sm mx-auto">Regresar</a>
    </div>
</div>
