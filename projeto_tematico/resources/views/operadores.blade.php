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
                    <th>Nome</th>
                    <th>E-Mail</th>
                    <th>Perfil</th>
                    <th>Data de criação</th>
                    <th>Data de Eliminação</th>
                    <th>Observações</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td></td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Joaquim Ferreira</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
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
    });
  });
</script>
@stop