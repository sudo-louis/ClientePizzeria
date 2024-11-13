<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{

    public function index()
    {
        $inventario = Inventario::all();
        return view('pagina.index', compact('inventario'));
    }

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

    public function productosCarrito(){
        return view('/pagina/carrito')->with('productosCarrito',\Cart::getContent());
    }

    public function agregarCarrito(Request $request){
        //dd($request->all());
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'description' => $request->description,
                'image' => $request->image,
                //'subtotal' => $request->price * $request->quantity,
            )
        ));
        return redirect('/prueba/carrito');
    }
}