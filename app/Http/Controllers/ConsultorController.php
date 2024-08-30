<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultor;

class ConsultorController extends Controller
{
    public function index()
    {
        $consultores = Consultor::all();
        return view('Consultores.index', compact('consultores'));
    }

    public function create()
    {
        return view('Consultores.create');
    }

    public function store(Request $request)
    {
        Consultor::create($request->all());
        return redirect()->route('Consultores.index')->with('success', 'El consultor fue creado correctamente');
    }

    public function show(string $id)
    {
        $consultor = Consultor::find($id);
        return view('Consultores.show', compact('consultor'));
    }

    public function edit($id)
    {
        $consultor = Consultor::find($id);
        return view('Consultores.edit', compact('consultor'));
    }

    public function update(Request $request, $id)
    {
        $consultor = Consultor::find($id);
        $consultor->update($request->all());
        return redirect()->route('Consultores.index')->with('success', 'El consultor se ha modificado correctamente');
    }

    public function destroy(string $id)
    {
        $consultor = Consultor::find($id);
        $consultor->delete();
        return redirect()->route('Consultores.index')->with('success', 'El consultor fue eliminado correctamente');
    }
}
