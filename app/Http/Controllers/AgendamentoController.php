<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class AgendamentoController extends Controller
{
    public function index(): View
    {
        $agendamentos = Agendamento::all();

        return view('agendamento.index', compact('agendamentos'));
    }

    public function create(): View
    {
        return view('agendamento.create');
    }

    public function store(Request $request): Response
    {
        DB::beginTransaction();

        if (!Agendamento::create($request->all())) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Falha ao cadastrar um agendamento');
        }
        DB::commit();
        return redirect()->route('agendamento.index')->with('success', 'Agendamento cadastrado com sucesso');
    }

    public function show(Agendamento $agendamento): View
    {
        return view('agendamento.show', compact('agendamento'));
    }

    public function edit(Agendamento $agendamento): View
    {
        return view('agendamento.edit', compact('agendamento'));
    }

    public function update(Request $request, Agendamento $agendamento): Response
    {
        DB::beginTransaction();

        if (!$agendamento->update($request->all())) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Falha ao atualizar um agendamento');
        }
        DB::commit();
        return redirect()->route('agendamento.index')->with('success', 'Agendamento atualizado com sucesso');
    }

    public function destroy(Agendamento $agendamento): Response
    {
        DB::beginTransaction();

        if (!$agendamento->update(['status' => 'inativo', 'user_alteracao_id' => auth()->user()->id])) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Falha ao excluir um agendamento');
        }
        DB::commit();
        return redirect()->route('agendamento.index')->with('success', 'Agendamento excluído com sucesso');
    }
}
