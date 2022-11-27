$(document).ready(function() {
    var myTable=$('#datatable1').DataTable( {
        bProcessing: true,
        responsive:true,
        "language" : {'url':'../js/table-latino.json'},
        iDisplayLength: 10,
         aLengthMenu: [10, 20,50, 100],
         bAutoWidth: true,
          order: []

    });

})

