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
    <div class="col-sm-6">
      <div class="form-group">
          <label class="font-weight-normal">{{ __('text.tipoEmbalagem') }}:</label>
          <div class="input-group-prepend">
              <select id="pesquisa" class="select form-control" name="pesquisa">
                  <option value="nome_administrador">Administrador</option>
                  <option value="operador">Operador</option>
                  <option value="operacao">Operacao</option>
              </select>
          </div>
      </div>
  </div>
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
      </tbody>
  </table>
  </div>
</div>
<br>

@stop

@section('js')
<script src="{{ asset('js/mfb.js') }}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
  $(function () {
        var table = $('#table').DataTable({
            "responsive": true,
            "autoWidth": false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
            },
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('APIOperadoresHistorico')}}",
            "columns": [
                { "data": 'administrador' },
                { "data": 'operador' },
                { "data": 'data' },
                { "data": 'operacao' },
                { "data": 'observacoes' }
            ]
        });

        table.on('preXhr.dt', function (e, settings, data) {
            data.pesquisa = $('#pesquisa').val();
        });

        $('#pesquisa').on('change', function () {
          table.draw();
        });
    });
</script>
@include('sub-views.exports')
@stop

@section('css')
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection