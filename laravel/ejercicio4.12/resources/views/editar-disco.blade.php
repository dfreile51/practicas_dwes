@extends('layouts.main-layout')
@section('content-area')
    <h1>Editar Disco</h1>
    <hr />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <form action="{{ route('discos.update', ['disco'=>$disco]) }}" method="post">
            @method('PUT')
            @csrf
            <legend>Editar del Disco</legend>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') ? : $disco->titulo }}" />
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="autor">Autor</label>
                    <input type="text" name="autor" id="autor" class="form-control" value="{{ old('autor') ? : $disco->autor}}" />
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-6">
                    <label for="genero">Género</label>
                    <input type="text" name="genero" id="genero" class="form-control" value="{{ old('genero') ? : $disco->genero}}" />
                </div>
                <div class="input-field col-sm-6">
                    <label for="anio">Año</label>
                    <input type="number" name="anio" id="anio" class="form-control" min="1800" max="2023" value="{{ old('anio') ? : $disco->año}}"/>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-6 text-lg-end">
                    <input type="submit" class="btn btn-primary" value="Enviar" />
                </div>
                <div class="input-field col-sm-6 text-lg-start">
                    <input type="reset" class="btn btn-danger" value="Borrar" />
                </div>
            </div>
        </form>
    </div>
@endsection
