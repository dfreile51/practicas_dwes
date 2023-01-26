@extends ('layouts.main-layout')
@section ('content-area')
<h1>Catálogo de Artículos</h1>
<table class="table table-striped">
    <thead class='bg-secondary text-white'>
        <tr>
            <th>#</th>
            <th>Artículo</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id }}</td>
                <td>{{ $articulo->nombre }}</td>
                <td>{{ $articulo->descripcion }}</td>
                <td class="text-nowrap {{-- text-end --}}">@priceformat($articulo->precio)</td>
                <th>
                    <a href="{{ route('articulos.show', ['articulo'=>$articulo]) }}"><span class="material-icons">search</span></a>
                    <a href="{{ route('articulos.edit', ['articulo'=>$articulo]) }}"><span class="material-icons text-success">edit</span></a>
                    <a href="#deleteModal{{$articulo->id}}" data-bs-toggle="modal"><i class="material-icons text-danger">delete</i></a>
                </th>
            </tr>
            {{-- Delete Confirm Form --}}
            <form action="{{ route('articulos.destroy', ['articulo' => $articulo]) }}" method="post">
                @method('DELETE')
                @csrf
                {{-- Delete Warning Modal --}}
                <div class="modal fade" id="deleteModal{{ $articulo->id }}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Eliminar Artículo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Se va a eliminar el articulo <b>{{ $articulo->nombre }}</b></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-bs-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach
    </tbody>
</table>



@endsection
