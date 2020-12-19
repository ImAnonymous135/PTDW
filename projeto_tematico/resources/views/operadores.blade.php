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
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et accumsan purus. Vestibulum vel
                        leo.</td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>Joaquim Fernandes</td>
                    <td>JoaquimF@ua.pt</td>
                    <td>Fiel de armazém</td>
                    <td>14/12/2020</td>
                    <td>15/12/2020</td>
                    <td>Observação</td>
                    <td>

                    </td>
                </tr>
                </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<br>


<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Pretende eliminar o operador?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-primary toastrDefaultSuccess" data-dismiss="modal">Sim</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-default1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar cargo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Qual o novo cargo do operador?</p>
                <select name="" id="" class="custom-select">
                    <option value="">Fiel de armazém</option>
                </select>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary toastrDefaultSuccess1" data-dismiss="modal">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(function () {
    $('#table').DataTable({
        "responsive": true,
        "autoWidth": false,
        language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": '<div class="btn-group"><button type="button" class="btn btn-primary"><i class="fas fa-eye"></i></button><button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>',
            "orderable": false
        }]
    });
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Eliminado com sucesso.')
    });

    $('.toastrDefaultSuccess1').click(function() {
      toastr.success('Editado com sucesso.')
    });
  });
</script>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@stop