@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Estilos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><a>Estilos</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="m-0 text-dark">H1</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, doloribus fugit dolor fuga cum impedit debitis vel voluptatum consequatur! Expedita odit amet aliquid, numquam sunt error quibusdam quaerat quisquam enim?</p>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Botões</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão primário:</p>
                <button class="btn btn-primary">Botão</button>
            </div>
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão secundário:</p>
                <button class="btn btn-outline-primary">Botão</button>
            </div>
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão com opções:</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Botão</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Exemplo</a>
                        <a class="dropdown-item" href="#">Exemplo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão com opções:</p>
                <ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
                    <li class="mfb-component__wrap">
                        <a href="#" data-mfb-label="Nova entrada" class="mfb-component__button--main">
                            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão com opções:</p>
                <ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
                    <li class="mfb-component__wrap">
                        <a href="#" data-mfb-label="Exportar" class="mfb-component__button--main">
                            <i class="mfb-component__main-icon--resting fas fa-file-export"></i>
                        </a>
                        <ul class="mfb-component__list">
                            <li>
                                <a href="#" id="pdf" data-mfb-label="Exportar para PDF"
                                    class="mfb-component__button--child">
                                    <i class="mfb-component__child-icon fas fa-file-pdf"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" id="csv" data-mfb-label="Exportar para CSV"
                                    class="mfb-component__button--child">
                                    <i class="mfb-component__child-icon fas fa-file-csv"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" id="excel" data-mfb-label="Exportar para Excel"
                                    class="mfb-component__button--child">
                                    <i class="mfb-component__child-icon fas fa-file-excel"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Inputs</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-1 font-weight-bold">Input Texto:</p>
                <div class="form-group">
                    <input type="text" class="form-control" id="usr">
                </div>
            </div>
            <div class="col-sm-3">
                <p class="mb-1 font-weight-bold">Select:</p>
                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="mb-1 font-weight-bold">Inserir ficheiro:</p>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="col-xl-1">
                <p class="mb-1 font-weight-bold">Check box:</p>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 2
                    </label>
                </div>
            </div>
            <div class="col-xl-1">
                <p class="mb-1 font-weight-bold">Radio:</p>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Option 1
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Listas</h4>
        <table id="table1" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>Fornecedor</th>
                    <th>Morada</th>
                    <th>Localidade</th>
                    <th>Código Postal</th>
                    <th>Telefone</th>
                    <th>NIF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Quimifeira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary toastrDefaultSuccess1">Detalhes</button></td>
                </tr>
                </tfoot>
        </table>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">
        <h4>Tabela</h4>
        <table id="table2" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Produto</th>
          <th>Localização</th>
          <th>Embalagens</th>
          <th>Solicitante</th>
          <th>Operador</th>
          <th>Data</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>2</td>
          <td>Carlos Fonseca</td>
          <td>Ricardo José</td>
          <td>4/12/2019</td>
        </tr>
        </tfoot>
    </table>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4>TextArea</h4>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
    </div>
    <div class="card-body">
    </div>
</div>

<div class="modal fade" id="modal-default1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar fornecedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body w-200">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o nome...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Morada</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a morada...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Localidade</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a localidade...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Código-postal</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o código-postal...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o telefone...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIF</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o NIF...">
                        </div>
                    </div>
                </div>            

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default toastrDefaultSuccess1" data-dismiss="modal" >Cancelar</button>
                <button type="button" class="btn btn-primary toastrDefaultSuccess1" data-dismiss="modal">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
    <li class="mfb-component__wrap">
        <a data-mfb-label="Novo fornecedor" class="mfb-component__button--main" href="/produtos/adicionar">
            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
        </a>
    </li>
</ul>

<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>Fornecedor</th>
                    <th>Morada</th>
                    <th>Localidade</th>
                    <th>Código Postal</th>
                    <th>Telefone</th>
                    <th>NIF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Quimifeira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                </tfoot>
        </table>
        <br>
    </div>
    <!-- /.card-body -->
</div>
<br>
<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Pretende eliminar o fornecedor?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default toastrDefaultSuccess1" data-dismiss="modal">Não</button>
          <button type="button" class="btn btn-primary toastrDefaultSuccess1" data-dismiss="modal">Sim</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>
@stop

@section('js')

<script src="/js/mfb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>

    $('.toastrDefaultSuccess1').click(function() {
      toastr.success('Editado com sucesso.')
    });

    $(function () {
    $('#table').DataTable({
        "responsive": true,
        "autoWidth": false,
        language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": '<div class="btn-group"><button type="button" class="btn btn-primary">Detalhes</button><button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"data-toggle="dropdown"><span class="caret"></span></button><div class="dropdown-menu"><a class="dropdown-item" data-toggle="modal" data-target="#modal-default1" href="#">Editar</a><a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-default" href="#">Eliminar fornecedores</a></div></div>'
        }]
    });
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Eliminado com sucesso.')
    });
  });

</script>
@stop

@section('css')
<link rel="stylesheet" href="/css/custom.css">
<link href="/css/mfb.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@stop