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
                <select id="selectEscolha" class="form-control select2 select2-danger select2-hidden-accessible"
                    data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1"
                    aria-hidden="true">
                    <option selected="selected" value="0">Químico</option>
                    <option value="1">Não Químico</option>
                </select>
            </div>

            <div class="form-group">
                <label>Sinónimos</label>
                <input type="email" class="form-control" id="" placeholder="Digite os sinónimos...">
            </div>
            <div class="form-group">
                <label>Unidade</label>
                <input type="email" class="form-control" id="" placeholder="Digite a unidade...">
            </div>
            <!-- display none - lado esquerdo -->
            <div class="quimico" style="display:block;">
                <div class="form-group">
                    <label>Fórmula</label>
                    <input type="email" class="form-control" id="" placeholder="Digite a fórmula...">
                </div>

                <div class="form-group">
                    <label>Peso Molecular</label>
                    <input type="email" class="form-control" id="" placeholder="Digite o peso molecular...">
                </div>

                <div class="form-group">
                    <label>Nº CAS</label>
                    <input type="email" class="form-control" id="" placeholder="Digite o Nº CAS...">
                </div>

                <div class="form-group">
                    <label>Condição de armazenamento</label>
                    <input type="email" class="form-control" id="" placeholder="Digite a condição de armazenamento...">
                </div>
            </div>

            <div class="naoQuimico" style="display:none;">
            <div class="form-group">
                    <label for="exampleInputFile">Fotografia</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Escolha a fotografia</label>
                        </div>
                    </div>
                </div>
              </div>


        </div>

        <!--  LADO DIREITO -->
        <div class="col-md-6">
            <div class="form-group">
                <label>Designação</label>
                <input type="email" class="form-control" id="" placeholder="Digite a designação...">
            </div>

            <div class="form-group">
                <label>Stock minimo</label>
                <input type="email" class="form-control" id="" placeholder="Digite o stock minimo...">
            </div>

            <!-- display none - lado direito -->
            <div class="quimico1" style="display:block;">
                <div class="form-group">
                    <label>Anexos SDS</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Escolha o anexo SDS</label>
                        </div>
                    </div>
                </div>



                <div class="form-group">


                    <label>Pictogramas</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Escolh os pictogramas</label>
                        </div>

                        
                    </div>





                    <div class="form-group">
                        <label>Código de recomendação de prudência</label>
             
                        <input type="email" class="form-control" id="" placeholder="Digite o código de recomendação...">

                    </div>

                    

                    <div class="form-group">
                        <label>Código de advertência de perigo</label>
                        <input type="email" class="form-control" id="" placeholder="Digite o código de advertência...">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="">
                        <label>Ventilado</label>
                    </div>

                </div>
            </div>
            <div class="naoQuimico1" style="display:none;">
                <div class="form-group">
                    <label>Familia</label>
                    <input type="email" class="form-control" id="" placeholder="Digite a família...">
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
@stop

@section('js')
    <script src="/js/adicionar.js"></script>
@stop