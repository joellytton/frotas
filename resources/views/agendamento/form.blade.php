<!-- form start -->
<div class="card-body">
    <div class="form-group row">
        <div class="col-4">
            <label for="nome">Nome</label>

            <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}"
                   name="nome" id="nome" placeholder="Nome" aria-describedby="nomeFeedback"
                   value="{{old('nome', @$motorista->nome)}}" maxlength="250">
            @if ($errors->has('nome'))
                <div id="nomeFeedback" class="invalid-feedback">
                    {{$errors->first('nome')}}
                </div>
            @endif
        </div>

        <div class="col-4">
            <label for="cpf">CPF</label>

            <input type="text" class="form-control {{$errors->has('cpf') ? 'is-invalid' : ''}}"
                   name="cpf" id="cpf" placeholder="CPF" aria-describedby="cpfFeedback"
                   data-inputmask="'mask': ['999.999.999-99']" data-mask
                   value="{{old('cpf', @$motorista->cpf)}}" maxlength="14">
            @if ($errors->has('cpf'))
                <div id="cpfFeedback" class="invalid-feedback">
                    {{$errors->first('cpf')}}
                </div>
            @endif
        </div>

        <div class="col-4">
            <label for="data_nascimento">Data de Nascimento</label>

            <input type="text" class="form-control {{$errors->has('data_nascimento') ? 'is-invalid' : ''}}"
                   name="data_nascimento" id="data_nascimento" placeholder="Data de Nascimento"
                   aria-describedby="dataNascimentoFeedback"
                   value="{{old('data_nascimento', @$motorista->data_nascimento)}}"
                   data-inputmask="'mask': ['99/99/9999']" data-mask>
            @if ($errors->has('data_nascimento'))
                <div id="dataNascimentoFeedback" class="invalid-feedback">
                    {{$errors->first('data_nascimento')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-4">
            <label for="numero_registro">Numero Registro</label>

            <input type="text" class="form-control {{$errors->has('numero_registro') ? 'is-invalid' : ''}}"
                   name="numero_registro" id="numero_registro" placeholder="Numero Registro"
                   aria-describedby="numero_registroFeedback"
                   value="{{old('numero_registro', @$motorista->numero_registro)}}"
                   maxlength="11">
            @if ($errors->has('numero_registro'))
                <div id="numero_registroFeedback" class="invalid-feedback">
                    {{$errors->first('numero_registro')}}
                </div>
            @endif
        </div>

        <div class="col-4">
            <label for="validade">Validade</label>

            <input type="text" class="form-control {{$errors->has('validade') ? 'is-invalid' : ''}}"
                   name="validade" id="validade" placeholder="Validade"
                   aria-describedby="validadeFeedback" value="{{old('validade', @$motorista->validade)}}"
                   data-inputmask="'mask': ['99/99/9999']" data-mask
            >
            @if ($errors->has('validade'))
                <div id="validadeFeedback" class="invalid-feedback">
                    {{$errors->first('validade')}}
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

