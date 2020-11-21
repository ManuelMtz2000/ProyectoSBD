<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::get();
        return view('/empleados/indexEmpleados',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/empleados/formEmpleados');
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
            'nombreEmpleado' => 'required|string|max:35',
            'telefonoEmpleado' => 'required|string|max:10',
            'direccionEmpleado' => 'required|string|max:30',
            'fechaAltaEmpleado' => 'required',
            'statusEmpleado' => 'required',
        ]);
        Empleado::create($request->all());
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('/empleados/showEmpleados', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('/empleados/formEmpleados', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombreEmpleado' => 'required|string|max:35',
            'telefonoEmpleado' => 'required|string|max:10',
            'direccionEmpleado' => 'required|string|max:30',
            'fechaAltaEmpleado' => 'required',
            'statusEmpleado' => 'required',
        ]);
        Empleado::where('id',$empleado->id)->update($request->except('_method','_token'));
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
