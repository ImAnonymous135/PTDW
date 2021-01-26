@extends('adminlte::page')

@section('content')
<section class="content">
    <div class="error-page">
      <h2 class="headline text-warning"> 404</h2>

      <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

        <p>
            {{ __('text.404') }} <a href="./">{{ __('text.retornar') }}</a>.
        </p>
        
      </div>
      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@endsection