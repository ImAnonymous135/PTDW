@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Fornecedores</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Fornecedores</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop
<!--
    Adicionar o botão em baixo a direita como o tem na pagina de produto no registo para adicionar um novo fornecedor
    Como ainda ha muita informaçao para por é melhor por um botao com mais informaçoes ou algo do genero
-->
@section('content')
<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
    <li class="mfb-component__wrap">
        <a data-mfb-label="Novo fornecedor" class="mfb-component__button--main" href="/fornecedores/adicionar">
            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
        </a>
    </li>
</ul>


<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>Fornecedor</th>
                    <th>Morada</th>
                    <th>Localidade</th>
                    <th>Código Postal</th>
                    <th>Telefone</th>
                    <th>NIF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Quimifeira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                <tr>
                    <td>Quimifeira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                <tr>
                    <td>João Luis</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                <tr>
                    <td>Quimifeira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                <tr>
                    <td>Feira</td>
                    <td>Rua Quim Pascal</td>
                    <td>Águeda</td>
                    <td>3750-141</td>
                    <td>912478356</td>
                    <td>215478543</td>
                    <td><button type="button" class="btn btn-primary">Detalhes</button></td>
                </tr>
                </tfoot>
        </table>
        <br>
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
                <p>Pretende eliminar o fornecedor?</p>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar fornecedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body w-200">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o nome...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Morada</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a morada...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Localidade</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite a localidade...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Código-postal</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o código-postal...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o telefone...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIF</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o NIF...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o e-mail...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Vendedor 1</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o nome do vendedor 1...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telemovél 1</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o telemóvel 1...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-mail 1</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o e-mail 1...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Vendedor 2</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o nome vendedor 2...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telemóvel 2</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o telemóvel 2...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-mail 2</label>
                            <input type="text" class="form-control" id="#" placeholder="Digite o e-mail 2...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Observações</label>
                            <textarea class="form-control" rows="3" placeholder="Digite as observações.."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Condições especiais</label>
                            <textarea class="form-control" rows="3"
                                placeholder="Digite as condições especiais.."></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary toastrDefaultSuccess1"
                    data-dismiss="modal">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-default2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Informação do fornecedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="font-weight-bold">Fornecedor: <span class="font-weight-normal">Feira</span></p>
                <p class="font-weight-bold">Morada: <span class="font-weight-normal">Rua Quim Pascal</span></p>
                <p class="font-weight-bold">Localidade: <span class="font-weight-normal">Águeda</span></p>
                <p class="font-weight-bold">Código postal: <span class="font-weight-normal">3750-141</span></p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@stop

@section('js')

<script src="/js/mfb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
</script>
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
            "defaultContent": '<div class="btn-group"><button type="button" class="btn btn-primary" data-toggle="modal" data-toggle="tooltip" title="Detalhes" data-target="#modal-default2"><i class="fas fa-eye"></i></button><button data-toggle="modal" data-toggle="tooltip" title="Editar" data-target="#modal-default1" type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button><button data-toggle="modal" data-toggle="tooltip" title="Eliminar" data-target="#modal-default" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>',
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
<link rel="stylesheet" href="{{ asset('css/mfb.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@stop