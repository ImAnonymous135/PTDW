@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
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
                        <th>Nome do responsavel</th>
                        <th>E-mail do responsavel</th>
                        <th>Nome do Solicitante</th>
                        <th>E-mail do socilitante</th>
                        <th>Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    <tr>
                        <td>Sala 16.7</td>
                        <td>Joaquim Ferreira</td>
                        <td>j.quim@ua.pt</td>
                        <td>Méci Tabuleiro</td>
                        <td>Mci@ua.pt</td>
                        <td>10/10 will work here</td>
                    </tr>
                    </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <br>
@stop


@section('js')
    <script src="js/mfb.js"></script>
    {{-- Data table --}}
    <script>
        $(function() {
            $('#table').DataTable({
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
    <link href="css/mfb.css" rel="stylesheet">
@endsection
