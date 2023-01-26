<?php

namespace App\Http\Controllers;

use App\Models\Disco;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DiscoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discos = Disco::all();
        return view('discos')->with([
            'nombre' => 'Discos',
            'discos' => $discos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nuevo-disco')->with([
            'nombre' => 'Discos'
        ]);
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
            'titulo' => 'required|max:50|unique:discos,titulo',
            'autor' => 'required',
            'genero' => 'required',
            'anio' => 'required',
        ];

        $request->validate($reglas);

        Disco::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'genero' => $request->genero,
            'año' => $request->anio,
        ]);

        return view('disco-guardado')->with([
            'nombre' => 'Discos',
            'disco' => $request->titulo,
            'operacion' => 'guardado'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function show(Disco $disco)
    {
        return view('mostrar-disco')->with([
            'nombre' => 'Discos',
            'disco' => $disco
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function edit(Disco $disco)
    {
        return view('editar-disco')->with([
            'nombre' => 'Discos',
            'disco' => $disco
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disco $disco)
    {
        $reglas = [
            'titulo' => 'required|max:50|unique:discos,titulo,' . $disco->id,
            'autor' => 'required',
            'genero' => 'required',
            'anio' => 'required',
        ];
        $request->validate($reglas);

        $discoEditado = Disco::find($disco->id);
        $discoEditado->titulo = $request->titulo;
        $discoEditado->autor = $request->autor;
        $discoEditado->genero = $request->genero;
        $discoEditado->año = $request->anio;
        $discoEditado->save();

        return view('disco-guardado')->with([
            'nombre' => 'Disco',
            'disco' => $request->titulo,
            'operacion' => 'actualizado'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disco $disco)
    {
        $titulo = $disco->titulo;
        $disco->delete();
        return view('disco-guardado')->with([
            'nombre' => 'Disco',
            'disco' => $titulo,
            'operacion' => 'eliminado'
        ]);
    }
}
