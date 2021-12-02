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
                    <h5 class="card-text">{{$usuario->Nombre_usuario}}</h5>
                    <p class="card-text">Correo: {{$usuario->Email}}</p>
                    <p class="card-text">Contraseña: {{$usuario->Password}}</p>
                    <a href="{{route('usuarios.index')}}" class="btn btn-primary btn-sm">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
