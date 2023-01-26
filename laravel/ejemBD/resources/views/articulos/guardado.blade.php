@extends('layouts.main-layout')
@section('content-area')
    <h1>Artículo {{ $operacion }}</h1>
    <hr />
    <div class='container-fluid'>
        <h2>El artículo {{ $articulo }} se ha {{ $operacion }} correctamente</h2>
        <br />
        <h2>
            <a href="{{ route('articulos.index') }}">Volver al Catálogo</a>
        </h2>
    </div>
@endsection
