<!-- /.card-body solicitante  -->
<div class="card-header">
    <h3 class="card-title">
        Informações de Deslocamento
    </h3>
</div>

<div class="card-body">
    <div class="form-group row">
        <label for="origem" class="col-sm-12 col-md-2 col-form-label">Local de origem:</label>
        <div class="col-sm-12 col-md-5">
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

        <div class="col-sm-12 col-md-5">
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
        <label for="origem" class="col-sm-12 col-md-2 col-form-label">Local de destino</label>
        <div class="col-sm-12 col-md-5">
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

        <div class="col-sm-12 col-md-5">
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
        <label for="origem" class="col-sm-12 col-md-2 col-form-label">Data de Saida:</label>
        <div class="col-sm-12 col-md-5">
            <input type="text" class="form-control {{$errors->has('local_origem') ? 'is-invalid' : ''}}"
                   name="nome" id="nome" aria-describedby="local_origemFeedback"
                   value="{{old('local_origem', @$motorista->nome)}}" maxlength="250">
            @if ($errors->has('local_origem'))
                <div id="local_origemFeedback" class="invalid-feedback">
                    {{$errors->first('local_origem')}}
                </div>
            @endif
        </div>

        <label for="origem" class="col-sm-12 col-md-1 col-form-label">Data de Retorno:</label>
        <div class="col-sm-12 col-md-4">
            <input type="text" class="form-control {{$errors->has('local_origem') ? 'is-invalid' : ''}}"
                   name="nome" id="nome" placeholder="Previsão"
                   aria-describedby="local_origemFeedback"
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

