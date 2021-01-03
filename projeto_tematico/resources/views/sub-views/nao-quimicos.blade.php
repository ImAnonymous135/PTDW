<div id="nao-quimicos">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>{{ __('text.designacao') }}</label>
                {{-- <input type="text" class="form-control" id="#" value="Água" disabled> --}}
                <select class="select-search form-control" name="state">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                  </select>
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
                <input type="number" class="form-control" id="#" >
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.identificacaoEmbalagem') }}</label>
                <input type="text" class="form-control" id="#" >
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
                    <input type="text" class="form-control" id="#" >
                    <select class="form-control input-group-append">
                        <option>{{ __('text.gramas') }}</option>
                        <option>{{ __('text.mililitros') }}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1">
            <div class="form-group">
                <label>{{ __('text.sala') }}</label>
                <input type="text" class="form-control" id="#" >
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">
                <label>{{ __('text.armario') }}</label>
                <input type="text" class="form-control" id="#" >
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">
                <label>{{ __('text.prateleira') }}</label>
                <input type="text" class="form-control" id="#" >
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
                <input type="text" class="form-control" id="#" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.referencia') }}</label>
                <input type="number" class="form-control" id="#" >
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
                    ></textarea>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.fornecedor') }}</label>
                <input type="text" class="form-control" id="#" >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>{{ __('text.operador') }}</label>
                <input type="text" class="form-control" id="#" >
            </div>
        </div>

    </div>
</div>
