@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Saídas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Saídas</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Produto</th>
        <th>Localização</th>
        <th>Embalagens</th>
        <th>Solicitante</th>
        <th>Operador</th>
        <th>Data</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>2</td>
        <td>Carlos Fonseca</td>
        <td>Ricardo José</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>2</td>
        <td>João Carlos</td>
        <td>Ricardo José</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>2</td>
        <td>João Carlos</td>
        <td>Ricardo José</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>2</td>
        <td>João Carlos</td>
        <td>Ricardo José</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>1</td>
        <td>João Carlos</td>
        <td>Ricardo José</td>
        <td>4/12/2019</td>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<br>
@stop

@section('js')
<script>
  
  $(function () {
    $('#table').DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@stop