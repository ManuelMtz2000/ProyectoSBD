<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::get();
        return view('/productos/indexProductos',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/productos/formProductos');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreProducto' => 'required|string|max:20',
            'precioProducto' => 'required',
            'medidaProducto' => 'required',
            'piezasProducto' => 'required',
            'grosorProducto' => 'required',
            'colorProducto' => 'required|string|max:15',
            'formaProducto' => 'required|string|max:20',
        ]);
        Productos::create($request->all());
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $producto)
    {
        return view('/productos/showProductos', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $producto)
    {
        return view('/productos/formProductos', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $producto)
    {
        $request->validate([
            'nombreProducto' => 'required|string|max:20',
            'precioProducto' => 'required',
            'medidaProducto' => 'required',
            'piezasProducto' => 'required',
            'grosorProducto' => 'required',
            'colorProducto' => 'required|string|max:15',
            'formaProducto' => 'required|string|max:20',
        ]);
        Productos::where('id',$producto->id)->update($request->except('_method','_token'));
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
