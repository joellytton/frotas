<!-- form start -->
<div class="card-body">
    <div class="form-group row">
        <div class="col-4">
            <label for="marca">Nome</label>

            <input type="text" class="form-control {{$errors->has('marca') ? 'is-invalid' : ''}}"
                   name="marca" id="marca" placeholder="Marca" aria-describedby="marcaFeedback"
                   value="{{old('marca', @$veiculo->marca)}}" maxlength="150">
            @if ($errors->has('marca'))
                <div id="marcaFeedback" class="invalid-feedback">
                    {{$errors->first('marca')}}
                </div>
            @endif
        </div>

        <div class="col-4">
            <label for="modelo">Modelo</label>

            <input type="text" class="form-control {{$errors->has('modelo') ? 'is-invalid' : ''}}"
                   name="modelo" id="modelo" placeholder="Modelo" aria-describedby="modeloFeedback"
                   value="{{old('modelo', @$veiculo->modelo)}}" maxlength="200">
            @if ($errors->has('modelo'))
                <div id="modeloFeedback" class="invalid-feedback">
                    {{$errors->first('modelo')}}
                </div>
            @endif
        </div>

        <div class="col-2">
            <label for="ano">Ano</label>

            <input type="text" class="form-control {{$errors->has('ano') ? 'is-invalid' : ''}}"
                   name="ano" id="ano" placeholder="Ano" aria-describedby="anoFeedback"
                   value="{{old('ano', @$veiculo->ano)}}" maxlength="4">
            @if ($errors->has('ano'))
                <div id="anoFeedback" class="invalid-feedback">
                    {{$errors->first('ano')}}
                </div>
            @endif
        </div>

        <div class="col-2">
            <label for="cor">Cor</label>

            <input type="text" class="form-control {{$errors->has('cor') ? 'is-invalid' : ''}}"
                   name="cor" id="cor" placeholder="Cor" aria-describedby="corFeedback"
                   value="{{old('cor', @$veiculo->cor)}}" maxlength="100">
            @if ($errors->has('cor'))
                <div id="corFeedback" class="invalid-feedback">
                    {{$errors->first('cor')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-4">
            <label for="categoria_id">Categoria</label>

            <select name="categoria_id" id="categoria_id" class="form-control
                {{$errors->has('categoria_id') ? 'is-invalid' : ''}}">
                <option value="">Selecione uma opção</option>
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}"
                        {{(old('categoria_id', @$veiculo->categoria_id)) == $categoria->id ? 'selected' : ''}}>
                        {{$categoria->nome}}
                    </option>
                @endforeach
            </select>

            @if ($errors->has('categoria_id'))
                <div id="corFeedback" class="invalid-feedback">
                    {{$errors->first('categoria_id')}}
                </div>
            @endif
        </div>

        <div class="col-4">
            <label for="km_inicial">Km inicial</label>

            <input type="text" class="form-control {{$errors->has('km_inicial') ? 'is-invalid' : ''}}"
                   name="km_inicial" id="km_inicial" placeholder="Km Inicial" aria-describedby="kmInicialFeedback"
                   value="{{old('km_inicial', @$veiculo->km_inicial)}}" maxlength="7">

            @if ($errors->has('km_inicial'))
                <div id="kmInicialFeedback" class="invalid-feedback">
                    {{$errors->first('km_inicial')}}
                </div>
            @endif
        </div>

        <div class="col-4">
            <label for="placa">Placa</label>

            <input type="text" class="form-control {{$errors->has('placa') ? 'is-invalid' : ''}}"
                   name="placa" id="placa" placeholder="Placa" aria-describedby="placaFeedback"
                   value="{{old('placa', @$veiculo->placa)}}" maxlength="10">

            @if ($errors->has('placa'))
                <div id="placaFeedback" class="invalid-feedback">
                    {{$errors->first('placa')}}
                </div>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="col-4">
            <label for="patrimonio">Patrimonio</label>

            <input type="text" class="form-control {{$errors->has('patrimonio') ? 'is-invalid' : ''}}"
                   name="patrimonio" id="patrimonio" placeholder="Patrimonio" aria-describedby="patrimonioFeedback"
                   value="{{old('patrimonio', @$veiculo->patrimonio)}}" maxlength="10">

            @if ($errors->has('patrimonio'))
                <div id="patrimonioFeedback" class="invalid-feedback">
                    {{$errors->first('patrimonio')}}
                </div>
            @endif
        </div>

        <div class="col-4">
            <label for="chassis">Chassi</label>

            <input type="text" class="form-control {{$errors->has('chassis') ? 'is-invalid' : ''}}"
                   name="chassis" id="chassis" placeholder="Chassi" aria-describedby="chassisFeedback"
                   value="{{old('chassis', @$veiculo->chassis)}}" maxlength="20">

            @if ($errors->has('chassis'))
                <div id="chassisFeedback" class="invalid-feedback">
                    {{$errors->first('chassis')}}
                </div>
            @endif
        </div>

        <div class="col-4">
            <label for="renavam">Renavam</label>

            <input type="text" class="form-control {{$errors->has('renavam') ? 'is-invalid' : ''}}"
                   name="renavam" id="renavam" placeholder="Renavam" aria-describedby="renavamFeedback"
                   value="{{old('renavam', @$veiculo->renavam)}}" maxlength="12">

            @if ($errors->has('renavam'))
                <div id="renavamFeedback" class="invalid-feedback">
                    {{$errors->first('renavam')}}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
