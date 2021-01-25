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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.produto') }}</label>
                            <input type="text" class="form-control" id="produto" value="{{ $produtoDesignacao }}" name="produto">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>{{ __('text.embalagem') }}</label>
                            <input type="text" class="form-control" id="embalagem" value="{{ $embalagemDesignacao }}" name="embalagem">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>{{ __('text.data') }}</label>
                            <input type="text" class="form-control" id="data" value={{ $data }}  name="data" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.observacoes') }}</label>
                            <textarea class="form-control" rows="3" id="observacoes" name="observacoes" maxlength="100" placeholder="Digite as observações.."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>{{ __('text.solicitante') }}</label>
                            <input type="text" class="form-control" id="solicitante" name="solicitante" placeholder="Digite o solicitante..">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>{{ __('text.operador') }}</label>
                            <input type="text" class="form-control" id="operador" name="operador" placeholder="Digite o operador..">
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
    <script src="{{ asset('js/adicionar.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.select2').select2({
                placeholder:"Selecione os pictogramas..."
            });
        });
    </script>

@stop
