@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Cloreto de potássio</h1>
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

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h3>Informação do produto</h3>
      </div>
      <div class="card-body">
        <div>
          <p class="font-weight-bold">Fórmula: <span class="font-weight-normal">KCI</span></p>
          <p class="font-weight-bold">Peso molecular: <span class="font-weight-normal">74,5513 g/mol</span></p>
          <p class="font-weight-bold">CAS Nº: <span class="font-weight-normal">322211</span></p>
          <p class="font-weight-bold">Condições de armazenamento: <span class="font-weight-normal">Frio</span></p>
          <p class="font-weight-bold">Armário ventilado: <span class="font-weight-normal">Sim</span></p>
          <p class="font-weight-bold">Unidades: <span class="font-weight-normal">Gramas</span></p>
          <p class="font-weight-bold">Stock existente: <span class="font-weight-normal">5</span></p>
          <p class="font-weight-bold">Stock minímo: <span class="font-weight-normal">1</span></p>
          <p class="font-weight-bold">Recomendações de prudência: <span class="font-weight-normal"></span></p>
          <p class="font-weight-bold">Advertências de perigo: <span class="font-weight-normal"></span></p>
          <p class="font-weight-bold">Pictogramas:</p>
          <div>
            <img id="skull" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS06_skull.png" alt=""
              srcset="" width="100px" height="100px">
            <img id="danger" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS01_explos.png" alt=""
              srcset="" width="100px" height="100px">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h3>Armazenamento</h3>
      </div>
      <div class="card-body">
        <div>
          <table id="table" class="table table-head-fixed">
            <thead>
              <tr>
                <th>Localização</th>
                <th>Embalagem</th>
                <th>Data de abertura</th>
                <th>Término</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>G-2</td>
                <td>3</td>
                <td>10/12/2020</td>
                <td><button class="btn btn-primary">Registar Saída</button></td>
              </tr>
              <tr>
                <td>G-4</td>
                <td>2</td>
                <td><button class="btn btn-primary">Registar Abertura</button></td>
                <td><button class="btn btn-primary" disabled>Registar Saída</button></td>
              </tr>
              <tr>
                <td>G-2</td>
                <td>7</td>
                <td>12/12/2020</td>
                <td><button class="btn btn-primary">Registar Saída</button></td>
              </tr>
              <tr>
                <td>G-1</td>
                <td>6</td>
                <td>11/12/2020</td>
                <td><button class="btn btn-primary">Registar Saída</button></td>
              </tr>
              <tr>
                <td>G-2</td>
                <td>4</td>
                <td><button class="btn btn-primary">Registar Abertura</button></td>
                <td><button class="btn btn-primary" disabled>Registar Saída</button></td>
              </tr>
              </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

@endsection

@section('css')
<link href="css/mfb.css" rel="stylesheet">
@stop

@section('js')
<script src="js/mfb.js"></script>

<script>
  $(function () {
    $('#table').DataTable({
        "responsive": true,
        "autoWidth": false,
        "order": [[ 2, "asc" ]],
        language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        }
        /* "columnDefs": [ {
            "targets": [2,3],
            "data": null,
            "defaultContent": tableCellContent(),
            "orderable": false
        }] */
    });
  });
</script>

@endsection