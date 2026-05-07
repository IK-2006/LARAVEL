<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::query()
            ->latest()
            ->get();

        return view('produto.index', compact('produtos'));
    }

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
        'nome' => ['required', 'string', 'max:255'],
        'preco' => ['required', 'double', 'max:10'],
        'quantidade' => ['required', 'double', 'max:10'],
        'tamanho' => ['required', 'string', 'max:4'],
        'marca' => ['required', 'string', 'max:255'],
        'fornecedor_id' => ['required'],
    
        ]);

        Produto::create($dados);

        return redirect()
            ->route('produto.index')
            ->with('success', 'produto criado com sucesso.');
    }

    public function edit(Produto $produto)
    {
        return view('produto.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'preco' => ['required', 'double', 'max:10'],
            'quantidade' => ['required', 'double', 'max:10'],
            'tamanho' => ['required', 'string', 'max:4'],
            'marca' => ['required', 'string', 'max:255'],
            'fornecedor_id' => ['required'],                 
        ]);

        $produto->update($dados);

        return redirect()
            ->route('produto.index')
            ->with('success', 'Produto atualizada com sucesso.');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()
            ->route('produto.index')
            ->with('success', 'Produto removida com sucesso.');
    }
}