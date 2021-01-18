@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ __('text.entradas') }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item active">{{ __('text.movimentosNaoQuimicos') }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@stop

@section('content')

@include('sub-views.export-button')


<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label class="font-weight-normal">{{ __('text.periodoEntrada') }}:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
            </div>
            <input type="text" class="form-control float-right" id="reservation">
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label class="font-weight-normal">{{ __('text.tipoEmbalagem') }}:</label>
          <div class="input-group-prepend">
            <select id="select2" class="select2 form-control" name="subfamilia[]" multiple="multiple">
              @foreach($tipos as $tipo)
              <option value="{{$tipo->tipo_embalagem}}">{{$tipo->tipo_embalagem}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>

    <table id="table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>{{ __('text.produto') }}</th>
          <th>{{ __('text.localizacao') }}</th>
          <th>{{ __('text.fornecedor') }}</th>
          <th>{{ __('text.marca') }}</th>
          <th>{{ __('text.tipoEmbalagem') }}</th>
          <th>{{ __('text.cor') }}</th>
          <th>{{ __('text.pesoBruto') }}</th>
          <th>{{ __('text.dataEntrada') }}</th>
          <th>{{ __('text.dataValidade') }}</th>
        </tr>
      </thead>
      <tbody>
        </tfoot>
    </table>
  </div>
</div>
<br>
<br>
<br>
@stop

@section('js')
<script src="{{ asset('js/mfb.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
  var dataSet = [];
  @foreach( $produtos as $produto)
  dataSet.push(["{{$produto->movimento->embalagem->produto->designacao}}",
  "{{$produto->movimento->embalagem->localizacao}}",
  "{{$produto->movimento->fornecedor->designacao}}",
  "{{$produto->movimento->marca}}",
  "{{$produto->tipo_embalagem->tipo_embalagem}}",
  "{{$produto->cor->cor}}",
  "{{$produto->movimento->peso_bruto}}",
  "{{$produto->movimento->data_entrada}}",
  "{{$produto->movimento->data_validade}}"]);
  @endforeach
  $(function () {
    $('.select2').select2()
      var table = $('#table').DataTable({
        data: dataSet,
        "responsive": true,
        "autoWidth": false,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json'
        },
      });

      var daterangepicker = $('#reservation').daterangepicker({
        autoUpdateInput: false,
        locale:{
          format: 'DD/MM/YYYY',
          cancelLabel: 'Clear'
        }
    });

      $('#select2').on('select2:select select2:unselect', function (ev) {
        console.log(ev.type);  
        $.fn.dataTable.ext.search.push(
          function (oSettings, aData, iDataIndex) {
            var values = $('#select2').val();
            if(values.length == 0){
              return true;
            }else{
              return values.includes(aData[4]);
            }
            }
        );
        table.draw();
      });
    
      $('#reservation').on('cancel.daterangepicker apply.daterangepicker', function(ev, picker) { 
        var texto;
        if(ev.type=="cancel"){  
            $('#reservation').val('');
            $('#reservation').data('daterangepicker').setStartDate('01/01/2020');
            $('#reservation').data('daterangepicker').setEndDate('01/01/2020');
            //$('#reservation').clearDate(this);
            texto=$(this).val();
            console.log($(this).val());
          }else{
          $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
        }
      
          $.fn.dataTable.ext.search.push(
            function (oSettings, aData, iDataIndex) {
              var inicio = new Date(picker.startDate.format('MM/DD/YYYY'));
              var fim = new Date(picker.endDate.format('MM/DD/YYYY'));
              var data = new Date(aData[7]);
              console.log(ev.type);
              if(texto == ''){
                return true;
              }else{
                return data>inicio && data<fim;
              }
              
            }
         );
          table.draw();
      });



      
  });

</script>
@include('sub-views.exports')
@stop

@section('css')
<link href="{{ asset('css/mfb.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection