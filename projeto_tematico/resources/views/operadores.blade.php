@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ __('text.operadores') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">{{ __('text.operadores') }}</li>
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
<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
    <li class="mfb-component__wrap">
        <a data-mfb-label="{{ __('text.novoOperador') }}" class="mfb-component__button--main" href="../operadores/adicionar">
            <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
        </a>
    </li>
</ul>

<div class="card">
    <div class="card-body">
        <table id="table" class="table table-head-fixed">
            <thead>
                <tr>
                    <th>{{ __('text.nome') }}</th>
                    <th>E-Mail</th>
                    <th>{{ __('text.perfil') }}</th>
                    <th>{{ __('text.dataCriacao') }}</th>
                    <th>{{ __('text.dataEliminacao') }}</th>
                    <th>{{ __('text.acoes') }}</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<br>


<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" id="eliminar">
                @method('delete')
                @csrf
            <div class="modal-header">
                <h4 class="modal-title">{{ __('text.eliminar') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ __('text.confirmarEliminarOperador') }}</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('text.nao') }}</button>
                <button type="submit" class="btn btn-primary toastrDefaultSuccess">{{ __('text.sim') }}</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-default1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('text.editarCargo') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" id="edit">
                @csrf
                @method('PUT')
            <div class="modal-body">
                <p>{{ __('text.novoCargoOperador') }}</p>
                <select name="novoCargoOperador" id="novoCargoOperador" class="custom-select">
                    @foreach($perfil as $perfil)
                        <option value="{{$perfil->id}}">{{$perfil->perfil}}</option>
                    @endforeach
                </select>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('text.cancelar') }}</button>
                <button type="submit" class="btn btn-primary toastrDefaultSuccess1">{{ __('text.guardar') }}</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-default2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('text.informacaoOperador') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="font-weight-bold">{{ __('text.nome') }}: <span class="font-weight-normal" id="nome"></span></p>
                <p class="font-weight-bold">E-Mail: <span class="font-weight-normal" id="email"></span></p>
                <p class="font-weight-bold">{{ __('text.perfil') }}: <span class="font-weight-normal" id="perfil"></span></p>
                <p class="font-weight-bold">{{ __('text.dataCriacao') }}: <span class="font-weight-normal" id="dataCriacao"></span></p>
                <p class="font-weight-bold">{{ __('text.dataEliminacao') }}: <span class="font-weight-normal" id="dataEliminacao"></span></p>
                <p class="font-weight-bold">{{ __('text.observacoes') }}: <span class="font-weight-normal" id="observacoes"></span></p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<br>
<br>
@stop

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>

dataSet= [];
  @foreach( $operadores as $operadores)
   dataSet.push([
       "{{$operadores->nome}}",
        "{{$operadores->email}}",
        "{{$operadores->perfil->perfil}}",
        "{{$operadores->data_criação}}",
        "{{$operadores->data_eliminação}}",
        '<div class="btn-group"><button type="button" class="btn btn-primary" data-toggle="tooltip" title="{{ __('text.detalhes') }}" onclick="info({{$operadores}},true)" }}"><i class="fas fa-eye"></i></button>  <button data-toggle="tooltip" title="{{ __('text.editar') }}"  type="button" onclick="info({{$operadores}},false)" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>  <button data-toggle="tooltip" title="{{ __('text.eliminar') }}" type="button" onclick="elim({{$operadores->id}})"  class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></div>'
        ]);
   @endforeach
    $(function () {
    $('#table').DataTable({
        data:dataSet,
        "responsive": true,
        "autoWidth": false,
        language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
        "columnDefs": [ {
            "targets": -1,
            "orderable": false
        }]
    });
    $('.toastrDefaultSuccess').click(function() {
      toastr.success('{{ __('text.eliminadoSucesso') }}')
    });

    $('.toastrDefaultSuccess1').click(function() {
      toastr.success('{{ __('text.editadoSucesso') }}')
    });
  });
  function elim(id){
        $('#eliminar').attr('action', '/operadores/'+id);
        $('#modal-default').modal('show');
    }

    function info(info,modal) {
        if(modal){
            $('#modal-default2').modal('show');
            $('#nome').text(info.nome);
            $('#email').text(info.email);
            $('#perfil').text(info.perfil.perfil);
            $('#dataCriacao').text(info.data_criação);
            $('#dataEliminacao').text(info.data_eliminação);
            $('#observacoes').text(info.observacoes);
        }else{
            $('#edit').attr('action', '/operadores/'+info.id);
            $('#modal-default1').modal('show');
            $('#novoCargoOperador').val(info.perfil.perfil);
        }
        console.dir(info);
        console.dir(modal);
    }

</script>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
@stop
