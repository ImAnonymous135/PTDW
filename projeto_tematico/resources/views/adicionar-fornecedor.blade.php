@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    Adicionar fornecedor
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item "><a href="./fornecedor">Fornecedor</a></li>
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
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Morada</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite a morada...">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Localidade</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite a localidade...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Código Postal</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o código postal...">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o telefone...">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>NIF</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o NIF...">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>E-Mail</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o e-mail...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Vendedor 1</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o vendedor 1...">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Telemóvel 1</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o telemóvel 1...">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>E-Mail 1</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o e-mail 1...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Vendedor 2</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o vendedor 2...">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Telemóvel 2</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o telemóvel 2...">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>E-Mail 2</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o e-mail 2...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Condições especiais</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o condições especiais...">
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