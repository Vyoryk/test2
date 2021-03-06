<div wire:init="cargando">

    <h1>Libros</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="mb-4 input-group">
                <span class="input-group-text bg-dark" id="basic-addon1">
                    <i class="fa fa-search" style="color: white;"></i>
                </span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Search" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="col-md-8">
            <div class="float-right mb-2">
                <a href="{{ route('libros.create') }}" type="button" class="btn-sm btn btn-success">
                    <i class="fa fa-plus-circle"></i> Crear nuevo
                </a>
            </div>
        </div>
    </div>


    <div class="mt-3">
        @if (count($libros) > 0)
            <x-table>
                <x-slot name='columnas'>
                    <th scope="col">#</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Título</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha de lanzamiento</th>
                    <th scope="col">Acciones</th>
                </x-slot>
                <x-slot name='filas'>
                    @foreach ($libros as $libro)
                        <tr>
                            <th scope="row">{{ $libro->id }}</th>
                            <th>
                                <img style="width: 40px;height:40px;"
                                    src="{{ Storage::disk('public')->url($libro->Foto ? $libro->Foto : 'images/Libros/default.png') }}"
                                    alt="">
                            </th>
                            <td>{{ $libro->Titulo }}</td>
                            <td>{{ $libro->Editorial }}</td>
                            <td>{{ $libro->Autor }}</td>
                            <td>{{ $libro->Fecha_lanzamiento }}</td>
                            <td>
                                <a href="{{ route('libros.show', $libro) }}" title="Mostrar más" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('libros.edit', $libro) }}" title="Editar libro" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('libros.delete', $libro) }}" title="Eliminar libro" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table>
        @else
            <div class="d-flex justify-content-center">
                <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        @endif

        {{ $cargado == true ? $libros->links() : null }}
    </div>
</div>
