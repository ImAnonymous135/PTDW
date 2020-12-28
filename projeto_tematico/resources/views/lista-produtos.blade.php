@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('text.listaProdutos') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">{{ __('text.produtos') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop
@section('content')
<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
    <li class="mfb-component__wrap">
        <a data-mfb-label="Novo produto" class="mfb-component__button--main" href="./produtos/adicionar">
            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
        </a>
    </li>
</ul>

<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>{{ __('text.designacao') }}</th>
                    <th>{{ __('text.inventario') }}</th>
                    <th>{{ __('text.embalagem') }}</th>
                    <th>{{ __('text.localizacao') }}</th>
                    <th>{{ __('text.tipo') }}</th>
                    <th>{{ __('text.acoes') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cloreto de potássio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>ÁCIDO ANTRANÍLICO</td>
                    <td>5</td>
                    <td>30mg</td>
                    <td>T-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Fenantrolina Monohidratada</td>
                    <td>322</td>
                    <td>5g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>ERGOMETRINA</td>
                    <td>30</td>
                    <td>25g</td>
                    <td>A-1</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Naftilamina</td>
                    <td>307</td>
                    <td>150g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Mercaptoetanol</td>
                    <td>145</td>
                    <td>250mL + 25mL</td>
                    <td>A-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Propanol</td>
                    <td>130</td>
                    <td>1L + 2.5L</td>
                    <td>A-2</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Caldo BHI</td>
                    <td>39</td>
                    <td>800g</td>
                    <td>C-2</td>
                    <td>Quimico</td>
                    <td></td>
                </tr>
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<br>
<br>
<br>
@stop

@section('js')
<script src="{{ asset('js/mfb.js') }}"></script>
<script>
    $(function () {
    $('#table').DataTable({
        "responsive": true,
        "autoWidth": false,
        "ordering": false,
        language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": '<div class="btn-group"><a href="./produtos/info-produto" type="button" data-toggle="tooltip" title="{{ __('text.details') }}" class="btn btn-primary"><i class="fas fa-eye"></i></a></div>'
        }]
    });
  });
</script>
@stop

@section('css')
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
@stop
