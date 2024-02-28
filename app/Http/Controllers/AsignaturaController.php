<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("asignaturas.index", ["asignaturas"=>Asignatura::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("asignaturas.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Asignatura::create([
            "denominacion" => $request->denominacion,
            "numero_de_trimestres" => $request->trimestres,

        ]);
        return redirect()->route("asignaturas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignatura $asignatura)
    {
        return view("asignaturas.show", ["asignatura"=>$asignatura]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignatura $asignatura)
    {
        return view("asignaturas.edit", ["asignatura"=>$asignatura]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asignatura $asignatura)
    {
        $asignatura->update([
            "nombre" => $request->nombre
        ]);
        return redirect()->route("asignaturas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();
        return redirect()->route("asignaturas.index");
    }
}
