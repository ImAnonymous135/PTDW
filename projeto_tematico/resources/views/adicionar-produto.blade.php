@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          Produtos
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
                  <label>Nome do produto</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome...">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Peso molecular</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o peso molecular...">                
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Anexos para SDS</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite os anexos para SDS...">                
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Fórmula</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a fórmula...">                
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Condições de armazenamento</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite as condições de armazenamento...">          
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Stock Minimo</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o stock minimo...">          
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Tipo</label>
                  <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="14">Químico</option>
                    <option>Não Químico</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <div class="form-check">
                    <br/>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Armário ventilado</label>
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <button type="button" class="btn btn-block btn-outline-primary" onclick="window.location.href='/produtos'">Cancelar</button>
                  </span>
                  <span class="mr-2">
                    <button type="button" class="btn btn-block btn-primary">Submeter</button>
                  </span>
                </div>
            <!-- /.row -->
          </div>
</div>
@stop