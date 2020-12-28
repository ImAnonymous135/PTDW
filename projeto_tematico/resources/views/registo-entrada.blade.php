@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
            {{ __('text.registarEntrada') }}
        </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item "><a href="../produtos">{{ __('text.produtos') }}</a></li>
          <li class="breadcrumb-item active">{{ __('text.entrada') }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop

@section('content')
<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="card-body">
        @if (true)
        {{-- Quimicos --}}
        @include('sub-views.quimicos')
        @else
        {{-- nao quimicos --}}
        @include('sub-views.nao-quimicos')
        @endif
      </div>
    </div>

    <div class="">
      <div class="d-flex flex-row justify-content-end">
        <span class="mr-2">
          <button type="button" class="btn btn-block btn-outline-primary"
            onclick="window.location.href='../produtos/info-produto'">{{ __('text.cancelar') }}</button>
        </span>
        <span class="mr-2">
          <button type="button" href="#" class="btn btn-block btn-primary">{{ __('text.submeters') }}</button>
        </span>
      </div>
    </div>
  </div>
</div>
<br>
@stop

@section('js')
<script src="{{ asset('js/adicionar.js') }}"></script>

<script>
  $(document).ready(function () {
            $('.select2').select2({
                placeholder:"Selecione os pictogramas..."
            });
        });
</script>

@stop
