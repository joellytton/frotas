@extends('layout.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Motoristas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Início</a></li>
                        <li class="breadcrumb-item active">Lista de motoristas</li>
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
                            <a class="btn btn-primary btn-md" href="{{route('motorista.create')}}" role="button">
                                Novo Motorista
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de motorista</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th class="text-center">Nome</th>
                                    <th class="text-center">Cpf</th>
                                    <th class="text-center">Data Nascimento</th>
                                    <th class="text-center">Numero Registro</th>
                                    <th class="text-center">Validade</th>
                                    <th class="text-center">Ação</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($motoristas as $motorista)
                                    <tr>
                                        <td>{{$motorista->id}}</td>
                                        <td class="text-center">{{$motorista->nome}}</td>
                                        <td class="text-center">{{$motorista->cpf}}</td>
                                        <td class="text-center">{{$motorista->data_nascimento}}</td>
                                        <td class="text-center">{{$motorista->numero_registro}}</td>
                                        <td class="text-center">{{$motorista->validade}}</td>
                                        <td class="text-center">
                                            <a href="{{route('motorista.edit', $motorista->id)}}"
                                               class="btn btn-primary btn-sm mr-1">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{route('motorista.destroy', $motorista->id)}}"
                                                  method="POST" id="formLaravel{{$motorista->id}}"
                                                  style="display:inline;">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm mr-1">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
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
