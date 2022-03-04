<!-- form start -->
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
<div class="card-header">
    <h3 class="card-title">
        Informações de Deslocamento
    </h3>
</div>

<div class="card-body">
    <div class="form-group row">
        <div class="col-2 d-inline-flex align-items-end">
            <label for="nome">Local de origem: </label>
        </div>

        <div class="col-4 d-inline-flex">
            <select name="origem" class="form-control {{$errors->has('origem') ? 'is-invalid' : ''}}"
                    aria-describedby="origemFeedback">
                <option value="">Selecione</option>
                <option value="1">São Paulo</option>
                <option value="2">Rio de Janeiro</option>
                <option value="3">Belo Horizonte</option>
                <option value="4">Curitiba</option>
            </select>

            @if ($errors->has('origem'))
                <div id="origemFeedback" class="invalid-feedback">
                    {{$errors->first('origem')}}
                </div>
            @endif
        </div>

        <div class="col-6 d-inline-flex">
            <input type="text" class="form-control {{$errors->has('local_origem') ? 'is-invalid' : ''}}"
                   name="nome" id="nome" placeholder="Informe o local de origem aqui..."
                   aria-describedby="local_origemFeedback"
                   value="{{old('local_origem', @$motorista->nome)}}" maxlength="250">
            @if ($errors->has('local_origem'))
                <div id="local_origemFeedback" class="invalid-feedback">
                    {{$errors->first('local_origem')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-2 d-inline-flex align-items-end">
            <label for="destino">Local de destino: </label>
        </div>

        <div class="col-4 d-inline-flex">
            <select name="destino" class="form-control {{$errors->has('destino') ? 'is-invalid' : ''}}"
                    aria-describedby="destinoFeedback">
                <option value="">Selecione</option>
                <option value="1">São Paulo</option>
                <option value="2">Rio de Janeiro</option>
                <option value="3">Belo Horizonte</option>
                <option value="4">Curitiba</option>
            </select>

            @if ($errors->has('destino'))
                <div id="destinoFeedback" class="invalid-feedback">
                    {{$errors->first('destino')}}
                </div>
            @endif
        </div>

        <div class="col-6 d-inline-flex">
            <input type="text" class="form-control {{$errors->has('local_origem') ? 'is-invalid' : ''}}"
                   name="nome" id="nome" placeholder="Informe o local de destino aqui..."
                   aria-describedby="local_origemFeedback"
                   value="{{old('local_origem', @$motorista->nome)}}" maxlength="250">
            @if ($errors->has('local_origem'))
                <div id="local_origemFeedback" class="invalid-feedback">
                    {{$errors->first('local_origem')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-2 d-inline-flex align-items-end">
            <label for="destino">Tipo Veiculo: </label>
        </div>

        <div class="col-4 d-inline-flex">
            <select name="destino" class="form-control {{$errors->has('destino') ? 'is-invalid' : ''}}"
                    aria-describedby="destinoFeedback">
                <option value="">Escolha o tipo de veiculo</option>
                <option value="1">São Paulo</option>
                <option value="2">Rio de Janeiro</option>
                <option value="3">Belo Horizonte</option>
                <option value="4">Curitiba</option>
            </select>

            @if ($errors->has('destino'))
                <div id="destinoFeedback" class="invalid-feedback">
                    {{$errors->first('destino')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-2 d-inline-flex align-items-end">
            <label for="nome">Data de Saida: </label>
        </div>

        <div class="col-4 d-inline-flex">
            <input type="text" class="form-control {{$errors->has('local_origem') ? 'is-invalid' : ''}}"
                   name="nome" id="nome" aria-describedby="local_origemFeedback"
                   value="{{old('local_origem', @$motorista->nome)}}" maxlength="250">
            @if ($errors->has('local_origem'))
                <div id="local_origemFeedback" class="invalid-feedback">
                    {{$errors->first('local_origem')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-2 d-inline-flex align-items-end">
            <label for="nome">Data de Retorno: </label>
        </div>

        <div class="col-4 d-inline-flex">
            <input type="text" class="form-control {{$errors->has('local_origem') ? 'is-invalid' : ''}}"
                   name="nome" id="nome" aria-describedby="local_origemFeedback"
                   value="{{old('local_origem', @$motorista->nome)}}" maxlength="250">
            @if ($errors->has('local_origem'))
                <div id="local_origemFeedback" class="invalid-feedback">
                    {{$errors->first('local_origem')}}
                </div>
            @endif
        </div>

    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>

@push('js')
    <script>
        $(function () {
            $('[data-mask]').inputmask()
        });
    </script>
@endpush

