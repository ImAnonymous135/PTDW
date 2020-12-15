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

@section('content')
<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>To do</th>
                    <th>To dol</th>
                    <th>To do</th>
                    <th>To do</th>
                    <th>To do</th>
                    <th>To do</th>
                    <th>To do</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Aluno 1</td>
                    <td>Aluno 1@ua.pt</td>
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