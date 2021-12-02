<div class="row">

    <div class="col-lg-4">
        <div wire:loading wire:target="foto" class="align-items-center">
            <strong>Cargando...</strong>
            <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
        </div>

        @if ($foto != null)
            <img style="width: 230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="width: 230px;height:230px;"
                src="{{ Storage::disk('public')->url($libro->Foto != null ? $libro->Foto : 'images/Libros/default.png') }}"
                alt="">
        @endif

        <form >
            <div class="form-group">
                <label for="image">Seleccione la imagen</label>
                <input wire:model="foto" type="file" class="form-control-file" id="image">
                @error('foto')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                @enderror
            </div>
        </form>
    </div>
    <div class="col-lg-8">
        <div class="mx-auto col-10">
            <div class="form-group">
                <label>Título</label>
                <input wire:model="libro.Titulo" type="text" class="form-control">
                @error('libro.Titulo') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Editorial</label>
                <input wire:model="libro.Editorial" type="text" class="form-control">
                @error('libro.Editorial') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Autor</label>
                <input wire:model="libro.Autor" type="text" class="form-control">
                @error('libro.Autor') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label>Fecha de lanzamiento</label>
                <input wire:model="libro.Fecha_lanzamiento" type="text" class="form-control">
                @error('libro.Fecha_lanzamiento') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>


</div>
