<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::query()
            ->latest()
            ->get();

        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'int', 'max:11'],
            'endereço' => ['required', 'string', 'max:255'],
        ]);

        Curso::create($dados);

        return redirect()
            ->route('fornecedores.index')
            ->with('success', 'Fornecedor criado com sucesso.');
    }

    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, Fornecedor $fornecedor)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'int', 'max:11'],
            'endereço' => ['required', 'string', 'max:255'],
        ]);

        $fornecedor->update($dados);

        return redirect()
            ->route('fornecedores.index')
            ->with('success', 'Fornecedor atualizado com sucesso.');
    }

    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();

        return redirect()
            ->route('fornecedores.index')
            ->with('success', 'Fornecedor removido com sucesso.');
    }
}