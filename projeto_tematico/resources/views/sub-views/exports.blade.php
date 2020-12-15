<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<script src="js/tableHTMLExport.js"></script>
<script src="js/jquery.table2excel.js"></script>

<script>
    /* {{-- Excel --}} */
  $( "#excel" ).click(function() {
  $("#table").table2excel({
    exclude:".noExl",
    name:"Worksheet Name",
    filename:"SomeFile",
    fileext:".xls",
    preserveColors:true
  });
});

/* {{-- CSV --}} */
  $('#csv').on('click',function(){
    $("#table").tableHTMLExport({type:'csv',filename:'sample.csv'});
  })

/* {{-- PDF --}} */
  $("#pdf").click(function() {
    var doc = new jsPDF();
    doc.autoTable({ html: '#table' });
    doc.save('table.pdf');
  });
</script>