@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ __('text.operadores') }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item active">{{ __('text.movimentoOperadores') }}</li>
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
          <th>{{ __('text.nomeAdmin') }}</th>
          <th>{{ __('text.operador') }}</th>
          <th>{{ __('text.data') }}</th>
          <th>{{ __('text.operacao') }}</th>
          <th>{{ __('text.observacoes') }}</th>
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
  @foreach( $operadores as $operador)
   dataSet.push(["{{$operador->nome_administrador}}","{{$operador->operador}}","{{$operador->data}}","{{$operador->operacao}}","{{$operador->observacoes}}"]);
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