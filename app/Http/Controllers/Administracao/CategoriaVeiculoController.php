<?php

namespace App\Http\Controllers\Administracao;

use App\Http\Controllers\Controller;
use App\Models\Administracao\CategoriaVeiculo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriaVeiculoController extends Controller
{

    public function index(Request $request): View
    {
        $perPage = 10;
        $keyword =  empty($request->search) ? '' : $request->search;
        $categorias = CategoriaVeiculo::buscar($perPage, $keyword);

        return view('administracao.categoria_veiculo.index', compact('categorias'));
    }

    public function create()
    {
        return view('administracao.categoria_veiculo.create');
    }
//
//
//    public function store(Request $request)
//    {
//        //
//    }
//
//
//
//    public function edit(CategoriaVeiculo $categoriaVeiculo)
//    {
//        //
//    }
//
//
//    public function update(Request $request, CategoriaVeiculo $categoriaVeiculo)
//    {
//        //
//    }
//
//
//    public function destroy(CategoriaVeiculo $categoriaVeiculo)
//    {
//        //
//    }
}
