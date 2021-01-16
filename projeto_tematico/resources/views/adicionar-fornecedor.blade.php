@extends('adminlte::page')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">
                    {{ __('text.adicionarFornecedor') }}
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../">Home</a></li>
                    <li class="breadcrumb-item "><a href="../fornecedores">{{ __('text.fornecedor') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('text.add') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<form method="POST" action="/fornecedores/adicionar">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{ __('text.designacao') }}</label>
                        <input type="text" class="form-control @error('designacao') is-invalid @enderror"
                            name="designacao" id="designacao" value={{old('designacao')}}>
                        @error('designacao')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{ __('text.morada') }}</label>
                        <input type="text" class="form-control @error('morada') is-invalid @enderror" name="morada"
                            id="morada" value={{old('morada')}}>
                        @error('morada')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{ __('text.localizacao') }}</label>
                        <input type="text" class="form-control @error('localidade') is-invalid @enderror"
                            name="localidade" id="localidade" value={{old('localidade')}}>
                        @error('localidade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.codigoPostal') }}</label>
                        <input type="text" class="form-control @error('codigo_postal') is-invalid @enderror"
                            name="codigo_postal" id="codigo_postal" value={{old('codigo_postal')}}>
                        @error('codigo_postal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.telefone') }}</label>
                        <input type="text" class="form-control  @error('telefone') is-invalid @enderror" name="telefone"
                            id="telefone" value={{old('telefone')}}>
                        @error('telefone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>NIF</label>
                        <input type="text" class="form-control @error('nif') is-invalid @enderror" name="nif" id="nif" value={{old('nif')}}>
                        @error('nif')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" value={{old('email')}}>
                        @error('email')
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
                        <label>{{ __('text.vendedor') }} 1</label>
                        <input type="text" class="form-control" name="vendedor_1" id="vendedor_1" value={{old('vendedor_1')}}>

                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.telefone') }} 1</label>
                        <input type="text" class="form-control " name="telemovel_1" id="telemovel_1" value={{old('telemovel_1')}}>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>E-Mail 1</label>
                        <input type="text" class="form-control @error('email_1') is-invalid @enderror" name="email_1"
                            id="email_1" value={{old('email_1')}}>
                        @error('email_1')
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
                        <label>{{ __('text.vendedor') }} 2</label>
                        <input type="text" class="form-control" name="vendedor_2" id="vendedor_2" value={{old('vendedor_2')}}>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>{{ __('text.telefone') }} 2</label>
                        <input type="text" class="form-control " name="telemovel_2" id="telemovel_2" value={{old('telemovel_2')}}>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>E-Mail 2</label>
                        <input type="text" class="form-control @error('email_2') is-invalid @enderror" name="email_2"
                            id="email_2" value={{old('email_2')}}>
                        @error('email_2')
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
                        <label>{{ __('text.condicoesEspeciais') }}</label>
                        <input type="text" class="form-control" name="condicoes_especiais" id="condicoes_especiais" value={{old('condicoes_especiais')}}>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>{{ __('text.observacoes') }}</label>
                        <textarea class="form-control" name="observacoes" id="observacoes" cols="30" rows="4"
                            maxlength="100">{{old('observacoes')}}</textarea>
                    </div>
                </div>
            </div>

            <div>
                <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                        <button type="button" class="btn btn-block btn-outline-primary"
                            onclick="window.location.href='../fornecedores'">{{ __('text.cancelar') }}</button>
                    </span>
                    <span class="mr-2">
                        <button type="submit" class="btn btn-block btn-primary">{{ __('text.submeter') }}</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
<br>
@stop

@section('js')


@stop