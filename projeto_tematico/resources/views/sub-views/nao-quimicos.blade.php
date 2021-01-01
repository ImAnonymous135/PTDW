<div id="nao-quimicos">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>{{ __('text.designacao') }}</label>
                <input type="text" class="form-control" id="#" value="Água" disabled>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.dataEntrada') }}</label>
                <input type="text" class="form-control" id="#" value="05/12/2020" disabled>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.dataValidade') }}</label>
                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.quantidade') }}</label>
                <input type="number" class="form-control" id="#" placeholder="Quantidade...">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.identificacaoEmbalagem') }}</label>
                <input type="text" class="form-control" id="#" placeholder="Exemplo: 1; 2; 3">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __("text.tipoEmbalagem") }}</label>
                <select class="form-control input-group-append">
                    <option>{{ __('text.plastico') }}</option>
                    <option>{{ __('text.vidro') }}</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>{{ __('text.capacidadeEmbalagem') }}</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="#" placeholder="Digite a capacidade de embalagens...">
                    <select class="form-control input-group-append">
                        <option>{{ __('text.gramas') }}</option>
                        <option>{{ __('text.mililitros') }}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.sala') }}</label>
                <input type="text" class="form-control" id="#" placeholder="Digite a sala...">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.armario') }}</label>
                <input type="text" class="form-control" id="#" placeholder="Digite o armário...">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.prateleira') }}</label>
                <input type="text" class="form-control" id="#" placeholder="Digite a prateleira...">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Peso bruto</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="#" placeholder="Digite o peso bruto...">
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.marca') }}</label>
                <input type="text" class="form-control" id="#" placeholder="Digite a marca...">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.referencia') }}</label>
                <input type="number" class="form-control" id="#" placeholder="Digite a referência...">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.preco') }}</label>
                <input type="number" class="form-control" id="#" placeholder="Digite o preço...">
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">
                <label>{{ __('text.taxa') }} iva</label>
                <input type="number" class="form-control" id="#" placeholder="Digite a taxa de iva...">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>{{ __('text.cor') }}</label>
                <select class="form-control" id="#">
                    <option selected="selected" value="0" disabled>Escolha a cor...</option>
                    <option value="1">Vermelho</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>{{ __('text.observacao') }}</label>
                <textarea class="form-control" rows="3" maxlength="100"
                    placeholder="Digite as observações.."></textarea>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.fornecedor') }}</label>
                <input type="text" class="form-control" id="#" placeholder="Digite o fornecedor...">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.operador') }}</label>
                <input type="text" class="form-control" id="#" placeholder="Digite o operador..">
            </div>
        </div>

    </div>
</div>
