@extends ('layouts.main-layout')
@section('content-area')
    <h1>Nuevo Artículo</h1>
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
        <form action="{{ route('articulos.store') }}" method="post">
            @csrf
            <legend>Datos del Artículo</legend>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" />
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-4">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" class="form-control" min="0.01"
                        step="0.01" value="{{ old('precio') }}" />
                </div>
                <div class="input-field col-sm-4 text-center">
                    <label>Envío a domicilio</label><br />
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="envio" id="envio1" autocomplete="off"
                            value="N" checked />
                        <label class="btn btn-outline-secondary" for="form_envio1">NO</label>
                        <input type="radio" class="btn-check" name="envio" id="envio2" autocomplete="off"
                            value="S" {{old('envio')=='S' ? 'checked' : ''}} />
                        <label class="btn btn-outline-secondary" for="envio2">SI</label>
                    </div>
                </div>
                <div class="input-field col-sm-4">
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" id="stock" class="form-control" min="0" value="{{ old('stock') }}" />
                </div>
            </div>
            <div class="row mt-4">
                <div class="input-field col-sm-12">
                    <label for="observaciones">Observaciones</label>
                    <textarea name="observaciones" id="observaciones" class="form-control">{{ old('observaciones') }}</textarea>
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
