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
                <a href="../saidas" data-mfb-label="{{ __('text.registarSaida') }}"
                    class="mfb-component__button--child">
                    <i class="mfb-component__child-icon fas fa-plus"></i>
                </a>
            </li>
            <li>
                <a href="#" id="pdf" data-mfb-label="{{ __('text.exportarPara') }} PDF"
                    class="mfb-component__button--child">
                    <i class="mfb-component__child-icon fas fa-file-pdf"></i>
                </a>
            </li>
            <li>
                <a href="#" id="csv" data-mfb-label="{{ __('text.exportarPara') }} CSV"
                    class="mfb-component__button--child">
                    <i class="mfb-component__child-icon fas fa-file-csv"></i>
                </a>
            </li>

            <li>
                <a href="#" id="excel" data-mfb-label="{{ __('text.exportarPara') }} Excel"
                    class="mfb-component__button--child">
                    <i class="mfb-component__child-icon fas fa-file-excel"></i>
                </a>
            </li>
        </ul>
    </li>
</ul>

<div class="card">
    <div class="card-body">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="font-weight-normal">{{ __('text.periodoEntrada') }}:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control-sm form-control float-right" id="data">
                </div>
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
</div>
<br>
@stop

@section('js')
<script src="{{ asset('js/mfb.js') }}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>

    function setLang() {
        if ('<?php echo Config::get("app.locale") ?>' == "pt") {
            return '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        } else if ('<?php echo Config::get("app.locale") ?>' == "en") {
            return '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json'
        }
    }

    $(function () {

        var daterangepicker = $('#data').daterangepicker({
            autoUpdateInput: true,
            locale: {
                format: 'DD/MM/YYYY',
                cancelLabel: 'Clear'
            }
        });

        var table = $('#table').DataTable({
            "dom": '<"top"<"row"<"col-sm-8"l><"col-sm-2"f><"col-sm-2"<"option-box">>>>rt<"bottom"ip><"clear">',
            "initComplete": function () {
                $(".option-box").html('<div class="input-group-prepend"><select id="pesquisa" class="select form-control form-control-sm" name="pesquisa"><option value="produto">{{ __('text.produto') }}</option><option value="prateleira">{{ __('text.prateleira') }}</option><option value="armario">{{ __('text.armario') }}</option><option value="cliente">Cliente</option><option value="embalagem">{{ __('text.embalagem') }}</option><option value="solicitante">{{ __('text.solicitante') }}</option><option value="operador">{{ __('text.operador') }}</option></select> </div>');
            },
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
            var temp = $('#data').val().split("-");
            if (temp[0] != temp[1]) {
                data.start_date = temp[0];
                data.end_date = temp[1];
            }
            data.pesquisa = $('#pesquisa').val();
        });

        $('#pesquisa').on('change', function () {
            table.draw();
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

    });
    
</script>
@include('sub-views.exports')
@stop

@section('css')
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection