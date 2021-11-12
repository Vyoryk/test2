<div>
    <h1>Libros</h1>
    <div class="float-right mb-2">
        <a type="button" href="{{route('libros.create')}}" class="btn btn-success">
            Crear nuevo
        </a>
    </div>

    <div class="mt-5">
        <x-table>
            <x-slot name='columnas'>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Editorial</th>
                <th scope="col">Autor</th>
                <th scope="col">Fecha_lanzamiento</th>
                <th scope="col"></th>
            </x-slot>
            <x-slot name='filas'>
                @foreach ($libros as $libro)
                    <tr>
                        <th scope="row">{{ $libro->id }}</th>
                        <td>{{ $libro->Titulo }}</td>
                        <td>{{ $libro->Editorial }}</td>
                        <td>{{ $libro->Autor }}</td>
                        <td>{{ $libro->Fecha_lanzamiento }}</td>
                        <td>
                            <a href="{{ route('libros.delete', $libro) }}" title="Eliminar libro" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
        {{$libros->links()}}
    </div>
</div>
