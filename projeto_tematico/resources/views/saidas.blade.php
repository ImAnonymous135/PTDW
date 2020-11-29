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
        <th>Data de Entrada</th>
        <th>Data de Abertura</th>
        <th>Data de Validade</th>
        <th>Data de término</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>24/11/2019</td>
        <td>26/11/2019</td>
        <td>21/12/2019</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>24/11/2019</td>
        <td>26/11/2019</td>
        <td>21/12/2019</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>24/11/2019</td>
        <td>26/11/2019</td>
        <td>21/12/2019</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>24/11/2019</td>
        <td>26/11/2019</td>
        <td>21/12/2019</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>24/11/2019</td>
        <td>26/11/2019</td>
        <td>21/12/2019</td>
        <td>4/12/2019</td>
      </tr>
      <tr>
        <td>Água</td>
        <td>G-3</td>
        <td>24/11/2019</td>
        <td>26/11/2019</td>
        <td>21/12/2019</td>
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