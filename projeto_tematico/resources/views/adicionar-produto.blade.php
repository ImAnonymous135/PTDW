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
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item "><a href="./produtos">Produtos</a></li>
                    <li class="breadcrumb-item active">Adicionar</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Tipo</label>
                    <select class="form-control" id="selectTipo">
                        <option selected="selected" value="0">Químico</option>
                        <option value="1">Não Químico</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Designação</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite a designação...">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Sinónimos</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite os sinónimos...">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Unidades</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="#" placeholder="Digite a quantidade de unidades...">
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Stock minimo</label>
                    <input type="text" class="form-control" id="#" placeholder="Digite o stock minimo...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="quimico" style="display:block;">
                    <div class="form-group">
                        <label>Peso Molecular</label>
                        <input type="text" class="form-control" id="#" placeholder="Digite o peso molecular...">
                    </div>
                </div>
                <div class="naoQuimico1" style="display:none;">
                    <div class="form-group">
                        <label>Familia</label>
                        <input type="text" class="form-control" id="" placeholder="Digite a família...">
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="quimico1" style="display:block;">
                    <div class="form-group">
                        <label>Condição de armazenamento</label>
                        <input type="text" class="form-control" id="#"
                            placeholder="Digite a condição de armazenamento...">
                    </div>

                </div>
                <div class="naoQuimico" style="display:none;">
                    <div class="form-group">
                        <label for="exampleInputFile">Fotografia</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Escolha
                                    afotografia</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-sm-2">
                <div class="quimico2" style="display:block;">
                    <div class="form-group">
                        <label>Fórmula</label>
                        <input type="text" class="form-control" id="#" placeholder="Digite a fórmula...">
                    </div>

                </div>
            </div>

            <div class="col-sm-2">
                <div class="quimico3" style="display:block;">
                    <div class="form-group">
                        <label>Nº CAS</label>
                        <input type="text" class="form-control" id="#" placeholder="Digite o Nº CAS...">
                    </div>

                </div>
            </div>

            <div class="col-sm-4">
                <div class="quimico4" style="display:block;">
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="quimico7" style="display:block;">
                    <div class="form-group">
                        <label>Código de advertência de perigo</label>
                        <input type="text" class="form-control" id="" placeholder="Digite o código de advertência...">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="quimico5" style="display:block;">
                    <div class="form-group">
                        <label>Código de recomendação de prudência</label>
                        <input type="text" class="form-control" id="" placeholder="Digite o código de recomendação...">
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="quimico8" style="display:block;">
                    <div class="form-group">
                        <div class="form-check align-middle">
                            <input type="checkbox" class="form-check-input" id="ventilado">
                            <label for="ventilado">Ventilado</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row quimico9">
            <img id="skull" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS06_skull.png" alt=""
                srcset="" width="100px" height="100px">
            <img id="danger" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS01_explos.png" alt=""
                srcset="" width="100px" height="100px">
            <img id="flame" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS02_flamme.png" alt=""
                srcset="" width="100px" height="100px">
            <img id="oxi" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS03_rondflam.png" alt=""
                srcset="" width="100px" height="100px">
            <img id="gas" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS04_bottle.png" alt=""
                srcset="" width="100px" height="100px">
            <img id="corrosive" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS05_acid_red.png"
                alt="" srcset="" width="100px" height="100px">
            <img id="warning" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS07_exclam.png"
                alt="" srcset="" width="100px" height="100px">
            <img id="helth" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS08_silhouete.png"
                alt="" srcset="" width="100px" height="100px">
            <img id="nature" class="pictogramas" src="https://www.reach-compliance.ch/downloads/GHS09_aq-pollut.png"
                alt="" srcset="" width="100px" height="100px">
        </div>

        <div>
            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary"
                        onclick="window.location.href='./produtos'">Cancelar</button>
                </span>
                <span class="mr-2">
                    <button type="button" class="btn btn-block btn-primary">Submeter</button>
                </span>
            </div>
        </div>
    </div>
</div>
<br>
@stop

@section('js')
<script src="{{ asset('js/adicionar.js') }}"></script>
<script src="{{ asset('js/jquery.imgcheckbox.js') }}"></script>

<script>
    $(".pictogramas").imgCheckbox();
</script>
@stop