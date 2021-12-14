<div>
    <div class="mb-3">
        <label class="form-label">Usuario que adquirie el libro</label>
        <select wire:model="venta.id_usuario" class="form-control">
            <option value="" selected>Selecccionar usuario</option>
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre_usuario }} - {{ $usuario->email }}</option>
            @endforeach
        </select>
        @error('venta.id_usuario')
            <span class="text-danger">
                {{$message}}
            </span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Libro</label>
        <select wire:model="venta.id_libro" class="form-control">
            <option value="" selected>Selecccionar libro</option>
            @foreach ($libros as $libro)
                <option value="{{ $libro->id }}">{{ $libro->Titulo }}</option>
            @endforeach
        </select>
        @error('venta.id_libro')
            <span class="text-danger">
                {{$message}}
            </span>
        @enderror
    </div>
</div>
