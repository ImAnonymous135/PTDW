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
                    <p>{{ __('text.confirmarEliminarFornecedor') }}</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('text.nao') }}</button>
                    <button id="deleteButton" type="submit" class="btn btn-primary toastrDefaultSuccess">{{
                    __('text.sim') }}</button>
                </div>
            </form>
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
            <form method="POST" id="edit">
                @csrf
                @method('PUT')
                <div class="modal-body w-200">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.nome') }}</label>
                                <input type="text" class="form-control "
                                    name="designacao" id="designacao" value={{old('designacao')}}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.morada') }}</label>
                                <input type="text" class="form-control "
                                    name="morada" id="morada" value={{old('morada')}}>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.localizacao') }}</label>
                                <input type="text" class="form-control"
                                    name="localidade" id="localidade" value={{old('localidade')}}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.codigoPostal') }}</label>
                                <input type="text" class="form-control"
                                    name="codigo_postal" id="codigo_postal" value={{old('codigo_postal')}}>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.telefone') }}</label>
                                <input type="text" class="form-control"
                                    name="telefone" id="telefone" value={{old('telefone')}}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NIF</label>
                                <input type="text" class="form-control"
                                    id="nif" name="nif">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control"
                                    name="email" id="email" value={{old('email')}}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.vendedor') }} 1</label>
                                <input type="text" class="form-control" name="vendedor_1" id="vendedor_1"
                                    value={{old('vendedor_1')}}>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.telefone') }} 1</label>
                                <input type="text" class="form-control " name="telemovel_1" id="telemovel_1"
                                    value={{old('telemovel_1')}}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>E-Mail 1</label>
                                <input type="text" class="form-control"
                                    name="email_1" id="email_1" value={{old('email_1')}}>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.vendedor') }} 2</label>
                                <input type="text" class="form-control" name="vendedor_2" id="vendedor_2"
                                    value={{old('vendedor_2')}}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.telefone') }} 2</label>
                                <input type="text" class="form-control " name="telemovel_2" id="telemovel_2"
                                    value={{old('telemovel_2')}}>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>E-Mail 2</label>
                                <input type="text" class="form-control"
                                    name="email_2" id="email_2" value={{old('email_2')}}>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.observacoes') }}</label>
                                <textarea class="form-control" name="observacoes" id="observacoes" cols="30" rows="4"
                                    maxlength="100">{{old('observacoes')}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>{{ __('text.condicoesEspeciais') }}</label>
                                <textarea class="form-control" name="condicoes_especiais" id="condicoes_especiais"
                                    cols="30" rows="4" maxlength="100">{{old('observacoes')}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('text.cancelar')
                        }}</button>
                    <button type="submit" class="btn btn-primary toastrDefaultSuccess1" >{{
                        __('text.guardar') }}</button>
                </div>
            </form>
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
                <p class="font-weight-bold mb-1">{{ __('text.fornecedor') }}: <span id="nomeSpan"
                        class="font-weight-normal"></span>
                </p>
                <p class="font-weight-bold mb-1">{{ __('text.morada') }}: <span id="moradaSpan" class="font-weight-normal">
                    </span></p>
                <p class="font-weight-bold mb-1">{{ __('text.localizacao') }}: <span id="localizacaoSpan"
                        class="font-weight-normal"></span>
                </p>
                <p class="font-weight-bold mb-1">{{ __('text.telefone') }}: <span id="telefoneSpan"
                        class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">NIF: <span id="NIFSpan" class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">E-Mail: <span id="mailSpan" class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">{{ __('text.vendedor') }} 1: <span id="vendedorSpan"
                        class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">{{ __('text.telefone') }} 1: <span id="telefone1Span"
                        class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">E-Mail 1: <span id="mail1Span" class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">{{ __('text.vendedor') }} 2: <span id="vendedor2Span"
                        class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">{{ __('text.telefone') }} 2: <span id="telefone2Span"
                        class="font-weight-normal "></span></p>
                <p class="font-weight-bold mb-1">E-Mail 2: <span id="mail2Span" class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">{{ __('text.observacoes') }}: <span id="obserSpan"
                        class="font-weight-normal"></span></p>
                <p class="font-weight-bold mb-1">{{ __('text.condicoesEspeciais') }}: <span id="condiSpan"
                        class="font-weight-normal"></span></p>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')

<script src="/js/mfb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>

function setLang() {
        if ('<?php echo Config::get("app.locale") ?>' == "pt") {
                return '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
            } else if ('<?php echo Config::get("app.locale") ?>' == "en") {
                return '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json'
            }
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        var table = $('#table').DataTable({
            "responsive": true,
            "autoWidth": false,
            language: {
                url: setLang()
            },
            "processing": true,
            "serverSide": true,
            "columnDefs": [ {
            "targets": -1,
            "orderable": false
            }],
            "ajax": "{{ route('APIFornecedores')}}",
            "columns": [
                { "data": 'designacao' },
                { "data": 'morada' },
                { "data": 'localidade' },
                { "data": 'codigo_postal' },
                { "data": 'telefone' },
                { "data": 'nif' },
                { "data": 'buttons' }
            ]
        });

        function elim(id){
        $('#eliminar').attr('action', '/fornecedores/'+id);
        $('#modal-default').modal('show');
    }
    });

    @if(null !== session()->get( 'toast' ))
        @if(session()->get( 'toast' )== 'editSuccess')
            toastr.success('{{ __('text.editadoSucesso') }}')
        @elseif(session()->get( 'toast' ) == 'deleteSuccess')
            toastr.success('{{ __('text.eliminadoSucesso') }}')
        @elseif(session()->get( 'toast' ) == 'error')
            toastr.error('{{ __('text.erro') }}')
        @else
            toastr.success('{{ __('text.addSuccess') }}')
        @endif
    @endif

    @if(sizeof($errors) > 0)
        toastr.error('{{ __('text.erroEdite') }}')
    @endif
    
    function info(id,modal) {
        $.ajax({
               type:'GET',
               url:'api/fornecedor/'+id,
               success: function(info) {
                info = JSON.parse(info);
            if(modal){
                $('#modal-default2').modal('show');
                $('#nomeSpan').text(info.designacao);
                $('#moradaSpan').text(info.morada);
                $('#localizacaoSpan').text(info.localidade);
                $('#telefoneSpan').text(info.telefone);
                $('#codigoSpan').text(info.codigo_postal);
                $('#NIFSpan').text(info.nif);
                $('#mailSpan').text(info.email);
                $('#vendedorSpan').text(info.vendedor_1);
                $('#telefone1Span').text(info.telemovel_1);
                $('#mail1Span').text(info.email_1);
                $('#vendedor2Span').text(info.vendedor_2);
                $('#telefone2Span').text(info.telemovel_2);
                $('#mail2Span').text(info.email_2);
                $('#obserSpan').text(info.observacoes);
                $('#condiSpan').text(info.condicoes_especiais);
            }else{
                $('#edit').attr('action', './fornecedores/'+info.id);
                $('#modal-default1').modal('show');
                $('#designacao').val(info.designacao);
                $('#morada').val(info.morada);
                $('#localidade').val(info.localidade);
                $('#telefone').val(info.telefone);
                $('#codigo_postal').val(info.codigo_postal);
                $('#nif').val(info.nif);
                $('#email').val(info.email);
                $('#vendedor_1').val(info.vendedor_1);
                $('#telemovel_1').val(info.telemovel_1);
                $('#email_1').val(info.email_1);
                $('#vendedor_2').val(info.vendedor_2);
                $('#telemovel_2').val(info.telemovel_2);
                $('#email_2').val(info.email_2);
                $('#observacoes').val(info.observacoes);
                $('#condicoes_especiais').val(info.condicoes_especiais);
            }
        }
        });
    }
    function elim(id){
        $('#eliminar').attr('action', './fornecedores/'+id);
        $('#modal-default').modal('show');
    }

</script>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/mfb.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@stop
