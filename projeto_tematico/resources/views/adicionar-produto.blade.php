@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    {{ __('text.adicionarProduto') }}
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    <li class="breadcrumb-item "><a href="../produtos">{{ __('text.produtos') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('text.add') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<form id="form" method="post" action="../produtos/adicionar">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.tipo') }}</label>
                        <select class="form-control" id="selectTipo" name="selectTipo">
                            <option selected="selected" value="0">Químico</option>
                            <option value="1">Não Químico</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{ __('text.designacao') }}</label>
                        <input name="designacao" id="designacao" type="text"
                            class="form-control @error('designacao') is-invalid @enderror">
                        @error('designacao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.sinonimos') }}</label>
                        <input disabled type="text" class="form-control" id="sinonimos" name="sinonimos">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.unidades') }}</label>
                        <div class="input-group">
                            <input type="text" class="form-control @error('unidades') is-invalid @enderror"
                                id="unidades" name="unidades">
                        </div>
                        @error('unidades')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.stockMinimo') }}</label>
                        <input name="stockMinimo" id="stockMinimo" type="text"
                            class="form-control @error('stockMinimo') is-invalid @enderror">
                        @error('stockMinimo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="quimico" style="display:block;">
                        <div class="form-group">
                            <label>{{ __('text.pesoMolecular') }}</label>
                            <input type="text" class="form-control @error('pesoMolecular') is-invalid @enderror"
                                id="pesoMolecular" name="pesoMolecular">
                            @error('pesoMolecular')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="naoQuimico1" style="display:none;">
                        <div class="form-group">
                            <label>Familia</label>
                            <input type="text" class="form-control @error('familia') is-invalid @enderror" id="familia"
                                name="familia">
                            @error('familia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="quimico1" style="display:block;">
                        <div class="form-group">
                            <label>{{ __('text.condicoesArmazenamento') }}</label>
                            <input type="text"
                                class="form-control @error('condicoesArmazenamento') is-invalid @enderror"
                                id="condicoesArmazenamento" name="condicoesArmazenamento">
                            @error('condicoesArmazenamento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="naoQuimico" style="display:none;">
                        <div class="form-group">
                            <label for="exampleInputFile">Fotografia</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @error('fotografia') is-invalid @enderror"
                                        id="fotografia" name="fotografia">
                                    <label class="custom-file-label" for="exampleInputFile">Escolha
                                        a fotografia</label>
                                </div>
                            </div>
                            @error('fotografia')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-sm-2">
                    <div class="quimico2" style="display:block;">
                        <div class="form-group">
                            <label>{{ __('text.formula') }}</label>
                            <input type="text" class="form-control @error('formula') is-invalid @enderror" id="formula"
                                name="formula">
                            @error('formula')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="quimico3" style="display:block;">
                        <div class="form-group">
                            <label>Nº CAS</label>
                            <input type="text" class="form-control @error('nCas') is-invalid @enderror" id="nCas"
                                name="nCas">
                            @error('nCas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="quimico4" style="display:block;">
                        <div class="form-group">
                            <label>{{ __('text.anexo') }} SDS</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input disabled type="file"
                                        class="custom-file-input @error('anexo') is-invalid @enderror" id="anexo"
                                        name="anexo">
                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                </div>
                            </div>
                            @error('anexo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="quimico7" style="display:block;">
                        <div class="form-group">
                            <label>{{ __('text.codigoPerigo') }}</label>
                            <input type="text" class="form-control" disabled id="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="quimico5" style="display:block;">
                        <div class="form-group">
                            <label>{{ __('text.codigoPrudencia') }}</label>
                            <input type="text" class="form-control" disabled id="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="quimico8" style="display:block;">
                        <div class="form-group">
                            <div class="form-check align-middle">
                                <input type="checkbox" class="form-check-input" id="ventilado" name="ventilado">
                                <label for="ventilado">{{ __('text.ventilado') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <label class="quimico10">{{ __('text.pictogramas') }}</label>
            <div class="row quimico9">
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="skull" id="skull">
                    <label for="skull"><img src="https://www.reach-compliance.ch/downloads/GHS06_skull.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="explosive" id="explosive">
                    <label for="explosive"><img src="https://www.reach-compliance.ch/downloads/GHS01_explos.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="flame" id="flame">
                    <label for="flame"><img src="https://www.reach-compliance.ch/downloads/GHS02_flamme.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="flame2" id="flame2">
                    <label for="flame2"><img src="https://www.reach-compliance.ch/downloads/GHS03_rondflam.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="bottle" id="bottle">
                    <label for="bottle"><img src="https://www.reach-compliance.ch/downloads/GHS04_bottle.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="acid" id="acid">
                    <label for="acid"><img src="https://www.reach-compliance.ch/downloads/GHS05_acid_red.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="danger" id="danger">
                    <label for="danger"><img src="https://www.reach-compliance.ch/downloads/GHS07_exclam.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="lungs" id="lungs">
                    <label for="lungs"><img src="https://www.reach-compliance.ch/downloads/GHS08_silhouete.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
                <div class="picto-holder">
                    <input class="picto-input" type="checkbox" name="pollution" id="pollution">
                    <label for="pollution"><img src="https://www.reach-compliance.ch/downloads/GHS09_aq-pollut.png" alt="" srcset=""
                            width="100px" height="100px"></label>
                </div>
            </div>

            <div>
                <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                        <button type="button" class="btn btn-block btn-outline-primary"
                            onclick="window.location.href='../produtos'">{{ __('text.cancelar') }}</button>
                    </span>
                    <span class="mr-2">
                        <input type="submit" class="btn btn-block btn-primary"></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
<br>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/pictogramas.css') }}">
@endsection

@section('js')
<script src="{{  asset('js/adicionar.js') }}"> </script>
@stop
