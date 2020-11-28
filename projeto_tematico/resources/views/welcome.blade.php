@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Default Card Example</h3>
          <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Label</span>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          The body of the card
          <button class="btn btn-block btn-default">Default</button>
                </div>
        <!-- /.card-body -->
        <div class="card-footer">
          The footer of the card
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
@stop

