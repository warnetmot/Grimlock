<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultor;

class ConsultorController extends Controller
{
    public function index()
    {
        $consultores = Consultor::all();
        return view('Consultor.index', compact('consultores'));
    }

    public function create()
    {
        return view('Consultor.create');
    }

    public function store(Request $request)
    {
        Consultor::create($request->all());
        return redirect()->route('Consultor.index')->with('success', 'El consultor fue creado correctamente');
    }

    public function show(Consultor $consultor)
    {
        return view('Consultor.show', compact('consultor'));
    }

    public function edit(Consultor $consultor)
    {
        return view('Consultor.edit', compact('consultor'));
    }

    public function update(Request $request, Consultor $consultor)
    {
        $consultor->update($request->all());
        return redirect()->route('Consultor.index')->with('success', 'El consultor se ha modificado correctamente');
    }

    public function destroy(Consultor $consultor)
    {
        $consultor->delete();
        return redirect()->route('Consultor.index')->with('success', 'El consultor fue eliminado correctamente');
    }
}
