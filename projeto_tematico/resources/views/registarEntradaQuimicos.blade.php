@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          Registar a entrada químicos
        </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item "><a href="/produtos">Produtos</a></li>
          <li class="breadcrumb-item active">Entrada/Químicos</li>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ordem nº</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a ordem nº...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Designação</label>
                            <input type="text" class="form-control" id="#" value="Água" disabled >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quantidade de embalagens</label>
                            <input type="number" class="form-control" id="#" placeholder="Digite a quantidade de embalagens...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Identificação de embalagens</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a identificação de embalagens...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Capacidade de embalagens</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a capacidade de embalagens...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Sala</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a sala...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Armário</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o armário...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Prateleira</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a prateleira...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fornecedor</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o fornecedor...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a marca...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Referência</label>
                            <input type="number" class="form-control" id="#" placeholder="Digite a referência...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Preço</label>
                            <input type="number" class="form-control" id="#" placeholder="Digite o preço...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Taxa de iva</label>
                            <input type="number" class="form-control" id="#" placeholder="Digite a taxa de iva...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado fisico</label>
                            <select class="form-control" id="#">
                                <option selected="selected" value="0">Sólido</option>
                                <option value="1">Quimico</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cor</label>
                            <select class="form-control" id="#">
                                <option selected="selected" value="0">Verde</option>
                                <option value="1">Vermelho</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Textura ou viscosidade</label>
                            <select class="form-control" id="#">
                                <option selected="selected" value="0" disabled>Escolha a textura..</option>
                                <option value="1">Opção 1</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Peso bruto</label>
                            <input type="number" class="form-control" id="#" placeholder="Digite o peso bruto...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data de entrada</label>
                            <input type="text" class="form-control" id="#" value="05/12/2020" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Observações</label>
                            <textarea class="form-control" rows="3" maxlength="100" placeholder="Digite as observações.."></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
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
    <script src="/js/adicionar.js"></script>

    <script>
        $(document).ready(function () {
            $('.select2').select2({
                placeholder:"Selecione os pictogramas..."
            });
        });
    </script>

@stop