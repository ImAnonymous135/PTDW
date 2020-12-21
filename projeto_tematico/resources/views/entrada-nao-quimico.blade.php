@extends('adminlte::page')

@section('content_header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Entradas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Movimentos / Não químicos</li>
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
          <label class="font-weight-normal">Período de entrada:</label>
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
          <label class="font-weight-normal">Tipo de embalagem:</label>
          <div class="input-group-prepend">
            <select id="select2" class="select2 form-control" name="subfamilia[]" multiple="multiple">
              <option value="Vidro">Vidro</option>
              <option value="Plastico">Plastico</option>
              <option value="Metal">Metal</option>
              <option value="Outros">Outros</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <table id="table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Produto</th>
          <th>Localização</th>
          <th>Fornecedor</th>
          <th>Marca</th>
          <th>Tipo de Embalagem</th>
          <th>Cor</th>
          <th>Peso Bruto</th>
          <th>Data de Entrada</th>
          <th>Data de Validade</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Plastico</td>
          <td>Verde</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Plastico</td>
          <td>Verde</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Outros</td>
          <td>Verde</td>
          <td>500kg</td>
          <td>10/11/2019</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Plastico</td>
          <td>Verde</td>
          <td>500kg</td>
          <td>15/12/2020</td>
          <td>4/12/2019</td>
        </tr>
        <tr>
          <td>Água</td>
          <td>G-3</td>
          <td>Quimifeira</td>
          <td>Brady</td>
          <td>Vidro</td>
          <td>Verde</td>
          <td>400kg</td>
          <td>16/12/2020</td>
          <td>4/12/2020</td>
        </tr>
        </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
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
  $(function () {
    $('.select2').select2()
      var table = $('#table').DataTable({
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

      /*$('#reservation').on('apply.daterangepicker ', function(ev, picker) {
          $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
          $.fn.dataTable.ext.search.push(
          function (oSettings, aData, iDataIndex) {
              var inicio = new Date(picker.startDate.format('MM/DD/YYYY'));
              var fim = new Date(picker.endDate.format('MM/DD/YYYY'));
              var temp = aData[7].split("/");

              var data = new Date(temp[1] +"/"+ temp[0] +"/"+ temp[2]);

              return data > inicio && data < fim;
            }
        );
        console.log("teste");
          table.draw();
      });

      $('#reservation').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
        $.fn.dataTable.ext.search.push(
          function (oSettings, aData, iDataIndex) {
              console.log("entrei");
              var inicio = new Date(picker.startDate.format('MM/DD/YYYY'));
              var fim = new Date(picker.endDate.format('MM/DD/YYYY'));
              var temp = aData[7].split("/");

              var data = new Date(temp[1] +"/"+ temp[0] +"/"+ temp[2]);

              return true;
            }
        );
        table.draw();
      });*/



      $('#select2').on('select2:select select2:unselect', function (ev) {
          $.fn.dataTable.ext.search.push(
          function (oSettings, aData, iDataIndex) {
            var values = $('#select2').val();
            console.log("asd");
            if(values.length == 0){
              return true;
            }else{
              return values.includes(aData[4]);
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