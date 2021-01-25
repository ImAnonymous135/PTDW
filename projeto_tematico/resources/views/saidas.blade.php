@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ __('text.registarSaida') }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item active">{{ __('text.movimentosSaida') }}</li>
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
  <div class="form-group">
                <label class="font-weight-normal">{{ __('text.tipoEmbalagem') }}:</label>
                <div class="input-group-prepend">
                    <select id="pesquisa" class="select form-control" name="pesquisa">
                        <option value="produto">Produto</option>
                        <option value="prateleira">Prateleira</option>
                        <option value="armario">Armario</option>
                        <option value="cliente">Cliente</option>
                        <option value="embalagem">Embalagem</option>
                        <option value="solicitante">Solicitante</option>
                        <option value="operador">Operador</option>
                    </select>
                </div>
            </div>
    <table id="table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>{{ __('text.produto') }}</th>
          <th>{{ __('text.localizacao') }}</th>
          <th>{{ __('text.embalagem') }}</th>
          <th>{{ __('text.solicitante') }}</th>
          <th>{{ __('text.operador') }}</th>
          <th>{{ __('text.data') }}</th>
        </tr>
      </thead>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<br>
@stop

@section('js')
<script src="{{ asset('js/mfb.js') }}"></script>
{{-- Data table --}}
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
            "ajax": "{{ route('APISaidas')}}",
            "columns": [
                { "data": 'designacao' },
                { "data": 'localizacao' },
                { "data": 'embalagem' },
                { "data": 'solicitante' },
                { "data": 'operador' },
                { "data": 'data' }
            ]
    });
    table.on('preXhr.dt', function (e, settings, data) {
            data.pesquisa = $('#pesquisa').val();
        });
  });
</script>
@include('sub-views.exports')
@stop

@section('css')
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
@endsection
