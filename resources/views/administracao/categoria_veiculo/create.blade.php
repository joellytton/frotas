@extends('layout.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nova Categoria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Início</a></li>
                        <li class="breadcrumb-item"><a href="{{route('categoriaVeiculo.index')}}">Lista de categorias</a></li>
                        <li class="breadcrumb-item active">Nova categoria veículo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
