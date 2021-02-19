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

@section('content')

<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
    <li class="mfb-component__wrap">
        <a data-mfb-label="{{ __('text.novoCliente') }}" class="mfb-component__button--main"
            href="./clientes/adicionar">
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
        </table>
    </div>
    <!-- /.card-body -->
</div>

<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" id="eliminar">
                @method('delete')
                @csrf
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
                    <button type="submit" class="btn btn-primary toastrDefaultSuccess">{{ __('text.sim') }}</button>
                </div>
            </form>
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
            <form method="POST" id="edit">
                @csrf
                @method('PUT')
                <div class="modal-body w-200">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.designacao') }}</label>
                                <input type="text" class="form-control" id="designacao" required name="designacao"
                                    value={{old('designacao')}}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.nomeResponsavel') }}</label>
                                <input type="text" class="form-control" required id="nomeResponsavel"
                                    name="nomeResponsavel" value={{old('nomeResponsavel')}}>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.emailResponsavel') }}</label>
                                <input type="email" class="form-control" id="emailResponsavel" name="emailResponsavel"
                                    value={{old('emailResponsavel')}}>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.nomeSolicitante') }}</label>
                                <input type="text" class="form-control " name="nomeSolicitante" id="nomeSolicitante"
                                    value={{old('nomeSolicitante')}}>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.observacoes') }}</label>
                                <textarea class="form-control" name="observacoes" id="observacoes" cols="30" rows="3"
                                    maxlength="100">{{old('observacoes')}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.emailSolicitante') }}</label>
                                <input type="email" class="form-control" id="emailSolicitante" name="emailSolicitante"
                                    value={{old('emailSolicitante')}}>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default"
                        data-dismiss="modal">{{ __('text.cancelar') }}</button>
                    <button type="submit"
                        class="btn btn-primary toastrDefaultSuccess1">{{ __('text.guardar') }}</button>
                </div>
            </form>
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

                <p class="font-weight-bold mb-1">{{ __('text.designacao') }}: <span class="font-weight-normal"
                        id="designacaoSpan"></span></p>
                <p class="font-weight-bold mb-1">{{ __('text.nomeResponsavel') }}: <span class="font-weight-normal"
                        id="nomeRspan"></span></p>
                <p class="font-weight-bold mb-1">{{ __('text.emailResponsavel') }}: <span class="font-weight-normal"
                        id="emailRsapn"></span>
                </p>
                <p class="font-weight-bold mb-1">{{ __('text.nomeSolicitante') }}: <span class="font-weight-normal"
                        id="nomeSspan"></span>
                </p>
                <p class="font-weight-bold mb-1">{{ __('text.emailSolicitante') }}: <span class="font-weight-normal"
                        id="emailSspan"></span>
                </p>
                <p class="font-weight-bold mb-1">{{ __('text.observacoes') }}: <span class="font-weight-normal"
                        id="observacoes1"></span></p>

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
    @if(null !== session()->get( 'toast' ))
        @if(session()->get( 'toast' )== 'editSuccess')
            toastr.success('{{ __('text.editadoSucesso') }}')
        @elseif(session()->get( 'toast' ) == 'deleteSuccess')
            toastr.success('{{ __('text.eliminadoSucesso') }}')
        @elseif(session()->get( 'toast' ) == 'error')
            toastr.error('{{ __('text.erro') }}')    
        @elseif(session()->get( 'toast' ) == 'errorEdite')
        {{dd(session())}};
            toastr.error('{{ __('text.erroEdite') }}')       
        @else
            toastr.success('{{ __('text.addSuccess') }}')
        @endif
    @endif

    @if(sizeof($errors) > 0)
        toastr.error('{{ __('text.erroEdite') }}')
    @endif

    function setLang() {
        if ('<?php echo Config::get("app.locale") ?>' == "pt") {
                return '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
            } else if ('<?php echo Config::get("app.locale") ?>' == "en") {
                return '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json'
            }
    }

    $(function () {
    $('#table').DataTable({
        "responsive": true,
        "autoWidth": false,
        language: {
                url: setLang(),
        },
        "processing": true,
            "serverSide": true,
            "ajax": "{{ route('APIlistaClientes')}}",
            "columns": [
                { "data": 'designacao' },
                { "data": 'nomeOperadores' },
                { "data": 'emailOperadores' },
                { "data": 'nomeSolicitante' },
                { "data": 'emailSolicitante'},
                { "data": 'observacoes'},
                { "data": 'buttons'}
            ]
    });
  });

  function elim(id){
        $('#eliminar').attr('action', './clientes/'+id);
        $('#modal-default').modal('show');
    }

    function info(id,modal) {
        console.log(id);
        $.ajax({
               type:'GET',
               url:'api/clientes/'+id,
               success: function(info) {
                info = JSON.parse(info);
                console.dir(info);
            if(modal){
                $('#modal-default2').modal('show');
                $('#designacaoSpan').text(info[0].designacao);
                $('#nomeRspan').text(info[0].nomeOperadores);
                $('#emailRsapn').text(info[0].emailOperadores);
                $('#nomeSspan').text(info[0].nomeSolicitante);
                $('#emailSspan').text(info[0].emailSolicitante);
                $('#observacoes1').text(info[0].observacoes);
            }else{
                $('#edit').attr('action', './clientes/'+id);
                $('#modal-default1').modal('show');
                $('#designacao').val(info[0].designacao);
                $('#nomeResponsavel').val(info[0].nomeOperadores);
                $('#emailResponsavel').val(info[0].emailOperadores);
                $('#nomeSolicitante').val(info[0].nomeSolicitante);
                $('#observacoes').val(info[0].observacoes);
                $('#emailSolicitante').val(info[0].emailSolicitante);
            }
        }
        });
        console.dir(info);
        console.dir(modal);
    }

</script>
@include('sub-views.exports')
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
@stop