@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Clientes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Clientes</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop
<!--
    Adicionar o botao no final para a ação como eliminar ou mudar de cargo ou assim
-->
@section('content')
<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
    <li class="mfb-component__wrap">
        <a data-mfb-label="Novo fornecedor" class="mfb-component__button--main" href="/clientes/adicionar">
            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
        </a>
    </li>
</ul>

<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>Designação</th>
                    <th>Nome do responsável</th>
                    <th>E-mail do responsável</th>
                    <th>Nome do solicitante</th>
                    <th>E-mail do socilitante</th>
                    <th>Observações</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sala 16.7</td>
                    <td>Joaquim Ferreira</td>
                    <td>j.quim@ua.pt</td>
                    <td>Méci Tabuleiro</td>
                    <td>Mci@ua.pt</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                    <td></td>
                </tr>

                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>

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
                <p>Pretende eliminar o cliente?</p>
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

<div class="modal fade" id="modal-default1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body w-200">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Designação</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a designação...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome do responsável</label>
                            <input type="text" class="form-control" id="#"
                                placeholder="Digite o nome do responsável...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-Mail do responsável</label>
                            <input type="text" class="form-control" id="#"
                                placeholder="Digite o e-mail do responsável...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome do solicitante</label>
                            <input type="text" class="form-control" id="#"
                                placeholder="Digite o nome do solicitante...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Observações</label>
                            <textarea class="form-control" rows="3" placeholder="Digite as observações.."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-Mail do solicitante</label>
                            <input type="text" class="form-control" id="#"
                                placeholder="Digite o e-mail do solicitante...">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary toastrDefaultSuccess1"
                    data-dismiss="modal">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-default2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Informação do cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="font-weight-bold">Designação: <span class="font-weight-normal">Sala 16.7</span></p>
                <p class="font-weight-bold">Nome do responsável: <span class="font-weight-normal">Joaquim
                        Ferreira</span></p>
                <p class="font-weight-bold">E-Mail do responsável:: <span class="font-weight-normal">j.quim@ua.pt</span>
                </p>
                <p class="font-weight-bold">Nome do solicitante: <span class="font-weight-normal">Méci Tabuleiro</span>
                </p>
                <p class="font-weight-bold">E-Mail do solicitante:: <span class="font-weight-normal">Mci@ua.pt</span>
                </p>
                <p class="font-weight-bold">Observações: <span class="font-weight-normal">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Quas nobis earum quia magni repudiandae.</span></p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<br>
<br>
@stop


@section('js')
<script src="/js/mfb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
</script>
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
            "defaultContent": '<div class="btn-group"><button type="button" class="btn btn-primary" data-toggle="modal" data-toggle="tooltip" title="Detalhes" data-target="#modal-default2"><i class="fas fa-eye"></i></button><button data-toggle="modal" data-toggle="tooltip" title="Editar" data-target="#modal-default1" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button><button data-toggle="modal" data-toggle="tooltip" title="Eliminar" data-target="#modal-default" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>',
            "orderable": false
        }]
    });
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Eliminado com sucesso.')
    });

    $('.toastrDefaultSuccess1').click(function() {
      toastr.success('Editado com sucesso.')
    });
  });
</script>
@include('sub-views.exports')
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link rel="stylesheet" href="/css/custom.css">
<link href="/css/mfb.css" rel="stylesheet">
@stop