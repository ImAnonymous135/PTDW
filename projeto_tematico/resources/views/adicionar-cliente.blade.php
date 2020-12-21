@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    Adicionar cliente
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item "><a href="/clientes">Clientes</a></li>
                    <li class="breadcrumb-item active">Adicionar</li>
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
                    <label>Designação</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite a designação...">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Nome do responsável</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o nome do responsável...">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>E-mail do responsável</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o e-mail do responsável..">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Nome do solicitante</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o nome do solicitante...">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>E-mail do solicitante</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o e-mail do solicitante...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Observações</label>
                    <textarea class="form-control" id="" cols="30" rows="4" maxlength="100" placeholder="Observações"></textarea>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary"
                        onclick="window.location.href='/produtos'">Cancelar</button>
                </span>
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-primary">Submeter</button>
                </span>
            </div>
        </div>
    </div>
</div>
<br>
@stop

@section('js')


@stop