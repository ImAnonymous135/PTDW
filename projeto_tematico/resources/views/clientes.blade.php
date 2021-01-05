@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('text.clientes') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">{{ __('text.clientes') }}</li>
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
        <a data-mfb-label="{{ __('text.novoCliente') }}" class="mfb-component__button--main" href="./clientes/adicionar">
            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
        </a>
    </li>
</ul>

<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>{{ __('text.designacao') }}</th>
                    <th>{{ __('text.nomeResponsavel') }}</th>
                    <th>{{ __('text.emailResponsavel') }}</th>
                    <th>{{ __('text.nomeSolicitante') }}</th>
                    <th>{{ __('text.emailSolicitante') }}</th>
                    <th>{{ __('text.observacoes') }}</th>
                    <th>{{ __('text.acoes') }}</th>
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
                <h4 class="modal-title">{{ __('text.eliminar') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ __('text.confirmarEliminarCliente') }}</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('text.nao') }}</button>
                <button type="button" class="btn btn-primary toastrDefaultSuccess" data-dismiss="modal">{{ __('text.sim') }}</button>
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
                <h4 class="modal-title">{{ __('text.editarCliente') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body w-200">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.designacao') }}</label>
                            <input type="text" class="form-control" id="#" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.nomeResponsavel') }}</label>
                            <input type="text" class="form-control" id="#"
                                >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.emailResponsavel') }}</label>
                            <input type="text" class="form-control" id="#"
                                >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.nomeSolicitante') }}</label>
                            <input type="text" class="form-control" id="#"
                                >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.observacoes') }}</label>
                            <textarea class="form-control" rows="3" ></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.emailSolicitante') }}</label>
                            <input type="text" class="form-control" id="#"
                                >
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('text.cancelar') }}</button>
                <button type="button" class="btn btn-primary toastrDefaultSuccess1"
                    data-dismiss="modal">{{ __('text.guardar') }}</button>
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
                <h4 class="modal-title">{{ __('text.informacaoCliente') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="font-weight-bold">{{ __('text.designacao') }}: <span class="font-weight-normal">Sala 16.7</span></p>
                <p class="font-weight-bold">{{ __('text.nomeResponsavel') }}: <span class="font-weight-normal">Joaquim
                        Ferreira</span></p>
                <p class="font-weight-bold">{{ __('text.emailResponsavel') }}: <span class="font-weight-normal">j.quim@ua.pt</span>
                </p>
                <p class="font-weight-bold">{{ __('text.nomeSolicitante') }}: <span class="font-weight-normal">Méci Tabuleiro</span>
                </p>
                <p class="font-weight-bold">{{ __('text.emailSolicitante') }}: <span class="font-weight-normal">Mci@ua.pt</span>
                </p>
                <p class="font-weight-bold">{{ __('text.observacoes') }}: <span class="font-weight-normal">Lorem ipsum dolor sit amet
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
<script src="{{ asset('js/mfb.js') }}"></script>
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
            "defaultContent": '<div class="btn-group"><button type="button" class="btn btn-primary" data-toggle="modal" data-toggle="tooltip" title={{ __('text.detalhes') }} data-target="#modal-default2"><i class="fas fa-eye"></i></button><button data-toggle="modal" data-toggle="tooltip" title={{ __('text.editar') }} data-target="#modal-default1" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button><button data-toggle="modal" data-toggle="tooltip" title={{ __('text.eliminar') }} data-target="#modal-default" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>',
            "orderable": false
        }]
    });
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('{{__('text.eliminadoSucesso')}}')
    });

    $('.toastrDefaultSuccess1').click(function() {
      toastr.success('{{ __('text.editadoSucesso') }}')
    });
  });
</script>
@include('sub-views.exports')
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
@stop
