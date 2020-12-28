@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    {{ __('text.adicionarOperador') }}
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    <li class="breadcrumb-item "><a href="../operadores">{{ __('text.operador') }}</a></li>
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
                    <label>{{ __('text.nome') }}</label>
                    <input type="text" class="form-control" id="#">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" id="#">
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>{{ __('text.perfil') }}</label>
                    <select class="form-control" name="" id="">
                        <option value="">Fiel de armazém</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>{{ __('text.observacoes') }}</label>
                    <textarea class="form-control" id="" cols="30" rows="4" maxlength="100"></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary"
                        onclick="window.location.href='../operadores'">{{ __('text.cancelar') }}</button>
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
