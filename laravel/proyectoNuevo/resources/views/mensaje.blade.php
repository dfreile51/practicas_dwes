@extends('layouts.main-layout')
@section('page-title', 'Saludo')
@section('content-area')
    <h1>{{ $mensaje }}</h1>
    <hr/>
    <ul>
        <li><a href="{{ route('inicio') }}">Inicio</a></li>
        <li><a href="{{ route('articulos') }}">Artículos</a></li>
        <li><a href="{{ route('facturas') }}">Facturas</a></li>
        <li><a href="{{ route('clientes') }}">Clientes</a></li>
    </ul>
@endsection


