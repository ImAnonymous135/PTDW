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
                        <input type="text" class="form-control float-right" id="data">
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <label class="font-weight-normal">{{ __('text.tipoEmbalagem') }}:</label>
              <div class="input-group-prepend">
                  <select id="pesquisa" class="select form-control" name="pesquisa">
                      <option value="produto">Produto</option>
                      <option value="prateleira">Prateleira</option>
                      <option value="armario">Armario</option>
                      <option value="cliente">Cliente</option>
                      <option value="fornecedor">Fornecedor</option>
                      <option value="marca">Marca</option>
                      <option value="tipo">Tipo de Embalagem</option>
                      <option value="cor">Cor</option>
                      <option value="estado">Estado Fisico</option>
                      <option value="textura">Textura e Viscosidade</option>
                      <option value="peso">Peso Bruto</option>
                  </select>
              </div>
          </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <label class="font-weight-normal">{{ __('text.familia') }}:</label>
            <div class="input-group-prepend">
                <select id="pictogramas" class="select2 form-control" name="subfamilia[]" multiple="multiple">
                    @foreach($pictogramas as $pictograma)
                      <option value="{{$pictograma->id}}">{{$pictograma->designacao}}</option>
                    @endforeach
                </select>
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
                    <th>{{ __('text.tipoEmbalagem') }}</th>
                    <th>{{ __('text.cor') }}</th>
                    <th>{{ __('text.estadoFisico') }}</th>
                    <th>{{ __('text.texturaOuViscosidade') }}</th>
                    <th>{{ __('text.pesoBruto') }}</th>
                    <th>{{ __('text.dataEntrada') }}</th>
                    <th>{{ __('text.dataValidade') }}</th>
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
        $('#pictogramas').select2();
        var table = $('#table').DataTable({
            "responsive": true,
            "autoWidth": false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
            },
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('APIEntradaQuimicos')}}",
            "columns": [
                { "data": 'designacao' },
                { "data": 'localizacao' },
                { "data": 'fornecedor' },
                { "data": 'marca' },
                { "data": 'pictogramas' },
                { "data": 'tipo_embalagem' },
                { "data": 'cor' },
                { "data": 'estado_fisico' },
                { "data": 'textura_viscosidade' },
                { "data": 'peso' },
                { "data": 'data_entrada' },
                { "data": 'data_validade' },
            ]
        });

        var daterangepicker = $('#data').daterangepicker({
            autoUpdateInput: true,
            locale: {
                format: 'DD/MM/YYYY',
                cancelLabel: 'Clear'
            }
        });

        table.on('preXhr.dt', function (e, settings, data) {
            var temp = $('#data').val().split("-");
            if (temp[0] != temp[1]) {
                data.start_date = temp[0];
                data.end_date = temp[1];
            }
            data.pictogramas = $('#pictogramas').val();
            data.pesquisa = $('#pesquisa').val();
        });

        $('#data').on('cancel.daterangepicker', function (ev, picker) {
            $('#data').val('');
            $('#data').data('daterangepicker').setStartDate(new Date());
            $('#data').data('daterangepicker').setEndDate(new Date());
            table.draw();
        });

        $('#data').on('apply.daterangepicker', function (ev, picker) {
          table.draw();
        });

        $('#pesquisa').on('change', function () {
          table.draw();
        });

        $('#pictogramas').on('select2:select select2:unselect', function (ev, picker) {
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