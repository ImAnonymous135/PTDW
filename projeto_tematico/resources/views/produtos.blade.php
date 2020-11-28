@extends('adminlte::page')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<div class="card">
  <div class="card-header">
    <button type="button" class="btn btn-sm btn-block btn-primary float-left" style="width: 100px">Adicionar</button>
    <div class="card-tools">
      <div class="input-group input-group-sm" style="width: 150px;">
        
        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        <div class="input-group-append">
          <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="height: 500px;">
    <table class="table table-head-fixed">
      <thead>
        <tr>
          <th>Designação</th>
          <th>Sala</th>
          <th>Localização</th>
          <th>Tipo</th>
          <th>Inventário</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>183</td>
          <td>John Doe</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-success">Approved</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>219</td>
          <td>Alexander Pierce</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-warning">Pending</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>657</td>
          <td>Bob Doe</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-primary">Approved</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>175</td>
          <td>Mike Doe</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-danger">Denied</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>134</td>
          <td>Jim Doe</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-success">Approved</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>494</td>
          <td>Victoria Doe</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-warning">Pending</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>832</td>
          <td>Michael Doe</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-primary">Approved</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
        <tr>
          <td>982</td>
          <td>Rocky Doe</td>
          <td>11-7-2014</td>
          <td><span class="tag tag-danger">Denied</span></td>
          <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@stop