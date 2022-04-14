<?php

namespace App\Http\Controllers;

use App\Models\imagenes;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = imagenes::paginate(10);
        return view('imagenes.index', compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imagenes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($imagen = $request->file('imagenUrl')) {
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
        }
        $imagenes = new imagenes();

        $imagenes->imagenFecha = $request->input('imagenFecha');
        $imagenes->imagenFechaLarga = $request->input('imagenFechaCorta');
        $imagenes->imagenFechaCorta = $request->input('imagenFechaLarga');
        $imagenes->imagenTitulo = $request->input('imagenTitulo');
        $imagenes->imagenDescripcion = $request->input('imagenDescripcion');
        $imagenes->imagenUrl = $imagenProducto;

        $imagenes->save();

        // imagenes::create($informacion);
        return redirect()->route('imagenes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function show(imagenes $imagenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function edit(imagenes $imagenes)
    {
        return view('imagenes.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imagenes $imagenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imagenes  $imagenes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagenEliminada = imagenes::findOrFail($id);
        $imagenEliminada->delete();
        return redirect()->route('imagenes.index');
    }
}
