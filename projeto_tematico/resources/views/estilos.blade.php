@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Estilos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><a>Estilos</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Botões</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão primário:</p>
                <button class="btn btn-primary">Botão</button>
            </div>
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão secundário:</p>
                <button class="btn btn-outline-primary">Botão</button>
            </div>
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão com opções:</p>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Botão</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Exemplo</a>
                        <a class="dropdown-item" href="#">Exemplo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão com opções:</p>
                <ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
                    <li class="mfb-component__wrap">
                        <a href="#" data-mfb-label="Nova entrada" class="mfb-component__button--main">
                            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <p class="mb-1 font-weight-bold">Botão com opções:</p>
                <ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
                    <li class="mfb-component__wrap">
                        <a href="#" data-mfb-label="Exportar" class="mfb-component__button--main">
                            <i class="mfb-component__main-icon--resting fas fa-file-export"></i>
                        </a>
                        <ul class="mfb-component__list">
                            <li>
                                <a href="#" id="pdf" data-mfb-label="Exportar para PDF"
                                    class="mfb-component__button--child">
                                    <i class="mfb-component__child-icon fas fa-file-pdf"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" id="csv" data-mfb-label="Exportar para CSV"
                                    class="mfb-component__button--child">
                                    <i class="mfb-component__child-icon fas fa-file-csv"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" id="excel" data-mfb-label="Exportar para Excel"
                                    class="mfb-component__button--child">
                                    <i class="mfb-component__child-icon fas fa-file-excel"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Inputs</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-1 font-weight-bold">Input Texto:</p>
                <div class="form-group">
                    <input type="text" class="form-control" id="usr">
                </div>
            </div>
            <div class="col-sm-3">
                <p class="mb-1 font-weight-bold">Select:</p>
                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <p class="mb-1 font-weight-bold">Inserir ficheiro:</p>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="col-xl-1">
                <p class="mb-1 font-weight-bold">Check box:</p>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Option 2
                    </label>
                </div>
            </div>
            <div class="col-xl-1">
                <p class="mb-1 font-weight-bold">Radio:</p>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optradio">Option 1
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Tabelas</h4>
    </div>
    <div class="card-body">
    </div>
</div>
<br>
@stop

@section('css')
<link href="/css/mfb.css" rel="stylesheet">
<style>
    #menu {
        position: unset;
    }
</style>
@stop

@section('js')
<script src="/js/mfb.js"></script>
@endsection