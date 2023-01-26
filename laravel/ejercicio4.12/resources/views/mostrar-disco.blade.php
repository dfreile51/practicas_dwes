@extends('layouts.main-layout')
@section('content-area')
    <h1>Detalle de disco: {{ $disco->titulo }}</h1>
    <hr />
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">ID: </strong>
        </div>
        <div class="col-sm-10">
            {{ $disco->id }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">TITULO: </strong>
        </div>
        <div class="col-sm-10">
            {{ $disco->titulo }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">AUTOR: </strong>
        </div>
        <div class="col-sm-10">
            {{ $disco->autor }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">GENERO: </strong>
        </div>
        <div class="col-sm-10">
            {{ $disco->genero }}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">AÑO: </strong>
        </div>
        <div class="col-sm-10">
            {{ $disco->año }}
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-sm-2">
            <strong class="text-danger">IMAGEN: </strong>
        </div>
        <div class="col-sm-10">
            {{ $disco->imagen }}
        </div>
    </div> --}}
    <!-- Resto de campos -->
    <hr />
    <h2><a href="{{ route('discos.index') }}">Volver al catálogo</a></h2>
@endsection
