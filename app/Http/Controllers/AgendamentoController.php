<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AgendamentoController extends Controller
{
    public function index(): View
    {
        $agendamentos = Agendamento::all();

        return view('agendamento.index', compact('agendamentos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Agendamento $agendamento)
    {
        //
    }

    public function edit(Agendamento $agendamento)
    {
        //
    }

    public function update(Request $request, Agendamento $agendamento)
    {
        //
    }

    public function destroy(Agendamento $agendamento)
    {
        //
    }
}
