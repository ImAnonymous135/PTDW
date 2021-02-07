@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    {{ __('text.adicionarCliente') }}
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    <li class="breadcrumb-item "><a href="../clientes">{{ __('text.clientes') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('text.add') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

<style>
    #alert-box {
        /*display:block;*/
        position: fixed;
        width: 300px;
        padding: 5px 20px 20px;
        background: #ddd;
        border: 1px solid #999;
        text-align: center;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        z-index: 99999;
        -webkit-box-shadow: 0px 0px 33px -6px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 0px 33px -6px rgba(0, 0, 0, 0.59);
        box-shadow: 0px 0px 33px -6px rgba(0, 0, 0, 0.59);
    }
</style>
@if(\Session::has('msg'))


<script>
    let msg_alerta = '<div id="alert-box" style="display:block;">'
+'<h1>Aviso</h1>'
+'<p>{!! \Session::get("msg") !!}</p>'
+'<input style="padding:5px 10px;" type="button" value="OK" onClick="togglePopup();" />'
+'</div>';
document.write(msg_alerta);


function togglePopup() {
    if (document.getElementById('alert-box').style.display == 'block') {
        document.getElementById('alert-box').style.display = 'none';
    }
}

</script>
@endif
<div class="card">
    <div class="card-body">
        <form method="POST" action="../clientes/adicionar">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{ __('text.designacao') }}</label>
                        <input type="text" class="form-control @error('designacao') is-invalid @enderror"
                            id="designacao" name="designacao" value={{old('designacao')}}>
                        @error('designacao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.nomeResponsavel') }}</label>
                        <select class="select-search form-control @error('nomeResponsavel') is-invalid @enderror" id="select-operador" name="nomeResponsavel">
                            <option value=""></option>
                            @foreach ($operadores as $operador)
                            <option value="{{$operador->nome}}">{{$operador->nome}}</option>
                            @endforeach
                        </select>
                        @error('nomeResponsavel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.emailResponsavel') }}</label>
                        <input type="text" class="form-control disabled" id="mail-operador" name="emailResponsavel" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.nomeSolicitante') }}</label>
                        <select class="select-search form-control @error('nomeSolicitante') is-invalid @enderror" id="select-solicitante" name="nomeSolicitante">
                            <option value=""></option>
                            @foreach ($solicitantes as $solicitante)
                            <option value="{{$solicitante->nome}}">{{$solicitante->nome}}</option>
                            @endforeach
                        </select>
                        @error('nomeSolicitante')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>{{ __('text.emailSolicitante') }}</label>
                        <input type="text" class="form-control" id="mail-solicitante" name="emailSolicitante" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{ __('text.observacoes') }}</label>
                        <textarea class="form-control" id="observacoes" name="observacoes" cols="30" rows="4"
                            maxlength="100">{{old('observacoes')}}</textarea>
                    </div>
                </div>
            </div>
            <div>
                <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                        <button type="button" class="btn btn-block btn-outline-primary"
                            onclick="window.location.href='../clientes'">{{ __('text.cancelar') }}</button>
                    </span>
                    <span class="mr-2">
                        <button type="submit" class="btn btn-block btn-primary">{{ __('text.submeter') }}</button>
                    </span>
                </div>
            </div>
        </form>
    </div>

</div>
<br>
@stop

@section('js')
<script>

    jsonOps = JSON.parse('<?php echo $operadores ?>');
    jsonSol = JSON.parse('<?php echo $solicitantes ?>');

    $(document).ready(function() {
            $('#select-operador').select2({
                placeholder: "Nome..."
            });
            $('#select-solicitante').select2({
                placeholder: "Nome..."
            });
            $('#select-operador').change(function (e) { 
                jsonOps.forEach(o => {

                    if (o.nome == $('#select-operador').val()) {
                        $('#mail-operador').val(o.email); 
                    }
                });
            });
            $('#select-solicitante').change(function (e) { 
                jsonSol.forEach(s => {
                    if (s.nome == $('#select-solicitante').val()) {
                        $('#mail-solicitante').val(s.email); 
                    }
                });                
            });
        });
</script>
@stop