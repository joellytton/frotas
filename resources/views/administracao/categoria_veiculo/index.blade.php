@extends('layout.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categorias</h1>
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
                            <a class="btn btn-primary btn-md" href="{{route('categoriaVeiculo.create')}}" role="button">
                                Nova Categoria
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de categorias</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th class="text-center">Nome</th>
                                    <th class="text-center">Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categorias as $categoria)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-center">{{$categoria->nome}}</td>
                                        <td class="text-center">
                                            <a href="{{route('categoriaVeiculo.edit', $categoria->id)}}"
                                               class="btn btn-primary btn-sm mr-1">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{route('categoriaVeiculo.destroy', $categoria->id)}}"
                                               class="btn btn-danger btn-sm mr-1">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
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
