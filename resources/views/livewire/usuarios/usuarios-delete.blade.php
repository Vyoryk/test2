<div>
    <br>
    <div class="mx-auto card" style="max-width: 560px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img style="width: 200px;height:200px;"
                    class="rounded mx-auto d-block"
                    src="{{ Storage::disk('public')->url($usuario->Foto != null ? $usuario->Foto : 'images/Usuarios/default.png') }}"
                    alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title text-danger" style="text-align: center;">Eliminar</h2>
                    <h5 class="card-text">{{$usuario->Nombre_usuario}}</h5>
                    <p class="card-text">Correo: {{$usuario->Editorial}}</p>
                    <p class="card-text">Contraseña: {{$usuario->Autor}}</p>
                    <button wire:click="delete" class="btn btn-danger btn-sm">Confirmar</button>
                    <a href="{{route('usuarios.index')}}" class="btn btn-primary btn-sm">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
