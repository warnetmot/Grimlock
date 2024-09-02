<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formacion;
use App\Models\Consultor;

class FormacionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $formaciones = Formacion::where('especialidad', 'like', '%' . $search . '%')
                                    ->orWhere('institucion', 'like', '%' . $search . '%')
                                    ->get();
        } else {
            $formaciones = Formacion::with('consultor')->get();
        }
        return view('Formaciones.index', compact('formaciones'));
    }

    public function create()
    {
        $consultores = Consultor::all();
        return view('Formaciones.create', compact('consultores'));
    }

    public function store(Request $request)
    {
        Formacion::create($request->all());
        return redirect()->route('Formaciones.index')->with('success', 'La formación fue creada correctamente');
    }

    public function show(string $id)
    {
        $formacion = Formacion::find($id);
        return view('Formaciones.show', compact('formacion'));
    }

    public function edit(string $id)
    {
        $consultores = Consultor::all();
        $formacion = Formacion::findOrFail($id);
        return view('Formaciones.edit', compact('formacion' , 'consultores'));
    }

    public function update(Request $request, string $id)
    {
        $formacion = Formacion::findOrFail($id);
        $formacion->update($request->all());
        return redirect()->route('Formaciones.index')->with('success', 'La formación se ha modificado correctamente');
    }

    public function destroy(string $id)
    {
        $formacion = Formacion::find($id);
        $formacion->delete();
        return redirect()->route('Formaciones.index')->with('success', 'La formación fue eliminada correctamente');
    }
}
