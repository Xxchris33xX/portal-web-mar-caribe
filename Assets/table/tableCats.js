let tableCats;

$.extend( true, $.fn.dataTable.defaults, {
    "language": {
        "decimal": ",",
        "thousands": ".",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoPostFix": "",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "loadingRecords": "Cargando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "processing": "Procesando...",
        "search": "Buscar:",
        "searchPlaceholder": "Término de búsqueda",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "aria": {
            "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        //only works for built-in buttons, not for custom buttons
        "buttons": {
            "create": "Nuevo",
            "edit": "Cambiar",
            "remove": "Borrar",
            "copy": "Copiar",
            "csv": "fichero CSV",
            "excel": "tabla Excel",
            "pdf": "documento PDF",
            "print": "Imprimir",
            "colvis": "Visibilidad columnas",
            "collection": "Colección",
            "upload": "Seleccione fichero...."
        },
        "select": {
            "rows": {
                _: '%d filas seleccionadas',
                0: 'clic fila para seleccionar',
                1: 'una fila seleccionada'
            }
        }
    }           
} );        

document.addEventListener('DOMContentLoaded',function(){
    tableCats = new DataTable( "#tableCats" , {
        "aProcessing":true,
        "aServerSide":true,
        "ajax":{
            "url" : host+path+"/con_cat/JSON/JSON",
            "dataSrc" : ""
        },
        "columns":[
            {"data":"id_categoria"},
            {"data":"nom_categoria"},
            {
                "data": null,
                "defaultContent": "<button title='Editar categoría' onCLick='openModalEditCategory();' type='button' class='openModalEditCategory btn btn-success' Onmouseover='popUp();' data-toggle='tooltip' data-placement='top'><i class='bx bxs-wrench'></i></button>  <button title='Eliminar categoría' onCLick='openModalDeleteCategory();' type='button' class='openModalDeleteCategory btn btn-danger' Onmouseover='popUp();' data-toggle='tooltip' data-placement='top'><i class='bx bx-x'></i></button>"
            }
        ],
        "columnDefs": [
            { targets: [0, 1, 2], visible: true},
            { targets: '_all', visible: false },
            {type:'natural' , targets: 
                0,
                "data":"id_categoria", 
                "render": function(data){return '<span>CAT-'+data+'</span>'},
                "@data-order":"id_categoria",
                sort:"@data-order"
            }
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]
    })
},false);


$("#tableCats tbody").on(
    "click",
    "button.openModalDeleteCategory",
    async function()
    {
      $('[data-toggle="tooltip"]').tooltip('hide')
      let dataRow = tableCats.row($(this).parents("tr")).data();
      $("#catName").html(dataRow.nom_categoria),
      $("#categoryName").val(dataRow.nom_categoria),
      $("#id_category").val(dataRow.id_categoria),
      $("#deleteMessage").val('Se eliminó una categoria')
    }
);

$("#tableCats tbody").on(
    "click",
    "button.openModalEditCategory",
    async function()
    {
    $('[data-toggle="tooltip"]').tooltip('hide')
      let dataRow = tableCats.row($(this).parents("tr")).data();
      $("#nameCategory").val(dataRow.nom_categoria),
      $("#Nom_categoria").val(dataRow.nom_categoria),
      $("#idCategoryEdit").val(dataRow.id_categoria),
      $("#editMessageAction").val('Se editó una categoria')
    }
);

//MOSTRAR MODAL ELIMINAR USUARIO
function openModalDeleteCategory(){
    $('#deleteCategory').modal('show')
};

function openModalEditCategory(){
    $('#editCategory').modal('show')
};

function popUp(){
    $('[data-toggle="tooltip"]').tooltip()
}