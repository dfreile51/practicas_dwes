@extends('layouts.main-layout')
@section('content-area')
    <h1>Disco {{ $operacion }}</h1>
    <hr />
    <div class='container-fluid'>
        <h2>El disco con titulo: {{ $disco }}, se ha {{ $operacion }} correctamente</h2>
        <br />
        <h2>
            <a href="{{ route('discos.index') }}">Volver al Catálogo</a>
        </h2>
    </div>
@endsection
