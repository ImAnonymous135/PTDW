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

  dataSet= [];
  @foreach( $registo_saidas as $registo_saidas)
   dataSet.push(["{{$registo_saidas->embalagem->produto->designacao}}","{{$registo_saidas->embalagem->prateleira->designacao}},{{$registo_saidas->embalagem->prateleira->armario->designacao}},{{$registo_saidas->embalagem->prateleira->armario->cliente->designacao}}","{{$registo_saidas->embalagem->designacao}}","{{$registo_saidas->solicitante->nome}}","{{$registo_saidas->operadores->nome}}","{{$registo_saidas->data}}"]);
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
  });
</script>
@include('sub-views.exports')
@stop

@section('css')
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
@endsection
