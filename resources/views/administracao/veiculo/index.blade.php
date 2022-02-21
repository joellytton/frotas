@extends('layout.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Veículos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Início</a></li>
                        <li class="breadcrumb-item active">Categoria veículo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 text-right mb-4">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-primary btn-md" href="{{route('veiculo.create')}}" role="button">
                                Novo Veiculo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de veículos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th class="text-center">Marca</th>
                                    <th class="text-center">Modelo</th>
                                    <th class="text-center">Ano</th>
                                    <th class="text-center">Cor</th>
                                    <th class="text-center">Categoria</th>
                                    <th class="text-center">Km inicial</th>
                                    <th class="text-center">Placa</th>
                                    <th class="text-center">Patrimonio</th>
                                    <th class="text-center">Chassi</th>
                                    <th class="text-center">Renavam</th>
                                    <th class="text-center">Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($veiculos as $veiculo)
                                    <tr>
                                        <td>{{$veiculo->id}}</td>
                                        <td class="text-center">{{$veiculo->marca}}</td>
                                        <td class="text-center">{{$veiculo->modelo}}</td>
                                        <td class="text-center">{{$veiculo->ano}}</td>
                                        <td class="text-center">{{$veiculo->cor}}</td>
                                        <td class="text-center">{{$veiculo->marca}}</td>
                                        <td class="text-center">{{$veiculo->km_inicial}}</td>
                                        <td class="text-center">{{$veiculo->placa}}</td>
                                        <td class="text-center">{{$veiculo->patrimonio}}</td>
                                        <td class="text-center">{{$veiculo->chassis}}</td>
                                        <td class="text-center">{{$veiculo->renavam}}</td>
                                        <td class="text-center">
                                            <a href="{{route('veiculo.edit', $veiculo->id)}}"
                                               class="btn btn-primary btn-sm mr-1">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{route('veiculo.destroy', $veiculo->id)}}"
                                                  method="POST" id="formLaravel{{$veiculo->id}}"
                                                  style="display:inline;">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm mr-1">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center">Nenhum veiculo encontrado</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
