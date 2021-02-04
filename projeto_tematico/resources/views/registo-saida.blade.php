@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        {{ __('text.registarSaida') }}
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../">Home</a></li>
                        <li class="breadcrumb-item "><a href="../produtos">{{ __('text.produtos') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('text.registarSaida') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop



@section('content')
    <form method="POST" action="/saidas/adicionar">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="card-body" style="display: block;">
                        <div class="row">

                            {{-- com id produto --}}
                            @if (isset($produtoDesignacao))
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('text.produto') }}</label>
                                    <input type="text" class="form-control @error('produto') is-invalid @enderror"
                                        id="produto" value="{{ $produtoDesignacao ?? '' }}" name="produto">
                                    @error('produto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                            @if (isset($embalagemDesignacao))
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>{{ __('text.embalagem') }}</label>
                                    <input type="text" class="form-control @error('embalagem') is-invalid @enderror"
                                        id="embalagem" value="{{ $embalagemDesignacao ?? '' }}" name="embalagem">
                                    @error('embalagem')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @endif

                            {{-- com array --}}
                            @if (isset($produtos))
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('text.designacao') }}</label>
                                    <select class="select-search form-control @error('produto') is-invalid @enderror"
                                        id="produto" name="produto">
                                        <option></option>
                                        @foreach ($produtos as $item)
                                        <option value="{{ $item->id }}.{{ $item->designacao }}">
                                            {{ $item->designacao }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('produto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                            @if (isset($embalagens))
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>{{ __('text.designacao') }}</label>
                                    <select class="select-search form-control @error('embalagem') is-invalid @enderror"
                                        id="embalagem" name="embalagem" disabled value="hello">
                                        <option></option>
                                    </select>
                                    @error('embalagem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            @endif

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>{{ __('text.data') }}</label>
                                    <input type="text" class="form-control" id="data" value="{{ $data ?? '' }}"
                                        name="data" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>{{ __('text.observacoes') }}</label>
                                    <textarea class="form-control" rows="3" id="observacoes" name="observacoes"
                                        maxlength="100" placeholder="Digite as observações.."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>{{ __('text.nomeSolicitante') }}</label>
                                    <select class="select-search form-control @error('solicitante') is-invalid @enderror" id="select-solicitante" name="solicitante">
                                        <option value=""></option>
                                        @foreach ($solicitantes as $solicitante)
                                        <option value="{{$solicitante->nome}}">{{$solicitante->nome}}</option>
                                        @endforeach
                                    </select>
                                    @error('solicitante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>{{ __('text.nomeResponsavel') }}</label>
                                    <select class="select-search form-control @error('operador') is-invalid @enderror" id="select-operador" name="operador">
                                        <option value=""></option>
                                        @foreach ($operadores as $operador)
                                        <option value="{{$operador->nome}}">{{$operador->nome}}</option>
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
                    </div>
                </div>
                <div class="">
                    <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                            <button type="button" class="btn btn-block btn-outline-primary"
                                onclick="window.location.href='../produtos/info-produto'">{{ __('text.cancelar') }}</button>
                        </span>
                        <span class="mr-2">
                            <button type="submit" class="btn btn-block btn-primary">{{ __('text.submeter') }}</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#select-operador').select2({
                placeholder: "Nome..."
            });
            $('#select-solicitante').select2({
                placeholder: "Nome..."
            });
            $('#produto').select2({
                placeholder: "Produto..."
            });
            $('#embalagem').select2({
                placeholder: "Embalagens..."
            });
            $("#produto").change(function (e) { 
                
                $('#embalagem').prop('disabled', false);
                $('#embalagem').empty();
                info($("#produto").val().split(".")[0]);    
            });
        });

        function info(id) {
        $.ajax({
               type:'GET',
               url:'api/embalagens/'+id,
               success: function(info) {
               json = JSON.parse(info);
               console.log(json);
               json.forEach(e => {
                $('#embalagem').append('<option value="'+e.id+'.'+e.designacao+'">'+e.designacao+'</option>');
               });
            }
        
        });
    }


    </script>

@stop
