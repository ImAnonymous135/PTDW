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
                    <li class="breadcrumb-item active">{{ __('text.movimentosNaoQuimicos') }}</li>
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
                <a href="../entradas" data-mfb-label="{{ __('text.registarEntrada') }}" class="mfb-component__button--child">
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
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="font-weight-normal">{{ __('text.familia') }}:</label>
                    <div class="input-group-prepend">
                        <select id="familia" class="select2 form-control" name="subfamilia[]" multiple="multiple">
                            @foreach($familias as $familia)
                              <option value="{{$familia->designacao}}">{{$familia->designacao}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <table id="table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th name="designacao">{{ __('text.produto') }}</th>
                    <th>{{ __('text.localizacao') }}</th>
                    <th>{{ __('text.fornecedor') }}</th>
                    <th>{{ __('text.marca') }}</th>
                    <th>{{ __('text.familia') }}</th>
                    <th>{{ __('text.tipoEmbalagem') }}</th>
                    <th>{{ __('text.cor') }}</th>
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
<br>
<br>
@stop

@section('js')
<script src="{{ asset('js/mfb.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function () {
        $('#familia').select2();
        
        var table = $('#table').DataTable({
            "dom": '<"top"<"row"<"col-sm-8"l><"col-sm-2"f><"col-sm-2"<"option-box">>>>rt<"bottom"ip><"clear">',
            "responsive": true,
            "autoWidth": false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
            },
            "initComplete": function () {
                $(".option-box").html('<div class="input-group-prepend"><select id="pesquisa" class="select form-control form-control-sm" name="pesquisa"><option value="produto">{{ __('text.produto') }}</option><option value="prateleira">{{ __('text.prateleira') }}</option><option value="armario">{{ __('text.armario') }}</option><option value="cliente">Cliente</option><option value="fornecedor">{{ __('text.fornecedor') }}</option><option value="marca">{{ __('text.marca') }}</option><option value="tipo">{{ __('text.tipoEmbalagem') }}</option><option value="cor">{{ __('text.cor') }}</option><option value="estado">{{ __('text.estadoFisico') }}</option><option value="textura">{{ __('text.texturaOuViscosidade') }}</option><option value="peso">{{ __('text.pesoBruto') }}</option></select> </div>');
            },
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('APIEntradaNaoQuimicos')}}",
            "columns": [
                { "data": 'designacao' },
                { "data": 'localizacao'},
                { "data": 'fornecedor' },
                { "data": 'marca' },
                { "data": 'familia' },
                { "data": 'tipo_embalagem' },
                { "data": 'cor' },
                { "data": 'peso' },
                { "data": 'data_entrada' },
                { "data": 'data_validade' },
            ]
        });

        table.on('preXhr.dt', function (e, settings, data) {
            var temp = $('#data').val().split("-");
            if (temp[0] != temp[1]) {
                data.start_date = temp[0];
                data.end_date = temp[1];
            }
            data.tipo = $('#familia').val();
            data.pesquisa = $('#pesquisa').val();
        });

        $('#data').daterangepicker({
            autoUpdateInput: true,
            locale: {
                format: 'DD/MM/YYYY',
                cancelLabel: 'Clear'
            }
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

        $('#familia').on('select2:select select2:unselect', function (ev, picker) {
            table.draw();
        });

        $('#pesquisa').on('change', function () {
            table.draw();
        })
    });
</script>
@include('sub-views.exports')
@stop

@section('css')
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection