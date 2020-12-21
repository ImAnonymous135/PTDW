@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          Registar Saída
        </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item "><a href="/produtos">Produtos</a></li>
          <li class="breadcrumb-item active">Saída</li>
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
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Produto</label>
                            <input type="text" class="form-control" id="#" value="água" disabled >
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Embalagem</label>
                            <input type="text" class="form-control" id="#" value="219" disabled >
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Data</label>
                            <input type="text" class="form-control" id="#" value="05/12/2020" disabled >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Observações</label>
                            <textarea class="form-control" rows="3" maxlength="100" placeholder="Digite as observações.."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Solicitante</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o solicitante..">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Operador</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o operador..">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary"
                        onclick="window.location.href='/produtos/info-produto'">Cancelar</button>
                </span>
                <span class="mr-2">
                    <button type="button" href="#" class="btn btn-block btn-primary">Submeter</button>
                </span>
            </div>
        </div>
    </div>
</div>
<br>
@stop

@section('js')
    <script src="js/adicionar.js"></script>

    <script>
        $(document).ready(function () {
            $('.select2').select2({
                placeholder:"Selecione os pictogramas..."
            });
        });
    </script>

@stop