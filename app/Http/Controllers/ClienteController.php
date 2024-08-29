<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $clientes = Cliente::when($search, function ($query, $search) {
            $query->where('nombre', 'like', "%{$search}%")
                  ->orWhere('apellido', 'like', "%{$search}%")
                  ->orWhere('ci', 'like', "%{$search}%")
                  ->orWhere('telefono', 'like', "%{$search}%")
                  ->orWhere('correo', 'like', "%{$search}%");
        })->get();
        
        return view('Clientes.index', compact('clientes'));
    }
    
    public function create()
    {
        return view('Clientes.create');
    }
    public function  store(Request $request)
    {
        Cliente::create ($request->all());
        return redirect()->route('Clientes.index')->with('success', 'El nuevo cliente fue registrado correctamente');
    }
    public function show($id)
    {
        $clientes = Cliente::findOrFail($id);
        return view('Clientes.show', compact('clientes'));
    }
    public function edit ($id)
    {
        $cliente = Cliente::find($id);
        return view('Clientes.edit', compact('cliente'));
    }
    public function update(Request $request, $id)
    {
        $cliente  = Cliente::find($id);
        $cliente->update($request->all());

        return redirect()->route("Clientes.index")->with('success', 'el cliente fue modificado correctamente ');
    }
    public function destroy(Product $product)
    {
        try {
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();

            return redirect()->route('Clientes.index')->with('success', 'El Cliente fue eliminado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('Clientes.index')->with('error', 'Error al eliminar el cliente: ' . $e->getMessage());
        }
    }
}
