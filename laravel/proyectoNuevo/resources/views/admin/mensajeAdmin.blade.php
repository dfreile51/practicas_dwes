@extends('layouts.main-layout')

@switch ($texto)
    @case ("Articulos")
        @section ('page-title', 'Admin: Articulos')
        @break
    @case ("Clientes")
        @section ('page-title', 'Admin: Clientes')
        @break
    @case ("Facturas")
        @section ('page-title', 'Admin: Facturas')
        @break
    @default
        @section ('page-title', 'Admin')
@endswitch

{{-- @if ($texto == "Artículos")
    @section ('page-title', 'Admin: Artículos')
@elseif ($texto == "Clientes")
    @section ('page-title', 'Admin: Clientes')
@elseif ($texto == "Facturas")
    @section ('page-title', 'Admin: Facturas')
@else
    @section ('page-title', 'Admin')
@endif --}}

@section('content-area')
@include('included-views.admin-header')
@include('included-views.admin-navbar')
    <h1>Admin: {{ $texto }}</h1>
    <hr/>
@endsection

{{-- <h1>Administrador: {{ $texto }}</h1>
<br/>
<a href="{{ route('inicio') }}"><h2>Ir a inicio</h2></a> --}}
