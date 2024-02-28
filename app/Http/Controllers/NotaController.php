<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Asignatura;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use App\Models\Nota;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("notas.index", ["notas"=>Nota::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("notas.create",["alumnos"=>Alumno::all(),"asignaturas"=>Asignatura::all()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asignatura = Asignatura::find($request->asignatura);
        $notaE = Nota::where("alumno_id", $request->alumno)
        ->where("asignatura_id", $request->asignatura)
        ->where("trimestre", $request->trimestre)
        ->first();

        if($request->trimestre <= $asignatura->numero_de_trimestres && !$notaE){
            Nota::create([
                "alumno_id" => $request->alumno,
                "asignatura_id" => $request->asignatura,
                "nota" => $request->nota,
                "trimestre" => $request->trimestre,
            ]);
            return redirect()->route("notas.index");

        }else
        return redirect()->route("notas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Nota $nota)
    {
        return view("notas.show", ["alumno"=>$nota]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nota $nota)
    {
        return view("notas.edit", ["nota"=>$nota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nota $nota)
    {
        $nota->update([
            "notas" => $request->nombre
        ]);
        return redirect()->route("notas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota)
    {
        $nota->delete();
        return redirect()->route("notas.index");
    }
}
