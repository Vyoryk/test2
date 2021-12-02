<div>
    <br>
    <div class="mx-auto card" style="max-width: 560px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img style="width: 200px;height:200px;"
                    class="rounded mx-auto d-block"
                    src="{{ Storage::disk('public')->url($libro->Foto != null ? $libro->Foto : 'images/Libros/default.png') }}"
                    alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-text">{{$libro->Titulo}}</h5>
                    <p class="card-text">Editorial: {{$libro->Editorial}}</p>
                    <p class="card-text">Autor: {{$libro->Autor}}</p>
                    <p class="card-text">Fecha de lanzamiento: {{$libro->Fecha_lanzamiento}}</p>
                    <a href="{{route('libros.index')}}" class="btn btn-primary btn-sm">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
