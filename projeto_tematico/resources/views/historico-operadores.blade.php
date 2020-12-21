@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Operadores</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Movimentos / Operadores</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop

@section('content')

@include('sub-views.export-button')

<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nome do administrador</th>
        <th>Operador</th>
        <th>Data</th>
        <th>Operação</th>
        <th>Observações</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Rafael</td>
        <td>Luis</td>
        <td>4/12/2019</td>
        <td>Adicionar químico</td>
        <td>Adicionei H2O</td>
      </tr>
      <tr>
        <td>Rafael</td>
        <td>Luis</td>
        <td>4/12/2019</td>
        <td>Adicionar químico</td>
        <td>Adicionei H2O</td>
      </tr>
      <tr>
        <td>Rafael</td>
        <td>Luis</td>
        <td>4/12/2019</td>
        <td>Adicionar químico</td>
        <td>Adicionei H2O</td>
      </tr>
      <tr>
        <td>Rafael</td>
        <td>Luis</td>
        <td>4/12/2019</td>
        <td>Adicionar químico</td>
        <td>Adicionei H2O</td>
      </tr>
      <tr>
        <td>Rafael</td>
        <td>Luis</td>
        <td>4/12/2019</td>
        <td>Adicionar químico</td>
        <td>Adicionei H2O</td>
      </tr>
      <tr>
        <td>Rafael</td>
        <td>Luis</td>
        <td>4/12/2019</td>
        <td>Adicionar químico</td>
        <td>Adicionei H2O</td>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<br>
@stop

@section('js')
<script src="/js/mfb.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
  $(function () {
    $('#table').DataTable({
      "responsive": true,
      "autoWidth": false,
      language: {
            url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
    });
    var daterangepicker = $('#reservation').daterangepicker({
        autoUpdateInput: false,
        locale:{
          format: 'DD/MM/YYYY',
          cancelLabel: 'Clear'
        }
    });
  });
</script>
@include('sub-views.exports')
@stop

@section('css')
<link href="/css/mfb.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection
