@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    {{ __('text.adicionarCliente') }}
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    <li class="breadcrumb-item "><a href="../clientes">{{ __('text.clientes') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('text.add') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>{{ __('text.designacao') }}</label>
                    <input type="text" class="form-control" id="#" >
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.nomeResponsavel') }}</label>
                    <input type="text" class="form-control" id="#" >
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.emailResponsavel') }}</label>
                    <input type="text" class="form-control" id="#" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.nomeSolicitante') }}</label>
                    <input type="text" class="form-control" id="#" >
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>{{ __('text.emailSolicitante') }}</label>
                    <input type="text" class="form-control" id="#" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>{{ __('text.observacoes') }}</label>
                    <textarea class="form-control" id="" cols="30" rows="4" maxlength="100" ></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary"
                        onclick="window.location.href='../clientes'">{{ __('text.cancelar') }}</button>
                </span>
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-primary">{{ __('text.submeter') }}</button>
                </span>
            </div>
        </div>
    </div>
</div>
<br>
@stop

@section('js')


@stop
