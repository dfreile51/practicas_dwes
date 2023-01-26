@extends('layouts.main-layout')
@section('page-title', 'Bienvenidos')
@section('content-area')
    <h1>@mayus($titulo)</h1>
    <hr/>
    <br/>
    <ul>
        @foreach ($paginas as $pagina)
                <li><a href="{{ route($pagina['alias']) }}">{{ $pagina['titulo'] }}</a></li>
        @endforeach
    </ul>
    <hr>
    <br>
    <table class="table table-striped w-75">
        <thead class="table-dark">
            <tr>
                <th class="text-center" colspan="3">PEDIDOS</th>
            </tr>
            <tr>
                <th>#</th>
                <th>PRODUCTOS</th>
                <th>PRECIO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido['num'] }}</td>
                    <td>{{ $pedido['producto'] }}</td>
                    <td>{{ $pedido['precio'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
