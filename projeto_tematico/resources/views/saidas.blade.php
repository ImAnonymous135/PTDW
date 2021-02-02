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

<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
      <a href="#" data-mfb-label={{ __('text.exportar') }} class="mfb-component__button--main">
          <i class="mfb-component__main-icon--resting fas fa-bars"></i>
      </a>
      <ul class="mfb-component__list">
          <li>
              <a href="../saidas" data-mfb-label="{{ __('text.registarSaida') }}" class="mfb-component__button--child">
                  <i class="mfb-component__child-icon fas fa-plus"></i>
              </a>
          </li>
          <li>
              <a href="#" id="pdf" data-mfb-label="{{ __('text.exportarPara') }} PDF" class="mfb-component__button--child">
                  <i class="mfb-component__child-icon fas fa-file-pdf"></i>
              </a>
          </li>
          <li>
              <a href="#" id="csv" data-mfb-label="{{ __('text.exportarPara') }} CSV" class="mfb-component__button--child">
                  <i class="mfb-component__child-icon fas fa-file-csv"></i>
              </a>
          </li>

          <li>
              <a href="#" id="excel" data-mfb-label="{{ __('text.exportarPara') }} Excel" class="mfb-component__button--child">
                  <i class="mfb-component__child-icon fas fa-file-excel"></i>
              </a>
          </li>
      </ul>
  </li>
</ul>

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

function setLang() {
        if ('<?php echo Config::get("app.locale") ?>' == "pt") {
                return '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
            } else if ('<?php echo Config::get("app.locale") ?>' == "en") {
                return '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json'
            }
    }

  $(function () {
    var table = $('#table').DataTable({
      "responsive": true,
      "autoWidth": false,
      language: {
            url: setLang()
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
