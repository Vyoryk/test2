<div wire:init="cargando">

    <h1>Ventas</h1>
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
                <a href="{{ route('ventas.create') }}" type="button" class="btn-sm btn btn-success">
                    <i class="fa fa-plus-circle"></i> Crear nueva venta
                </a>
            </div>
        </div>
    </div>


    <div class="mt-3">
        @if (count($ventas) > 0)
            <x-table>
                <x-slot name='columnas'>
                    <th scope="col">#</th>
                    <th scope="col">Nombre usuario</th>
                    <th scope="col">Curso adquirido</th>
                    <th scope="col">Fecha de compra</th>
                    <th scope="col">Acciones</th>
                </x-slot>
                <x-slot name='filas'>
                    @foreach ($ventas as $venta)
                        <tr>
                            <th scope="row">{{ $venta->id }}</th>
                            <th>{{ $venta->nombre_usuario }}</th>
                            <td>{{ $venta->Titulo }}</td>
                            <td>{{ $venta->created_at }}</td>
                            <td>
                                <a href="{{ route('ventas.show', $venta) }}" title="Mostrar más" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('ventas.edit', $venta) }}" title="Editar venta" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('ventas.delete', $venta) }}" title="Eliminar venta" class="btn btn-danger btn-sm">
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

        {{ $cargado == true ? $ventas->links() : null }}
    </div>
</div>

