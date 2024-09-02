<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comprobante;
use App\Models\Consulta;

class ComprobanteController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $comprobantes = Comprobante::where('detalle', 'like', '%' . $search . '%')
                                    ->get();
        } else {
            $comprobantes = Comprobante::with('consulta')->get();
        }
        return view('Comprobantes.index', compact('comprobantes'));
    }

    public function create()
    {
        $consultas = Consulta::all();
        return view('Comprobantes.create', compact('consultas'));
    }

    public function store(Request $request)
    {
        Comprobante::create($request->all());
        return redirect()->route('Comprobantes.index')->with('success', 'El Comprobante fue creado correctamente');
    }

    public function show(string $id)
    {
        $comprobante = Comprobante::find($id);
        return view('Comprobantes.show', compact('comprobante'));
    }

    public function edit(string $id)
    {
        $consultas = Consulta::all();
        $comprobante = Comprobante::findOrFail($id);
        return view('Comprobantes.edit', compact('comprobante' , 'consultas'));
    }

    public function update(Request $request, string $id)
    {
        $comprobante = Comprobante::findOrFail($id);
        $comprobante->update($request->all());
        return redirect()->route('Comprobantes.index')->with('success', 'El Comprobante se ha modificado correctamente');
    }

    public function destroy(string $id)
    {
        $comprobante = Comprobante::find($id);
        $comprobante->delete();
        return redirect()->route('Comprobantes.index')->with('success', 'El Comprobante fue eliminado correctamente');
    }
}
