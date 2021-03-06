<form method="POST" action="/entradas/adicionar">
    @csrf
<div id="quimicos">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>{{ __('text.designacao') }}</label>
                <select class="select-search form-control" name="state" @if (isset($produto)) disabled @endif>
                    @if (isset($produto))
                    <option value="{{$produto->id}}">{{$produto->designacao}}</option>
                    @endif
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.dataEntrada') }}</label>
                <input type="text" class="form-control" id="dataEntrada" value="22/12/2020" disabled name="dataEntrada">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.dataValidade') }}</label>
                <input type="date" class="form-control" id="dataValidade" value="05/12/2020" name="dataValidade">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.capacidadeEmbalagem')}} </label>
                <input type="number" class="form-control" id="capacidadeEmbalagem" name="capacidadeEmbalagem">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.identificacaoEmbalagem') }}</label>
                <input type="text" class="form-control" id="identificacaoEmbalagem" name="identificacaoEmbalagem">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.tipoEmbalagem') }}</label>
                <select class="form-control input-group-append">
                    <option value="plastico">{{ __('text.plastico') }}</option>
                    <option value="vidro">{{ __('text.vidro') }}</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.capacidadeEmbalagem') }}</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="#" placeholder="">
                    <select class="form-control input-group-append">
                        <option>{{ __('text.gramas') }}</option>
                        <option>{{ __('text.litros') }}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1">
            <div class="form-group">
                <label>{{ __('text.sala') }}</label>
                <input type="text" class="form-control" id="#" placeholder="">
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">
                <label>{{ __('text.armario') }}</label>
                <input type="text" class="form-control" id="#" placeholder="">
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">
                <label>{{ __('text.prateleira') }}</label>
                <input type="text" class="form-control" id="#" placeholder="">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.pesoBruto') }}</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="#" placeholder="">
                    <div class="input-group-append">
                        <span class="input-group-text">{{ __('text.gramas') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.marca') }}</label>
                <input type="text" class="form-control" id="#" placeholder="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.referencia') }}</label>
                <input type="number" class="form-control" id="#" placeholder="">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.preco') }}</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="#" placeholder="">
                    <div class="input-group-append">
                        <span class="input-group-text">€</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">
                <label>{{ __('text.taxa') }} iva</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="#" placeholder="">
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.estadoFisico') }}</label>
                <select class="form-control" id="#">
                    <option selected="selected" value="0">{{ __('text.solido') }}</option>
                    <option value="1">{{ __('text.quimico') }}</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.texturaOuViscosidade') }}</label>
                <select class="form-control" id="#">
                    <option selected="selected" value="0" disabled>Escolha a textura..</option>
                    <option value="1">Opção 1</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>{{ __('text.observacao') }}</label>
                <textarea class="form-control" rows="3" maxlength="100" placeholder=""></textarea>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.fornecedor') }}</label>
                <input type="text" class="form-control" id="#" placeholder="">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.operador') }}</label>
                <input type="text" class="form-control" id="#" placeholder="">
            </div>
        </div>

    </div>
</div>
<div class="d-flex flex-row justify-content-end">
<span class="mr-2">
    <button type="submit" href="#" class="btn btn-block btn-primary">{{ __('text.submeter') }}</button>
  </span>
</div>
</form>
