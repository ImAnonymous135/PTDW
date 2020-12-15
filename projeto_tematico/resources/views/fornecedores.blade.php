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
@stop

@section('js')
<script>
    $(document).ready(function(){
        	
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn';
        var table = $('#table').on('init.dt', function(){
            $('#butn').on('mouseenter', function() {
                $('#butn').css('cursor', 'default');
                $('#butn').click();
                $('.dt-button-collection').on('mouseleave', function() {
                        $('h1').click();
                });
            });
        }).DataTable({
        "responsive": true,
        "autoWidth": false,
        "ordering": false,
        dom: '<"col-sm-12 col-md-6 float-sm-left"l><"col-sm-12 col-md-6 float-sm-right"f>rtip<"float-sm-right"B>',
        buttons: [
            {
            extend: 'collection',
            attr: {id: "butn"},
            text: 'Exportar dados',
            className: 'btn btn-primary dropdown-toggle',
            autoClose: true,
            buttons: [
                { text: 'CSV',
                extend: 'csvHtml5',
                className: 'dropdown-item',
                tag: "a"},

                { text: 'PDF',
                extend: 'pdfHtml5',
                className: 'dropdown-item',
                tag: "a"},

                { text: 'Excel',
                extend: 'excelHtml5',
                className: 'dropdown-item',
                tag: "a" }
            ],
            fade: true,
            background: false,

        }
        ],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
        });

    });
</script>
@stop