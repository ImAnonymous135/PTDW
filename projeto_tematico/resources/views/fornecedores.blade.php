@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('text.fornecedores') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">{{ __('text.fornecedores') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop
@section('content')
<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
    <li class="mfb-component__wrap">
        <a data-mfb-label="{{ __('text.novoFornecedor') }}" class="mfb-component__button--main"
            href="./fornecedores/adicionar">
            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
        </a>
    </li>
</ul>


<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>{{ __('text.fornecedores') }}</th>
                    <th>{{ __('text.morada') }}</th>
                    <th>{{ __('text.localizacao') }}</th>
                    <th>{{ __('text.codigoPostal') }}</th>
                    <th>{{ __('text.telefone') }}</th>
                    <th>NIF</th>
                    <th>{{ __('text.acoes') }}</th>
                </tr>
            </thead>
            <tbody>

                </tfoot>
        </table>
        <br>
    </div>
</div>
<br>

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
                <p>{{ __('text.confirmarEliminarFornecedor') }}</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('text.nao') }}</button>
                <button type="button" class="btn btn-primary toastrDefaultSuccess"
                    data-dismiss="modal">{{ __('text.sim') }}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-default1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('text.editarFornecedor') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body w-200">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.nome') }}</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.morada') }}</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.localizacao') }}</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.codigoPostal') }}</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.telefone') }}</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIF</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.vendedor') }} 1</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.telefone') }} 1</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-mail 1</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.vendedor') }} 2</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.telefone') }} 2</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-mail 2</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.observacoes') }}</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>{{ __('text.condicoesEspeciais') }}</label>
                            <textarea class="form-control" rows="3"></textarea>
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
    </div>
</div>

<div class="modal fade" id="modal-default2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('text.informacaoFornecedor') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="font-weight-bold">{{ __('text.fornecedor') }}: <span class="font-weight-normal">Feira</span>
                </p>
                <p class="font-weight-bold">{{ __('text.morada') }}: <span class="font-weight-normal">Rua Quim
                        Pascal</span></p>
                <p class="font-weight-bold">{{ __('text.localizacao') }}: <span class="font-weight-normal">Águeda</span>
                </p>
                <p class="font-weight-bold">{{ __('text.codigoPostal') }}: <span
                        class="font-weight-normal">@if(isset($fornecedor)){{$fornecedor}}@endif</span></p>
            </div>
        </div>
    </div>
</div>
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
    dataSet=[];
    @foreach( $fornecedores as $fornecedor)
   dataSet.push(["{{$fornecedor->designacao}}","{{$fornecedor->morada}}","{{$fornecedor->localidade}}","{{$fornecedor->codigo_postal}}","{{$fornecedor->telefone}}","{{$fornecedor->nif}}",'<div class="btn-group"><button type="button" class="btn btn-primary" data-toggle="modal" data-toggle="tooltip" title="{{ __('text.detalhes') }}" data-target="#modal-default2-{{$fornecedor}}"><i class="fas fa-eye"></i></button><button data-toggle="modal" data-toggle="tooltip" title="{{ __('text.editar') }}" data-target="#modal-default1" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button><button data-toggle="modal" data-toggle="tooltip" title="{{ __('text.eliminar') }}" data-target="#modal-default" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>']);
   @endforeach
    $(function () {
    $('#table').DataTable({
        data:dataSet,
        "responsive": true,
        "autoWidth": false,
        language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
        "columnDefs": [ {
            "targets": -1,
            "orderable": false
        }]
    });
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('{{ __('text.eliminadoSucesso') }}')
    });

    $('.toastrDefaultSuccess1').click(function() {
      toastr.success('{{ __('text.editadoSucesso') }}')
    });
  });
</script>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/mfb.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@stop