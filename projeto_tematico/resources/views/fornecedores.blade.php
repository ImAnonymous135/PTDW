@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Fornecedores</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Fornecedores</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop
<!--
    Adicionar o botão em baixo a direita como o tem na pagina de produto no registo para adicionar um novo fornecedor
    Como ainda ha muita informaçao para por é melhor por um botao com mais informaçoes ou algo do genero
-->
@section('content')
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
                <tr>
                    <td>Quimifeira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                <tr>
                    <td>Quimifeira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                <tr>
                    <td>Quimifeira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                <tr>
                    <td>Feira</td>
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
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
          <button type="button" class="btn btn-primary toastrDefaultSuccess" data-dismiss="modal">Sim</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
@stop

@section('js')

<script src="/js/mfb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
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
            "defaultContent": '<div class="btn-group"><button type="button" class="btn btn-primary">Detalhes</button><button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"data-toggle="dropdown"><span class="caret"></span></button><div class="dropdown-menu"><a class="dropdown-item" href="#">Editar</a><a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-default" href="#">Eliminar fornecedores</a></div></div>'
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