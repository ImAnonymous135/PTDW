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
        <a data-mfb-label= "{{ __('text.novoProduto') }}" class="mfb-component__button--main" href="./produtos/adicionar">
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
                    <th>{{ __('text.tipo') }}</th>
                    <th>{{ __('text.acoes') }}</th>
                </tr>
            </thead>
            <tbody>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
@if(null !== session()->get( 'toast' ))
        @if(session()->get( 'toast' )== 'editSuccess')
            toastr.success('{{ __('text.editadoSucesso') }}')
        @elseif(session()->get( 'toast' ) == 'deleteSuccess')
            toastr.success('{{ __('text.eliminadoSucesso') }}')
        @elseif(session()->get( 'toast' ) == 'error')
            toastr.error('{{ __('text.erro') }}')
        @else
            toastr.success('{{ __('text.addSuccess') }}')
        @endif
    @endif

</script>
<script>
    dataSet = [];

    var json = JSON.parse('<?php echo $produtos?>');

    function isQuimicoTexto(isQuimico) {
        if (isQuimico == 1) {
            return "<?php echo __('text.quimico') ?>";
        }
        return "<?php echo __('text.solido') ?>";
    }

    @foreach ($produtos as $produto ) {
        //dd($produto);
        dataSet.push([
            "{{$produto->designacao}}",
            "{{$produto->stock_existente}}",
            isQuimicoTexto("{{$produto->is_quimico}}"),
            '<div class="btn-group"><a href="./produtos/{{$produto->id}}" type="button" data-toggle="tooltip" title="{{ __('text.detalhes') }}" class="btn btn-primary"><i class="fas fa-eye"></i></a><a href="./entradas/{{$produto->id}}" type="button" data-toggle="tooltip" title="{{ __('text.novaEntrada') }}" class="btn btn-success"><i class="fas fa-plus"></i></a></div>'
            ]);
    }
    @endforeach

    function setLang() {
        if ('<?php echo Config::get("app.locale") ?>' == "pt") {
                return '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
            } else if ('<?php echo Config::get("app.locale") ?>' == "en") {
                return '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json'
            }
    }

    $(function () {
    $('#table').DataTable({
        data: dataSet,
        "responsive": true,
        "autoWidth": false,
        "ordering": false,
        language: {
                url: setLang()
        }
    });
  });
</script>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
@stop
