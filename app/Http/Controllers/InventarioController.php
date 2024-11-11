<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventario = Inventario::all();
        return view('pagina.index', compact('inventario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $datosInventario = request()->except('_token');
        // $imagen = $request->file('image');
        // if ($imagen && $imagen->isValid()) {
        //     $rutaCarpeta = 'storage/uploads';
        //     $nombreImagen = $imagen->getClientOriginalName();
        //     $request->file('image')->move($rutaCarpeta, $nombreImagen);
        //     $datosInventario['image'] = $nombreImagen;
        // }

        // Inventario::insert($datosInventario);
        // return redirect()->route('pagina.ingresar')->with('success', 'Cliente registrado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
