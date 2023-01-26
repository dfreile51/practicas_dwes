@extends('layouts.main-layout')
@section('content-area')
    <div class="container-fluid py-4">
        <div class="row text-center">
            <h1>Discos</h1>
        </div>
        <div class="row py-4">
            <table class='table table-striped'>
                <thead class='bg-secondary text-white'>
                    <tr>
                        {{-- <th scope='col'>IMAGEN</th> --}}
                        <th scope='col'>TITULO</th>
                        <th scope='col'>AUTOR</th>
                        <th scope='col'>GENERO</th>
                        <th scope='col'>AÑO</th>
                        <th scope='col'>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($discos as $disco)
                        <tr>
                            {{-- <td class='text-table align-middle'><img src='{{ $disco->imagen }}'></td> --}}
                            <td class='text-table align-middle'>{{ $disco->titulo }}</td>
                            <td class='text-table align-middle'>{{ $disco->autor }}</td>
                            <td class='text-table align-middle'>{{ $disco->genero }}</td>
                            <td class='text-table align-middle'>{{ $disco->año }}</td>
                            <td class='text-table align-middle'>
                                <a href='{{ route('discos.show', ['disco' => $disco]) }}'><span
                                        class="material-icons">search</span></a>
                                <a href='{{ route('discos.edit', ['disco' => $disco]) }}'><span
                                        class="material-icons text-success">edit</span></a>
                                <a href='#deleteModal{{ $disco->id }}' data-bs-toggle='modal'><i
                                        class="material-icons text-danger">delete</i></a>
                            </td>
                        </tr>

                        {{-- Delete Confirm Form --}}
                        <form action="{{ route('discos.destroy', ['disco' => $disco]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            {{-- Delete Warning Modal --}}
                            <div class="modal fade" id="deleteModal{{ $disco->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Eliminar Disco</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Se va a eliminar el disco <b>{{ $disco->titulo }}</b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-bs-dismiss="modal"
                                                class="btn btn-secondary">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
