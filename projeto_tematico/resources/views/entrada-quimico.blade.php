@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ __('text.entradas') }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item active">{{ __('text.movimentosQuimicos') }}</li>
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
          <label class="font-weight-normal">{{ __('text.periodoEntrada') }}:</label>
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
          <th>{{ __('text.produto') }}</th>
          <th>{{ __('text.localizacao') }}</th>
          <th>{{ __('text.fornecedor') }}</th>
          <th>{{ __('text.marca') }}</th>
          <th>{{ __('text.pictogramas') }}</th>
          <th>{{ __('text.cor') }}</th>
          <th>{{ __('text.texturaOuViscosidade') }}</th>
          <th>{{ __('text.pesoBruto') }}</th>
          <th>{{ __('text.dataEntrada') }}</th>
          <th>{{ __('text.dataValidade') }}</th>
        </tr>
      </thead>
      <tbody>
        </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<br>
@stop

@section('js')
<script src="{{ asset('js/mfb.js') }}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
  var dataSet = [];
  @foreach( $produtos as $produto)
  dataSet.push(["{{$produto->movimento->embalagem->produto->designacao}}",
  "{{$produto->movimento->embalagem->prateleira}}",
  "{{$produto->movimento->fornecedor->designacao}}",
  "{{$produto->movimento->marca}}",
  "",
  "{{$produto->estado_fisico->estado_fisico}}",
  "{{$produto->textura_viscosidade->textura_viscosidade}}",
  "{{$produto->movimento->peso_bruto}}",
  "{{$produto->movimento->data_abertura}}",
  "{{$produto->movimento->data_validade}}"]);
  @endforeach
  $(function () {
    $('#table').DataTable({
      data:dataSet,
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
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection