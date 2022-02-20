<?php

namespace App\Http\Controllers\Administracao;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administracao\MotoristaRequest;
use App\Models\Administracao\Motorista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class MotoristaController extends Controller
{
    public function index(): View
    {
        $perPage = 10;
        $keyword = empty($request->search) ? '' : $request->search;

        $motoristas = Motorista::buscar($perPage, $keyword);

        return view('administracao.motorista.index', compact('motoristas'));
    }

    public function create(): View
    {
        return view('administracao.motorista.create');
    }

    public function store(MotoristaRequest $request): Response
    {
        DB::beginTransaction();

        if (!Motorista::create($request->all())) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao cadastrar o motorista!');
        }

        DB::commit();
        return redirect()->route('motorista.index')->with('success', 'Motorista cadastrado com sucesso!');
    }

    public function edit(Motorista $motorista): View
    {
        return view('administracao.motorista.edit', compact('motorista'));
    }

    public function update(MotoristaRequest $request, Motorista $motorista): Response
    {
        DB::beginTransaction();

        if (!$motorista->update($request->all())) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao atualizar o motorista!');
        }

        DB::commit();
        return redirect()->route('motorista.index')->with('success', 'Motorista atualizado com sucesso!');
    }

    public function destroy(Motorista $motorista): Response
    {
        DB::beginTransaction();

        if (!$motorista->update(['status' => 'inativo', 'user_alteracao_id' => auth()->user()->id])) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao excluir o motorista!');
        }

        DB::commit();
        return redirect()->route('motorista.index')->with('success', 'Motorista excluído com sucesso!');
    }
}
