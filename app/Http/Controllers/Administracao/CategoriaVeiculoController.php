<?php

namespace App\Http\Controllers\Administracao;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracao\CategoriaVeiculoRequest;
use App\Models\Administracao\CategoriaVeiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class CategoriaVeiculoController extends Controller
{

    public function index(Request $request): View
    {
        $perPage = 10;
        $keyword = empty($request->search) ? '' : $request->search;
        $categorias = CategoriaVeiculo::buscar($perPage, $keyword);

        return view('administracao.categoria_veiculo.index', compact('categorias'));
    }

    public function create()
    {
        return view('administracao.categoria_veiculo.create');
    }


    public function store(CategoriaVeiculoRequest $request): Response
    {
        DB::beginTransaction();

        $categoria = CategoriaVeiculo::create($request->all());

        if (!$categoria) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao cadastrar a categoria.');
        }

        DB::commit();
        return redirect()->route('categoriaVeiculo.index')->with('success', "Categoria cadastrada com sucesso.");
    }


    public function edit(CategoriaVeiculo $categoriaVeiculo): View
    {
        return view('administracao.categoria_veiculo.edit', compact('categoriaVeiculo'));
    }


    public function update(CategoriaVeiculoRequest $request, CategoriaVeiculo $categoriaVeiculo)
    {
        DB::beginTransaction();

        $categoriaVeiculo->update($request->all());

        if (!$categoriaVeiculo) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao atualizar a categoria');
        }

        DB::commit();
        return redirect()->route('categoriaVeiculo.index')->with('success', "Categoria atualizada com sucesso.");
    }


    public function destroy(CategoriaVeiculo $categoriaVeiculo)
    {
        DB::beginTransaction();

        $categoriaVeiculo->update(['status' => 'inativo', 'user_alteracao_id' => auth()->user()->id]);

        if (!$categoriaVeiculo) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao excluir a categoria.');
        }

        DB::commit();
        return redirect()->route('categoriaVeiculo.index')->with('success', "Categoria excluída com sucesso.");
    }
}
