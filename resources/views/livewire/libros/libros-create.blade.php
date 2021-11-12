<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Crear nuevo libro
            </div>
            <div class="card-body">
                <div class="mx-auto col-10">
                    <div class="form-group">
                        <label>Libro</label>
                        <input wire:model="libro.Titulo" type="text" class="form-control">
                        @error('libro.Titulo') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
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
            <div>
                <button class="btn btn-success btn-sm"><i class="fa fa-save"></i>Guardar</button>
            <a href="{{route('libros.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
