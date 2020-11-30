@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          Adicionar produto
        </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item "><a href="/produtos">Produtos</a></li>
          <li class="breadcrumb-item active">Adicionar</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="card-body" style="display: block;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo</label>
                            <select class="form-control" id="selectEscolha">
                                <option selected="selected" value="0">Químico</option>
                                <option value="1">Não Químico</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sinónimos</label>
                            <input type="text" class="form-control" id="" placeholder="Digite os sinónimos...">
                        </div>
                        <div class="form-group">
                            <label>Unidade</label>
                            <input type="text" class="form-control" id="" placeholder="Digite a unidade...">
                        </div>
                        <!-- display none - lado esquerdo -->
                        <div class="quimico" style="display:block;">
                            <div class="form-group">
                                <label>Fórmula</label>
                                <input type="text" class="form-control" id="" placeholder="Digite a fórmula...">
                            </div>

                            <div class="form-group">
                                <label>Peso Molecular</label>
                                <input type="text" class="form-control" id="" placeholder="Digite o peso molecular...">
                            </div>

                            <div class="form-group">
                                <label>Nº CAS</label>
                                <input type="text" class="form-control" id="" placeholder="Digite o Nº CAS...">
                            </div>

                            <div class="form-group">
                                <label>Condição de armazenamento</label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Digite a condição de armazenamento...">
                            </div>
                        </div>

                        <div class="naoQuimico" style="display:none;">
                            <div class="form-group">
                                <label for="exampleInputFile">Fotografia</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Escolha a
                                            fotografia</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!--  LADO DIREITO -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Designação</label>
                            <input type="text" class="form-control" id="" placeholder="Digite a designação...">
                        </div>

                        <div class="form-group">
                            <label>Stock minimo</label>
                            <input type="text" class="form-control" id="" placeholder="Digite o stock minimo...">
                        </div>

                        <!-- display none - lado direito -->
                        <div class="quimico1" style="display:block;">
                            <div class="form-group">
                                <label>Anexos SDS</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Escolha o anexo
                                            SDS</label>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">

                                <label>Pictogramas</label>
                                <select class="select2 select2-hidden-accessible" id="selectPictograma"
                                    multiple="multiple" data-placeholder="Select a State" style="width: 100%;"
                                    data-select2-id="7" tabindex="-1" aria-hidden="true">
                                    <option data-select2-id="29">Pictograma 1</option>
                                    <option data-select2-id="30">Pictograma 2</option>
                                    <option data-select2-id="31">Pictograma 3</option>
                                    <option data-select2-id="32">Pictograma 4</option>
                                    <option data-select2-id="33">Pictograma 5</option>
                                    <option data-select2-id="34">Pictograma 6</option>
                                    <option data-select2-id="35">Pictograma 7</option>
                                </select><span
                                    class="select2 select2-container select2-container--default select2-container--below"
                                    dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--multiple" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                            aria-disabled="false">
                                            <ul class="select2-selection__rendered">
                                                <li class="select2-selection__choice" title="California"
                                                    data-select2-id="74"><span class="select2-selection__choice__remove"
                                                        role="presentation">×</span>California</li>
                                                <li class="select2-selection__choice" title="Delaware"
                                                    data-select2-id="75"><span class="select2-selection__choice__remove"
                                                        role="presentation">×</span>Delaware</li>
                                                <li class="select2-search select2-search--inline"><input
                                                        class="select2-search__field" type="search" tabindex="0"
                                                        autocomplete="off" autocorrect="off" autocapitalize="none"
                                                        spellcheck="false" role="searchbox" aria-autocomplete="list"
                                                        placeholder="" style="width: 0.75em;"></li>
                                            </ul>
                                        </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                            </div>





                            <div class="form-group">
                                <label>Código de recomendação de prudência</label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Digite o código de recomendação...">
                            </div>

                            <div class="form-group">
                                <label>Código de advertência de perigo</label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Digite o código de advertência...">
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="">
                                <label>Ventilado</label>
                            </div>

                        </div>

                        <div class="naoQuimico1" style="display:none;">
                            <div class="form-group">
                                <label>Familia</label>
                                <input type="text" class="form-control" id="" placeholder="Digite a família...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary"
                        onclick="window.location.href='/produtos'">Cancelar</button>
                </span>
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-primary">Submeter</button>
                </span>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
    <script src="/js/adicionar.js"></script>

    <script>
        $(document).ready(function () {
            $('selectPictograma').select2();
        });
    </script>

@stop