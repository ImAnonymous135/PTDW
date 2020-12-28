@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home</h1>
            </div>

        </div>
    </div>
</div>
@stop
@section('content')
<div class="row">
    <div class="col-sm-3">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>580</h3>
                <p>{{__('text.produtos')}}</p>
            </div>
            <div class="icon">
                <i class="fas fa-vials"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>10</h3>
                <p>{{__('text.clientes')}}</p>
            </div>
            <div class="icon">
                <i class="fas fa-microscope"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>230</h3>
                <p>{{__('text.utilizadores')}}</p>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>10</h3>
                <p>{{__('text.fornecedores')}}</p>
            </div>
            <div class="icon">
                <i class="fas fa-truck"></i>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3>{{__('text.produtosStock')}}</h3>
            </div>
            <div class="card-body">
                <table id="table2" class="table table-head-fixed">
                    <thead>
                        <tr>
                            <th>{{__('text.designacao')}}</th>
                            <th>{{__('text.inventario')}}</th>
                            <th>{{__('text.embalagem')}}</th>
                            <th>{{__('text.localizacao')}}</th>
                            <th>{{__('text.tipo')}}</th>
                            <th>{{__('text.acoes')}}</th>
                        </tr>
                    </thead>
                    <tbody>
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
                            <td>ERGOMETRINA</td>
                            <td>7</td>
                            <td>25g</td>
                            <td>A-1</td>
                            <td>Quimico</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>Propanol</td>
                            <td>13</td>
                            <td>1L + 2.5L</td>
                            <td>A-2</td>
                            <td>Quimico</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>Caldo BHI</td>
                            <td>10</td>
                            <td>800g</td>
                            <td>C-2</td>
                            <td>Quimico</td>
                            <td></td>
                        </tr>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <h3>{{__('text.movimentosRecentes')}}</h3>
            </div>
            <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('text.produto') }}</th>
                            <th>{{ __('text.localizacao') }}</th>
                            <th>{{ __('text.embalagem') }}</th>
                            <th>{{ __('text.operador') }}</th>
                            <th>{{ __('text.data') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Água</td>
                            <td>G-3</td>
                            <td>2</td>
                            <td>Ricardo José</td>
                            <td>4/12/2019</td>
                        </tr>
                        <tr>
                            <td>Água</td>
                            <td>G-3</td>
                            <td>2</td>
                            <td>Ricardo José</td>
                            <td>4/12/2019</td>
                        </tr>
                        <tr>
                            <td>Água</td>
                            <td>G-3</td>
                            <td>2</td>
                            <td>Ricardo José</td>
                            <td>4/12/2019</td>
                        </tr>
                        <tr>
                            <td>Água</td>
                            <td>G-3</td>
                            <td>2</td>
                            <td>Ricardo José</td>
                            <td>4/12/2019</td>
                        </tr>
                        <tr>
                            <td>Água</td>
                            <td>G-3</td>
                            <td>1</td>
                            <td>Ricardo José</td>
                            <td>4/12/2019</td>
                        </tr>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
@stop

@section('js')
<script>
    $(function () {
      $('#table').DataTable({
        "responsive": true,
        "autoWidth": false,
        language: {
              url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
          },
      });
    });
    $(function () {
    $('#table2').DataTable({
        "responsive": true,
        "autoWidth": false,
        "ordering": false,
        "order": [[ 1, "asc" ]],
        language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": '<div class="btn-group"><a href="./produtos/info-produto" type="button" data-toggle="tooltip" title="Detalhes" class="btn btn-primary"><i class="fas fa-eye"></i></a></div>'
        }]
    });
  });
</script>
@endsection
