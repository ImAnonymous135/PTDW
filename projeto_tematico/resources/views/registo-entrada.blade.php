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
        <div class="card-header">
            <div class="row">
                <div class="card-body">
                    {{-- @if (true)
                        --}}
                        {{-- Quimicos --}}

                        {{-- @include('sub-views.quimicos')
                        @else
                        {{-- nao quimicos --}}
              {{--   @include('sub-views.nao-quimicos')
                @endif--}}
                <form method="POST" action="/entradas/adicionar">
                    @csrf
                <div id="quimicos">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>{{ __('text.designacao') }}</label>
                        <select class="select-search form-control" id="state" name="state" @if (isset($produto)) disabled @endif>
                            @if (isset($produto))
                                <option value="{{ $produto->id }}">{{ $produto->designacao }}</option>
                            @endif
                            @foreach ($familia as $item)
                                <option value="{{ $item->id }}">{{ $item->designacao }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>{{ __('text.dataEntrada') }}</label>
                    <input type="date" class="form-control" id="dataEntrada" value={{ $date }} name="dataEntrada" readonly>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>{{ __('text.dataValidade') }}</label>
                    <input type="date" class="form-control" id="dataValidade" value={{ $date }} name="dataValidade">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>{{ __('text.numeroDeEmbalagens') }}</label>
                    <input type="number" class="form-control" id="numeroEmbalagens" name="numeroEmbalagens">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.identificacaoEmbalagem') }}</label>
                    <input type="text" class="form-control" id="identificacaoEmbalagens" name="identificacaoEmbalagens">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.tipoEmbalagem') }}</label>
                    <select class="form-control input-group-append" id="tipoEmbalagem" name="tipoEmbalagem">
                        @foreach ($tipoEmbalagem as $item)
                            <option value="{{ $item->id }}">{{ $item->tipo_embalagem }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>{{ __('text.capacidadeEmbalagem') }}</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="capacidadeEmbalagem" placeholder=""
                            name="capacidadeEmbalagem">
                        <select class="form-control input-group-append" id="tipo" name="tipo" disabled>
                            @foreach ($unidades as $item)
                            <option value="{{ $item->id }}">{{ $item->desginacao }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-1">
                <div class="form-group">
                    <label>{{ __('text.sala') }}</label>
                    <input type="text" class="form-control" id="sala" name="sala" placeholder="">
                </div>
            </div>
            <div class="col-sm-1">
                <div class="form-group">
                    <label>{{ __('text.armario') }}</label>
                    <input type="text" class="form-control" id="armario" name="armario" placeholder="">
                </div>
            </div>
            <div class="col-sm-1">
                <div class="form-group">
                    <label>{{ __('text.prateleira') }}</label>
                    <input type="text" class="form-control" id="prateleira" name="prateleira" placeholder="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>{{ __('text.pesoBruto') }}</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="pesoBruto" name="pesoBruto" placeholder="">
                        <div class="input-group-append">
                            <span class="input-group-text">{{ __('text.gramas') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.marca') }}</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.referencia') }}</label>
                    <input type="number" class="form-control" id="referencia" name="referencia" placeholder="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>{{ __('text.preco') }}</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="preco" name="preco" placeholder="">
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
                        <input type="number" class="form-control" id="taxa" name="taxa" placeholder="">
                        <div class="input-group-append">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>{{ __('text.estadoFisico') }}</label>
                    <select class="form-control" id="estadoFisico" name="estadoFisico">
                        @foreach ($estadoFisico as $item)
                            <option value="{{ $item->id }}">{{ $item->estado_fisico }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>{{ __('text.texturaOuViscosidade') }}</label>
                    <select class="form-control" id="texturaViscosidade" , name="texturaViscosidade">
                        @foreach ($textura as $item)
                            <option value="{{ $item->id }}">{{ $item->textura_viscosidade }}</option>
                        @endforeach
                    </select>
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
                    <input type="text" class="form-control" id="fornecedor" name="fornecedor" placeholder="">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.operador') }}</label>
                    <input type="text" class="form-control" id="operador" name="operador" placeholder="">
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex flex-row justify-content-end">
        <span class="mr-2">
            <input type="submit" class="btn btn-block btn-primary" value="{{ __('text.submeter') }}">
        </span>
    </div>
    </form>

    </div>
    </div>

    <div class="">
        <div class="d-flex flex-row justify-content-end">
            @if (isset($produto))
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary"
                        onclick="window.history.back()">{{ __('text.cancelar') }}</button>
                </span>
            @endif

        </div>
    </div>
    </div>
    </div>
    <br>
@stop

@section('js')
    <script src="{{ asset('js/adicionar.js') }}"></script>
    <script src="{{ asset('js/registo_entrada.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Selecione os pictogramas..."
            });
        });

        $(document).ready(function() {
            $('.select-search').select2();
            $('#state').change(function(){
                $('#tipo').val($(this).val());
            });
        });

    </script>




@stop
