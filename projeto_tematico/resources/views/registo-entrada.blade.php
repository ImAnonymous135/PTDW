@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    {{ __('text.registarEntrada') }}
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    @if (isset($produto))
                    <li class="breadcrumb-item "><a href="../produtos">{{ __('text.produtos') }}</a></li>
                    @endif
                    <li class="breadcrumb-item active">{{ __('text.entrada') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {{-- @if (true) --}}
        {{-- Quimicos --}}

        {{-- @include('sub-views.quimicos')
                        @else
                        {{-- nao quimicos --}}
        {{-- @include('sub-views.nao-quimicos')
                @endif --}}
        <form method="POST" action="../entradas/adicionar">
            @csrf
            <div id="quimicos">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>{{ __('text.designacao') }}</label>
                            <select class="select-search form-control @error('state') is-invalid @enderror" id="state"
                                name="state">
                                @foreach ($produto as $item)
                                <option value="{{ $item->id }}.{{ $item->designacao }}.{{ $item->is_quimico }}">
                                    {{ $item->designacao }}
                                </option>
                                @endforeach
                            </select>
                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>{{ __('text.dataEntrada') }}</label>
                            <input type="date" class="form-control" id="dataEntrada" value={{ $date }}
                                name="dataEntrada" readonly>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>{{ __('text.dataValidade') }}</label>
                            <input type="date" class="form-control @error('dataEntrada') is-invalid @enderror"
                                id="dataValidade" value={{ $date }} name="dataValidade">
                            @error('dataEntrada')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>{{ __('text.numeroDeEmbalagens') }}</label>
                            <input type="number" class="form-control @error('numeroEmbalagens') is-invalid @enderror"
                                id="numeroEmbalagens" name="numeroEmbalagens">
                            @error('numeroEmbalagens')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>{{ __('text.tipoEmbalagem') }}</label>
                            <select class="form-control input-group-append @error('tipoEmbalagem') is-invalid @enderror"
                                id="tipoEmbalagem" name="tipoEmbalagem">
                                @foreach ($tipoEmbalagem as $item)
                                <option value="{{ $item->id }}">{{ $item->tipo_embalagem }}</option>
                                @endforeach
                            </select>
                            @error('tipoEmbalagem')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>{{ __('text.capacidadeEmbalagem') }}</label>
                            <div class="input-group @error('capacidadeEmbalagem') is-invalid @enderror">
                                <input type="text" class="form-control" id="capacidadeEmbalagem" placeholder=""
                                    name="capacidadeEmbalagem">
                                @error('capacidadeEmbalagem')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                @if (sizeof($produto) == 1)
                                <input type="text" class="form-control" disabled value="{{ $produto[0]->unidades->desginacao }}">
                                @else
                                <select class="form-control input-group-append" id="tipo" name="tipo" disabled>
                                    @foreach ($unidades as $item)
                                    <option value="{{ $item->id }}">{{ $item->desginacao }}</option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group">
                        <label>{{ __('text.sala') }}</label>
                        <select class="select-search form-control @error('sala') is-invalid @enderror" id="select-sala"
                            name="sala">
                            <option value=""></option>
                            @foreach ($salas as $sala)
                            <option value="{{ $sala->designacao }}">{{ $sala->designacao }}</option>
                            @endforeach
                        </select>
                        @error('sala')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                        <label>{{ __('text.armario') }}</label>
                        <input type="text" class="form-control @error('armario') is-invalid @enderror" id="armario"
                            name="armario" placeholder="">
                        @error('armario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                        <label>{{ __('text.prateleira') }}</label>
                        <input type="text" class="form-control @error('prateleira') is-invalid @enderror"
                            id="prateleira" name="prateleira" placeholder="">
                        @error('prateleira')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.pesoBruto') }}</label>
                        <div class="input-group @error('pesoBruto') is-invalid @enderror">
                            <input type="number" class="form-control" id="pesoBruto" name="pesoBruto" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text">{{ __('text.gramas') }}</span>
                            </div>
                        </div>
                        @error('pesoBruto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.marca') }}</label>
                        <input type="text" class="form-control @error('marca') is-invalid @enderror" id="marca"
                            name="marca" placeholder="">
                        @error('marca')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.referencia') }}</label>
                        <input type="number" class="form-control @error('referencia') is-invalid @enderror"
                            id="referencia" name="referencia" placeholder="">
                        @error('referencia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.preco') }}</label>
                        <div class="input-group @error('preco') is-invalid @enderror">
                            <input type="number" class="form-control" id="preco" name="preco" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text">€</span>
                            </div>
                        </div>
                        @error('preco')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.taxa') }} iva</label>
                        <div class="input-group @error('taxa') is-invalid @enderror">
                            <input type="number" class="form-control" id="taxa" name="taxa" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        @error('taxa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2 quimico">
                    <div class="form-group">
                        <label>{{ __('text.estadoFisico') }}</label>
                        <select class="form-control @error('estadoFisico') is-invalid @enderror" id="estadoFisico"
                            name="estadoFisico">
                            @foreach ($estadoFisico as $item)
                            <option value="{{ $item->id }}">{{ $item->estado_fisico }}</option>
                            @endforeach
                        </select>
                        @error('estadoFisico')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3 quimico">
                    <div class="form-group">
                        <label>{{ __('text.texturaOuViscosidade') }}</label>
                        <select class="form-control @error('texturaViscosidade') is-invalid @enderror"
                            id="texturaViscosidade" , name="texturaViscosidade">
                            @foreach ($textura as $item)
                            <option value="{{ $item->id }}">{{ $item->textura_viscosidade }}
                            </option>
                            @endforeach
                        </select>
                        @error('texturaViscosidade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>{{ __('text.observacoes') }}</label>
                        <textarea class="form-control" rows="3" maxlength="100" placeholder="" id="observacao"
                            name="observacao"></textarea>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.fornecedor') }}</label>
                        <select class="select-search form-control @error('operador') is-invalid @enderror"
                            id="select-fornecedor" name="fornecedor">
                            <option></option>
                            @foreach ($fornecedores as $fornecedor)
                            <option value="{{ $fornecedor->designacao }}">
                                {{ $fornecedor->designacao }}</option>
                            @endforeach
                        </select>
                        @error('fornecedor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.operador') }}</label>
                        <select class="select-search form-control @error('operador') is-invalid @enderror"
                            id="select-operador" name="operador">
                            <option></option>
                            @foreach ($operadores as $operador)
                            <option value="{{ $operador->nome }}">{{ $operador->nome }}</option>
                            @endforeach
                        </select>
                        @error('operador')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary"
                        onclick="window.history.back()">{{ __('text.cancelar') }}</button>
                </span>
                <span class="mr-2">
                    <input type="submit" class="btn btn-block btn-primary"></button>
                </span>
            </div>
        </form>
    </div>
</div>



</div>
<br>
@stop

@section('js')
<script>
    $(document).ready(function() {

            $('.select2').select2({
                placeholder: "Selecione os pictogramas..."
            });
            $('#select-sala').select2({
                placeholder: "Sala..."
            });
            $('#select-operador').select2({
                placeholder: "Nome..."
            });
            $('#select-fornecedor').select2({
                placeholder: "Nome..."
            });
            $('#state').select2();
            $('#state').change(function() {
                var arraySplit = $(this).val().split(".");
                $('#tipo').val(arraySplit[0]);
                if (arraySplit[2]) {
                    console.log("Quimico");
                    $(".quimico").show();
                } else {
                    console.log("Não Quimico");
                    $(".quimico").hide();
                }

            });

            var arraySplit = $('#state').val().split(".");
            if (arraySplit[2]) {
                console.log("Quimico");
                $(".quimico").show();
            } else {
                console.log("Não Quimico");
                $(".quimico").hide();
            }

        });

</script>
@stop