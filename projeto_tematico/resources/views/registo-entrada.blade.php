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
                    {{-- @if (true) --}}
                    {{-- Quimicos --}}

                    {{-- @include('sub-views.quimicos')
                        @else
                        {{-- nao quimicos --}}
                    {{-- @include('sub-views.nao-quimicos')
                @endif --}}
                    <form method="POST" action="/entradas/adicionar">
                        @csrf
                        <div id="quimicos">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>{{ __('text.designacao') }}</label>
                                        <select class="select-search form-control @error('designacao') is-invalid @enderror"
                                            id="state" name="state">
                                            @foreach ($produto as $item)
                                                <option value="{{ $item->id }}.{{ $item->designacao }}">
                                                    {{ $item->designacao }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('designacao')
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
                                        <input type="number"
                                            class="form-control @error('numeroEmbalagens') is-invalid @enderror"
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
                                        <label>{{ __('text.identificacaoEmbalagem') }}</label>
                                        <input type="text" class="form-control" id="identificacaoEmbalagens"
                                            name="identificacaoEmbalagens" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>{{ __('text.tipoEmbalagem') }}</label>
                                        <select
                                            class="form-control input-group-append @error('tipoEmbalagem') is-invalid @enderror"
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
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control @error('capacidadeEmbalagem') is-invalid @enderror"
                                                id="capacidadeEmbalagem" placeholder="" name="capacidadeEmbalagem">
                                            @error('capacidadeEmbalagem')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <select
                                                class="form-control input-group-append @error('tipo') is-invalid @enderror"
                                                id="tipo" name="tipo" disabled>
                                                @foreach ($unidades as $item)
                                                    <option value="{{ $item->id }}">{{ $item->desginacao }}</option>
                                                @endforeach
                                            </select>
                                            @error('tipo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <label>{{ __('text.sala') }}</label>
                                        <input type="text" class="form-control @error('sala') is-invalid @enderror"
                                            id="sala" name="sala" placeholder="">
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
                                        <input type="text" class="form-control @error('armario') is-invalid @enderror"
                                            id="armario" name="armario" placeholder="">
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
                                        <div class="input-group">
                                            <input type="number"
                                                class="form-control @error('pesoBruto') is-invalid @enderror" id="pesoBruto"
                                                name="pesoBruto" placeholder="">
                                            @error('pesoBruto')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <span class="input-group-text">{{ __('text.gramas') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>{{ __('text.marca') }}</label>
                                        <input type="text" class="form-control @error('marca') is-invalid @enderror"
                                            id="marca" name="marca" placeholder="">
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
                                        <div class="input-group">
                                            <input type="number" class="form-control @error('preco') is-invalid @enderror"
                                                id="preco" name="preco" placeholder="">
                                            @error('preco')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <span class="input-group-text">€</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>{{ __('text.taxa') }} iva</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control @error('taxa') is-invalid @enderror"
                                                id="taxa" name="taxa" placeholder="">
                                            @error('taxa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>{{ __('text.estadoFisico') }}</label>
                                        <select class="form-control @error('estadoFisico') is-invalid @enderror"
                                            id="estadoFisico" name="estadoFisico">
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
                                <div class="col-sm-3">
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
                                        <textarea class="form-control" rows="3" maxlength="100" placeholder=""
                                            id="observacao" name="observacao"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>{{ __('text.fornecedor') }}</label>
                                        <input type="text" class="form-control @error('fornecedor') is-invalid @enderror"
                                            id="fornecedor" name="fornecedor" placeholder="">
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
                                        <input type="text" class="form-control @error('operador') is-invalid @enderror"
                                            id="operador" name="operador" placeholder="">
                                        @error('operador')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                    <button type="button" class="btn btn-block btn-outline-primary"
                                        onclick="window.history.back()">{{ __('text.cancelar') }}</button>
                                </span>
                                <span class="mr-2">
                                    <input type="submit" class="btn btn-block btn-primary"></button>
                                </span>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="">

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
            $('#state').change(function() {
                var arraySplit = $(this).val().split(".");
                $('#tipo').val(arraySplit[0]);
            });
        });

    </script>




@stop
