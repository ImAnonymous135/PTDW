@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Entradas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Movimentos / Químicos</li>
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

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label class="font-weight-normal">Período de entrada:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
            </div>
            <input type="text" class="form-control float-right" id="reservation">
          </div>

        </div>
      </div>
    </div>
    <table id="table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Produto</th>
          <th>Localização</th>
          <th>Fornecedor</th>
          <th>Marca</th>
          <th>Tipo de Embalagem</th>
          <th>Cor</th>
          <th>Textura ou Viscosidade</th>
          <th>Peso Bruto</th>
          <th>Data de Entrada</th>
          <th>Data de Validade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Garrafa de Vidro</td>
          <td>Verde</td>
          <td>Viscoso</td>
          <td>500kg</td>
          <td>10/11/2019</td>
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
<script src="js/mfb.js"></script>

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
<link href="../css/mfb.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection