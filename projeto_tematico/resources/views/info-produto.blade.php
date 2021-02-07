@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{$produto->designacao}}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item"><a href="../produtos">{{ __('text.produtos') }}</a></li>
          <li class="breadcrumb-item active">{{ __('text.nomeProduto') }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop

@section('content')

<ul id="menu" class="mfb-component--br mfb-slidein" data-mfb-toggle="hover">
  <li class="mfb-component__wrap">
    <a href="../entradas/{{$produto->id}}" data-mfb-label="Nova entrada" class="mfb-component__button--main">
      <i class="mfb-component__main-icon--resting fas fa-plus" style="font-size: 1.5rem;"></i>
    </a>
  </li>
</ul>

<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-header">
        <h3>{{ __('text.informacaoProduto') }}</h3>
      </div>
      <div class="card-body">
        <div>
          @if ($produto->is_quimico)
          <p class="font-weight-bold mb-0">{{ __('text.formula') }}: <span
              class="font-weight-normal">{{$produto->quimico->formula}}</span></p>
          <p class="font-weight-bold mb-0">{{ __('text.pesoMolecular') }}: <span
              class="font-weight-normal">{{$produto->quimico->pMolecular}} g/mol</span></p>
          <p class="font-weight-bold mb-0">CAS Nº: <span class="font-weight-normal">{{$produto->quimico->casN}}</span>
          </p>
          <p class="font-weight-bold mb-0">{{ __('text.condicoesArmazenamento') }}: <span
              class="font-weight-normal">{{$produto->quimico->condicaoArmazenamento}}</span></p>
          <p class="font-weight-bold mb-0">{{ __('text.armarioVentilado') }}: <span class="font-weight-normal">
              @if ($produto->quimico->ventilado)
              {{ __('text.sim') }}
              @else
              {{ __('text.nao') }}
              @endif

            </span></p>
          @endif

          <p class="font-weight-bold mb-1">{{ __('text.unidades') }}: <span
              class="font-weight-normal">{{$produto->unidades->desginacao}}</span></p>
          <p class="font-weight-bold mb-1">{{ __('text.stockExistente') }}: <span
              class="font-weight-normal">{{$produto->stock_existente}}</span></p>
          <p class="font-weight-bold mb-1">{{ __('text.stockMinimo') }}: <span
              class="font-weight-normal">{{$produto->stock_minimo}}</span></p>

          @if ($produto->is_quimico)
          <p class="font-weight-bold mb-1">{{ __('text.recomendacoesPrudencias') }}: <span
              class="font-weight-normal"></span></p>
          <p class="font-weight-bold mb-1">{{ __('text.advertenciaPerigos') }}: <span class="font-weight-normal"></span>
          </p>
          <p class="font-weight-bold mb-3">{{ __('text.pictogramas') }}:</p>
          <div>
            @foreach ($produto->quimico->quimico_pictogramas as $pictograma)
            <img class="pictogramas" src="{{$pictograma->pictogramas->imagem}}" alt=""
            srcset="" width="100px" height="100px">
            @endforeach
          </div>
          @else
          <p class="font-weight-bold mb-1">{{ __('text.familia') }}: <span
              class="font-weight-normal">{{$produto->nao_quimico->familia->designacao}}</span></p>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-header">
        <h3>{{ __('text.armazenamento') }}</h3>
      </div>
      <div class="card-body">
        <div>
          <table id="table" class="table table-head-fixed">
            <thead>
              <tr>
                <th>{{ __('text.embalagem') }}</th>
                <th>{{ __('text.localizacao') }}</th>
                <th>{{ __('text.capacidadeEmbalagem') }}</th>
                <th>{{ __('text.dataAbertura') }}</th>
                <th>{{ __('text.termino') }}</th>
              </tr>
            </thead>
            <tbody>
              </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

@endsection

@section('css')
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
@stop

@section('js')
<script src="{{ asset('css/mfb.css') }}"></script>

<script>
  json = JSON.parse('<?php echo $embalagens ?>');
  console.log(json);
  dataSet = [];


  function dataAbertura(data, eID) {
    if (data == null) {
      return '<a href="../produtos/abertura/' + eID + '" type="button" data-toggle="tooltip" class="btn btn-primary">{{ __('text.registarAbertura') }}</a>';
    }
    return data;
  }

  function terminar(dataAbertura, dataTermino, produto, embalagem) {
    if (dataAbertura == null )  {
      return '<button type="button" data-toggle="tooltip" class="btn btn-primary" disabled>{{ __('text.termino') }}</button>';
    } else if (dataTermino != null) {
      return dataTermino;
    }
    return '<a href="../saidas/'+produto+'/'+embalagem+'" type="button" data-toggle="tooltip" class="btn btn-primary">{{ __('text.termino') }}</a>';
  }

  json.forEach(e => {
    dataSet.push([
      e.embalagem,
      e.cliente+"-"+e.armario+"-"+e.prateleira,
      e.capacidade+" "+"{{$produto->unidades->desginacao}}",
      dataAbertura(e.data_abertura, e.embalagemid),
      terminar(e.data_abertura, e.data_termino, "{{ $produto->id }}", e.embalagem)
    ]);
  });


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
        "order": [[ 2, "asc" ]],
        language: {
                url: setLang()
        }
    });
  });
</script>

@endsection
