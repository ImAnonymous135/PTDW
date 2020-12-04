@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Nome do produto</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
          <li class="breadcrumb-item active">Nome do produto</li>
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
                {{-- Informaçao produto --}}
                <div class="col-sm-6">
                    <h3>Informaçao do produto</h3>
                    {{-- Conteúdo quimico --}}
                    <div class="margin-top">
                        <p>Fórmula: <span></span></p>
                        <p>Peso molecular: <span></span></p>
                        <p>CAS Nº: <span></span></p>
                        <p>Condições de armazenamento: <span></span></p>
                        <p>Armário ventilado: <span></span></p>
                        <p>Unidades: <span></span></p>
                        <p>Stock existente: <span></span></p>
                        <p>Stock minímo: <span></span></p>
                        <p>Recomendações de prudência: <span></span></p>
                        <p>Advertências de perigo: <span></span></p>
                    </div>
                    {{-- Conteúdo não-quimico --}}
                    <div>

                    </div>
                </div>
                {{-- Armazenamento --}}
                <div class="col-sm-6">
                    <h3>Armazenamento</h3>
                    <div class="margin-top">
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed">
                              <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Localização</th>
                                    <th>Ações</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>219</td>
                                  <td>G-3</td>
                                  <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Detalhes</button>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                          <span class="sr-only">Toggle Dropdown</span>
                                          <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">Abrir Embalagem</a>
                                            <a class="dropdown-item" href="/saidas" onclick="window.location = '/saidas'">Remover</a>
                                          </div>
                                        </button>
                                      </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/custom.css">
@stop