<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $users = User::where('name', 'like', '%' . $search . '%')
                                    ->orWhere('email', 'like', '%' . $search . '%')
                                    ->get();
        } else {
            $users = User::all();
        }
        return view('Users.index', compact('users'));
    }

    public function create()
    {
        return view('Users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('Users.index')->with('success', 'El usuario fue creado correctamente');
    }

    public function show(string $id)
    {
        $user = User::find($id);
        return view('Users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('Users.index')->with('success', 'El usuario se ha modificado correctamente');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('Users.index')->with('success', 'El usuario fue eliminado correctamente');
    }
}
