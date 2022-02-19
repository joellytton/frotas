<?php

namespace App\Http\Controllers\Administracao;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracao\VeiculoRequest;
use App\Models\Administracao\CategoriaVeiculo;
use App\Models\Administracao\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class VeiculoController extends Controller
{

    public function index(Request $request): View
    {
        $perPage = 10;
        $keyword = empty($request->search) ? '' : $request->search;

        $veiculos = Veiculo::buscar($perPage, $keyword);
        return view('administracao.veiculo.index', compact('veiculos'));
    }

    public function create(): View
    {
        $categorias = CategoriaVeiculo::where('status', '=', 'ativo')->get();
        return view('administracao.veiculo.create', compact('categorias'));
    }

    public function store(VeiculoRequest $request): Response
    {
        DB::beginTransaction();

        $veiculo = Veiculo::create($request->all());

        if (!$veiculo) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Falha ao cadastrar veículo!');
        }

        DB::commit();
        return redirect()->route('veiculo.index')->with('success', 'Veículo cadastrado com sucesso!');
    }


    public function edit(Veiculo $veiculo): View
    {
        $categorias = CategoriaVeiculo::where('status', '=', 'ativo')->get();
        return view('administracao.veiculo.edit', compact('veiculo', 'categorias'));
    }


    public function update(VeiculoRequest $request, Veiculo $veiculo)
    {
        DB::beginTransaction();

        if (!$veiculo->update($request->all())) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Falha ao atualizar veículo!');
        }

        DB::commit();
        return redirect()->route('veiculo.index')->with('success', 'Veículo atualizado com sucesso!');
    }

    public function destroy(Veiculo $veiculo)
    {
        DB::beginTransaction();

        if (!$veiculo->update(['status' => 'inativo', 'user_alteracao_id' => auth()->user()->id])) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Falha ao excluir o veículo!');
        }

        DB::commit();
        return redirect()->route('veiculo.index')->with('success', 'Veículo excluído com sucesso!');
    }
}
