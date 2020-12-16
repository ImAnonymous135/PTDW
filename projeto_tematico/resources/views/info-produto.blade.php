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

<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
    <a href="#" data-mfb-label="Nova entrada" class="mfb-component__button--main">
      <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
    </a>
  </li>
</ul>

{{-- Mini menu --}}

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
                <div class="col-md-6">
                    <h3>Armazenamento</h3>
                    <div class="margin-top">
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed" style=" transform: translateY(-2px)">
                              <thead>
                                <tr>
                                    <th>Embalagem</th>
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
                                      <button type="button" class="btn btn-primary">Detalhes</button>
                                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Registar abertura</a>
                                        <a class="dropdown-item" href="/produtos/saidas">Registar saída</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>218</td>
                                  <td>G-3</td>
                                  <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary">Detalhes</button>
                                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dar abertura</a>
                                        <a class="dropdown-item" href="#">Dar Saída</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>217</td>
                                  <td>G-3</td>
                                  <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary">Detalhes</button>
                                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dar abertura</a>
                                        <a class="dropdown-item" href="#">Dar Saída</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>216</td>
                                  <td>G-3</td>
                                  <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary">Detalhes</button>
                                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dar abertura</a>
                                        <a class="dropdown-item" href="#">Dar Saída</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>215</td>
                                  <td>G-3</td>
                                  <td>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-primary">Detalhes</button>
                                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Dar abertura</a>
                                        <a class="dropdown-item" href="#">Dar Saída</a>
                                      </div>
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
  <link href="/css/mfb.css" rel="stylesheet">
@stop

@section('js')
  <script src="/js/mfb.js"></script>
@endsection