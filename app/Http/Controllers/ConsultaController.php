<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Cliente;
use App\Models\Consultor;

class ConsultaController extends Controller
{
    public function index()
    {
        $consultas = Consulta::with(['cliente', 'consultor'])->get();
        return view('Consultas.index', compact('consultas'));
    }

    public function create()
    {
        $consultores = Consultor::all();
        $clientes = Cliente::all();
    
       
    
        return view('consultas.create', compact('consultores', 'clientes'));
    }
    
    public function store(Request $request)
    {
        Consulta::create($request->all());
        return redirect()->route('Consultas.index')->with('success', 'La Consulta fue creada correctamente');
    }
    public function show(string $id)
    {
        $consulta = Consulta::findOrFail($id);
        return view('Consultas.show', compact('consulta'));
    }
    public function edit($id)
    {   
        $consulta = Consulta::find($id);
    if (!$consulta) {
        return redirect()->route('Consultas.index')->with('error', 'Consulta no encontrada.');
    }
    $clientes = Cliente::all();
    $consultores = Consultor::all();
    return view('Consultas.edit', compact('consulta', 'clientes', 'consultores'));
    }
    public function update(Request $request, $id)
    {
        $consulta  = Consulta::find($id);
        $consulta->update($request->all());

        return redirect()->route("Consultas.index")->with('success', 'La consulta fue modificado correctamente ');
    }
    public function destroy(Product $product)
    {
        try {
            $consulta = Cliente::findOrFail($id);
            $consulta->delete();

            return redirect()->route('Consultas.index')->with('success', 'El Cliente fue eliminado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('Consultas.index')->with('error', 'Error al eliminar el cliente: ' . $e->getMessage());
        }
    }
}
