<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.lista')->with([
            'empresa' => 'Laratienda',
            'articulos' => $articulos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulos.nuevo')->with(['empresa' => 'Laratienda']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'nombre' => 'required|max:50|unique:articulos,nombre',
            'descripcion' => 'required',
            'precio' => 'required|gte:0',
            'stock' => 'required|gte:0',
            'envio' => 'required|in:N,S',
        ];
        $request->validate($reglas);

        // Almacenar articulos metodo largo
        // $articulo = new Articulo();
        // $articulo->nombre = $request->form_nombre;
        // $articulo->descripcion = $request->form_descripcion;
        // $articulo->precio = $request->form_precio;
        // $articulo->envio = $request->form_envio;
        // $articulo->stock = $request->form_stock;
        // $articulo->observaciones = $request->form_observaciones;
        // $articulo->save();

        // Almacenar articulos metodo corto
        // Articulo::create($request->all());

        // Almacenar articulo metodo intermedio
        Articulo::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'envio' => $request->envio,
            'stock' => $request->stock,
            'observaciones' => $request->observaciones,
        ]);

        return view('articulos.guardado')->with([
            'empresa' => 'Laratienda',
            'articulo' => $request->nombre,
            'operacion' => 'guardado'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        return view('articulos.detalle')->with([
            'empresa' => 'Laratienda',
            'articulo' => $articulo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        return view('articulos.editar')->with([
            'empresa' => 'Laratienda',
            'articulo' => $articulo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        $reglas = [
            'nombre' => 'required|max:50|unique:articulos,nombre,'.$articulo->id,
            'descripcion' => 'required',
            'precio' => 'required|gte:0',
            'stock' => 'required|gte:0',
            'envio' => 'required|in:N,S',
        ];
        $request->validate($reglas);

        // Actualización del artículo
        $articuloEditado = Articulo::find($articulo->id);
        $articuloEditado->nombre = $request->nombre;
        $articuloEditado->descripcion = $request->descripcion;
        $articuloEditado->precio = $request->precio;
        $articuloEditado->stock = $request->stock;
        $articuloEditado->observaciones = $request->observaciones;
        $articuloEditado->save();

        // Mensaje
        return view('articulos.guardado')->with([
            'empresa' => 'Laratienda',
            'articulo' => $request->nombre,
            'operacion' => 'actualizado'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        $nombre = $articulo->nombre;
        $articulo->delete();
        return view('articulos.guardado')->with([
            'empresa' => 'Laratienda',
            'articulo' => $nombre,
            'operacion' => 'eliminado',
        ]);
    }
}
