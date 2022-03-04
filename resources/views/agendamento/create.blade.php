@extends('layout.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Novo Agendamento</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Início</a></li>
                        <li class="breadcrumb-item">
                            <a href="{{route('agendamento.index')}}">Lista de agendamentos</a>
                        </li>
                        <li class="breadcrumb-item active">Cadastrar agendamento</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card-header">
                        <h3 class="card-title">
                            Informações do Solicitante
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="nome">Nome:</label> JOELLYTTON MENDONÇA DOS SANTOS
                                <br>
                                <label for="nome">CPF:</label> 020.748.252-77
                                <br>
                                <label for="nome">RG:</label> 9.878.878-8
                                <br>
                                <label for="nome">Contato:</label> (11) 99876-5432
                            </div>

                            <div class="col-6">
                                <label for="cpf">Email:</label> joellytton25@gmail.com
                                <br>
                                <label for="cpf">Departamento:</label> Departamento de Informática
                                <br>
                                <label for="cpf">Função:</label> Analista de Sistemas
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body solicitante  -->
                    <form action="{{route('agendamento.store')}}" method="post" class="form-horizontal">
                        @csrf
                        @include('agendamento.form')
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
