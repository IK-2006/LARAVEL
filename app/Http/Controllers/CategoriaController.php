<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::query()
            ->latest()
            ->get();

        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
        ]);

        Curso::create($dados);

        return redirect()
            ->route('categoria.index')
            ->with('success', 'categoria criada com sucesso.');
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            
        ]);

        $curso->update($dados);

        return redirect()
            ->route('categoria.index')
            ->with('success', 'categoria atualizada com sucesso.');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()
            ->route('categoria.index')
            ->with('success', 'Categoria removida com sucesso.');
    }
}