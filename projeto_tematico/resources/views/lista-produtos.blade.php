@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Operadores</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Operadores</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop
<!--
    Adicionar o botao no final para a ação como eliminar ou mudar de cargo ou assim
-->
@section('content')
<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>Designação</th>
                    <th>Inventário</th>
                    <th>Embalagem</th>
                    <th>Localização</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hidróxido de sódio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Hidróxido de sódio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Hidróxido de sódio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Hidróxido de sódio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Hidróxido de sódio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Hidróxido de sódio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Hidróxido de sódio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Hidróxido de sódio</td>
                    <td>21</td>
                    <td>25g</td>
                    <td>G-3</td>
                    <td>Quimico</td>
                    <td>
                    </td>
                </tr>
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<br>
@stop

@section('js')
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
            "defaultContent": '<div class="btn-group"><button type="button" class="btn btn-primary">Detalhes</button><button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"data-toggle="dropdown"><span class="caret"></span></button><div class="dropdown-menu"><a class="dropdown-item" href="/produtos/info-produto">Informação do produto</a><a class="dropdown-item" href="/produtos/adicionar">Adicionar produto</a></div></div>'
        }]
    });
  });
</script>
@stop