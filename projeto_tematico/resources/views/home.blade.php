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
                <h3>{{$cards['produtos']}}</h3>
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
                <h3>{{$cards['clientes']}}</h3>
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
                <h3>{{$cards['operadores']}}</h3>
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
                <h3>{{$cards['fornecedores']}}</h3>
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
                            <th>{{ __('text.produto') }}</th>
                            <th>{{ __('text.stockExistente') }}</th>
                            <th>{{ __('text.tipo') }}</th>
                            <th>{{ __('text.acoes') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        
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
                            <th>{{ __('text.capacidadeEmbalagem') }}</th>
                            <th>{{ __('text.data') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        
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

    //produtos
    produtosData = [];
    json = JSON.parse('<?php echo $produtos ?>');  

    json.forEach(e => {
        produtosData.push([
            e.designacao,
            e.stock_existente,
            e.is_quimico ? "<?php echo __('text.quimico') ?>" : "<?php echo __('text.solido') ?>",
            '<div class="btn-group"><a href="./produtos/'+e.id+'" type="button" data-toggle="tooltip" title="{{ __('text.detalhes') }}" class="btn btn-primary"><i class="fas fa-eye"></i></a><a href="./entradas/'+e.id+'" type="button" data-toggle="tooltip" title="{{ __('text.novaEntrada') }}" class="btn btn-success"><i class="fas fa-plus"></i></a></div>'
        ]);
    });

    $(function () {
    $('#table2').DataTable({
        data: produtosData,
        "responsive": true,
        "autoWidth": false,
        "ordering": false,
        "order": [[ 1, "asc" ]],
        language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        }
    });
  });
    //saidas
    movimentosData = [];
    json = JSON.parse('<?php echo $movimentos ?>');  
    console.log(json);

    json.forEach(e => {
        movimentosData.push([
            e.produto,
            e.capacidade,
            e.sala+'-'+e.armario+'-'+e.prateleira,
            e.data
        ]);
    });
    
    $(function () {
      $('#table').DataTable({
          data: movimentosData,
          "responsive": true,
          "autoWidth": false,
          language: {
              url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
            },
        });
    });
   
</script>
@endsection
