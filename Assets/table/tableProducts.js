let tableProducts;

$.extend(true, $.fn.dataTable.defaults, {
    "language": {
        "decimal": ",",
        "responsive": true,
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
            "sortAscending": ": Activar para ordenar la columna de manera ascendente",
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
});

document.addEventListener('DOMContentLoaded', function () {
    tableProducts = new DataTable("#tableProducts", {
        "aProcessing": true,
        "aServerSide": true,
        "ajax": {
            "url": host + path + "/con_pro/JSON/JSON",
            "dataSrc": ""
        },
        "columns": [{
                "data": "imagen"
            },
            {
                "data": "nom_producto"
            },
            {
                "data": "nom_categoria"
            },
            {
                "data": "cantidad"
            },
            {
                "data": "precio"
            }

            ,
            {
                "data": null,
                "defaultContent": "<button id='editBtn' Onmouseover='popUpEditar();' onClick='openModalEditProduct();' type='button' class='editProduct btn btn-primary' data-toggle='tooltip' data-placement='top' title='Editar Producto'><i class='bx bxs-wrench'></i></button>" + " " + "<button Onmouseover='popUpEditar();' onClick='openModalDltPro();' type='button' class='deleteProduct btn btn-danger' data-toggle='tooltip' data-placement='top' title='Eliminar el Producto'><i class='bx bx-x'></i></button>"
            }
        ],
        "columnDefs": [{
                orderable: false,
                targets: [0, 5]
            },
            {
                targets: [0, 1, 2, 3, 4, 5],
                visible: true
            },
            {
                targets: '_all',
                visible: false
            },
            {
                targets: 3,
                "data": "cantidad",
                "render": function (data) {
                    return '<span>' + data + '&nbspUnidades'
                }
            },
            {
                targets: 4,
                "data": "precio",
                "render": function (data) {
                    return '<span>$' + data + '</span>'
                }
            },
            {
                targets: 0,
                "data": "imagen",
                "render": function (data) {
                    return '<img height="75" width="auto" src="' + pathImages + data + '">'
                }
            }
        ],
        "responsive": true,
        "bDestroy": true,
        "lengthMenu": [10, 25, 50, 75, 100],
        "iDisplayLength": 5,
        "pageLength": 10,
        "order": [
            [0, "desc"]
        ], 
        "dom": "lBfrtip",
        "buttons":[
            {
                "text":"<i class='bx bxs-cart-add' Onmouseover='popUp();' Onclick='popUpHidden();' data-toggle='tooltip' data-placement='top' title='Ver productos activos' style='font-size: 20px;color: green;'></i>",
                "className":"btn btn-warning",
                "action":function(){
                    showActiveProducts();
                }
            },
            {
                "text":"<i class='bx bxs-cart-download' Onmouseover='popUp();' Onclick='popUpHidden();' data-toggle='tooltip' data-placement='top' title='Ver productos inactivos' style='font-size: 20px;color: red;'></i>",
                "className":"btn btn-warning",
                "action":function(){
                    showInactiveProducts();
                }
            }
        ]
    })
}, false);

window.addEventListener('load',function(){
    fntCategorias();
},false);


function fntCategorias(){
    let ajaxUrl = host + path +'/con_cat/getCategorias';
    let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            document.querySelector('#categorias').innerHTML = request.responseText;
            $('#categorias').val(1);
            $('#categorias').selectpicker('render');
        }
    }
}

$("#tableProducts tbody").on(
    "click",
    "button.editProduct",
    async function () {
        let dataRow = tableProducts.row($(this).parents("tr")).data();
        $("#Nom_producto").val(dataRow.nom_producto);
        $("#Precio").val(dataRow.precio);
        $("#id").val(dataRow.id_producto);
        dataRow.estado == 1 ? $("#estado").val('Activo') : $("#estado").val('Inactivo');
        $("#textDescripcionProduct").html(dataRow.descripcion);
        $("#edtProductImg").attr("src", pathImages + dataRow.imagen);
        $('#categorias').val(dataRow.id_categoria);
        $('#categorias').selectpicker('render');
    }
);

$("#tableProducts tbody").on(
    "click",
    "button.deleteProduct",
    async function () {
        let dataRow = tableProducts.row($(this).parents("tr")).data();
            $("#proName").html(dataRow.nom_producto),
            $("#productName").val(dataRow.nom_producto),
            $("#id_productToDelete").val(dataRow.id_producto),
            $("#deleteMessage").val('Se eliminó un producto')
    }
);

let formProduct = document.querySelector('#formulario')

formProduct.onsubmit = function(){
    if(document.querySelector('.productDescript').hasAttribute('disabled')){
        document.querySelector('.productDescript').removeAttribute('disabled');
    }
}

//MOSTRAR MODAL EDITAR PRODUCTO
function openModalEditProduct() {
    $('#editProduct').modal('show')
};

function openModalDltPro() {
    $('#deleteProduct').modal('show')
};

function openModelActPro(){
    $('#activeProduct').modal('show')
}

function popUpEditar() {
    $('[data-toggle="tooltip"]').tooltip()
}

function popUp() {
    $('[data-toggle="tooltip"]').tooltip()
}

function popUpHidden() {
    $('[data-toggle="tooltip"]').tooltip('hide')
}

function showInactiveProducts(){
    tableProducts = new DataTable("#tableProducts", {
        "aProcessing": true,
        "aServerSide": true,
        "ajax": {
            "url": host+path+"/con_pro/inactiveJSON/inactiveJSON",
            "dataSrc": ""
        },
        "columns": [{
                "data": "imagen"
            },
            {
                "data": "nom_producto"
            },
            {
                "data": "nom_categoria"
            },
            {
                "data": "cantidad"
            },
            {
                "data": "precio"
            }

            ,
            {
                "data": null,
                "defaultContent": "<button Onmouseover='popUpEditar();' onClick='openModalEditProduct();' type='button' class='editProduct btn btn-primary' data-toggle='tooltip' data-placement='top' title='Editar Producto'><i class='bx bxs-wrench'></i></button>   "
                +
                "<button Onmouseover='popUp();' onClick='openModelActPro();' type='button' class='activeProduct btn btn-info' data-toggle='tooltip' data-placement='top' title='Activar Producto'><i class='bx bx-check'></i></button>"
            }
        ],
        "columnDefs": [{
                orderable: false,
                targets: [0, 5]
            },
            {
                targets: [0, 1, 2, 3, 4, 5],
                visible: true
            },
            {
                targets: '_all',
                visible: false
            },
            {
                targets: 3,
                "data": "cantidad",
                "render": function (data) {
                    return '<span>' + data + '&nbspUnidades'
                }
            },
            {
                targets: 4,
                "data": "precio",
                "render": function (data) {
                    return '<span>$' + data + '</span>'
                }
            },
            {
                targets: 0,
                "data": "imagen",
                "render": function (data) {
                    return '<img height="75" width="auto" src="' + pathImages + data + '">'
                }
            }
        ],
        "responsive": true,
        "bDestroy": true,
        "lengthMenu": [10, 25, 50, 75, 100],
        "iDisplayLength": 5,
        "pageLength": 10,
        "order": [
            [0, "desc"]
        ],
        "dom": "lBfrtip",
        "buttons":[
            {
                "text":"<i class='bx bxs-cart-add' Onmouseover='popUp();' Onclick='popUpHidden();' data-toggle='tooltip' data-placement='top' title='Ver productos activos' style='font-size: 20px;color: green;'></i>",
                "className":"btn btn-warning",
                "action":function(){
                    showActiveProducts();
                }
            },
            {
                "text":"<i class='bx bxs-cart-download' Onmouseover='popUp();' Onclick='popUpHidden();' data-toggle='tooltip' data-placement='top' title='Ver productos inactivos' style='font-size: 20px;color: red;'></i>",
                "className":"btn btn-warning",
                "action":function(){
                    showInactiveProducts();
                }
            }
        ]
    })
}

function showActiveProducts(){
    tableProducts.ajax.url(host+path+"/con_pro/JSON/JSON").load();
    tableProducts = new DataTable("#tableProducts", {
        "aProcessing": true,
        "aServerSide": true,
        "ajax": {
            "url": host + path + "/con_pro/JSON/JSON",
            "dataSrc": ""
        },
        "columns": [{
                "data": "imagen"
            },
            {
                "data": "nom_producto"
            },
            {
                "data": "nom_categoria"
            },
            {
                "data": "cantidad"
            },
            {
                "data": "precio"
            }

            ,
            {
                "data": null,
                "defaultContent": "<button id='editBtn' Onmouseover='popUpEditar();' onClick='openModalEditProduct();' type='button' class='editProduct btn btn-primary' data-toggle='tooltip' data-placement='top' title='Editar Producto'><i class='bx bxs-wrench'></i></button>" + " " + "<button Onmouseover='popUpEditar();' onClick='openModalDltPro();' type='button' class='deleteProduct btn btn-danger' data-toggle='tooltip' data-placement='top' title='Eliminar el Producto'><i class='bx bx-x'></i></button>"
            }
        ],
        "columnDefs": [{
                orderable: false,
                targets: [0, 5]
            },
            {
                targets: [0, 1, 2, 3, 4, 5],
                visible: true
            },
            {
                targets: '_all',
                visible: false
            },
            {
                targets: 3,
                "data": "cantidad",
                "render": function (data) {
                    return '<span>' + data + '&nbspUnidades'
                }
            },
            {
                targets: 4,
                "data": "precio",
                "render": function (data) {
                    return '<span>$' + data + '</span>'
                }
            },
            {
                targets: 0,
                "data": "imagen",
                "render": function (data) {
                    return '<img height="75" width="auto" src="' + pathImages + data + '">'
                }
            }
        ],
        "responsive": true,
        "bDestroy": true,
        "lengthMenu": [10, 25, 50, 75, 100],
        "iDisplayLength": 5,
        "pageLength": 10,
        "order": [
            [0, "desc"]
        ], 
        "dom": "lBfrtip",
        "buttons":[
            {
                "text":"<i class='bx bxs-cart-add' Onmouseover='popUp();' Onclick='popUpHidden();' data-toggle='tooltip' data-placement='top' title='Ver productos activos' style='font-size: 20px;color: green;'></i>",
                "className":"btn btn-warning",
                "action":function(){
                    showActiveProducts();
                }
            },
            {
                "text":"<i class='bx bxs-cart-download' Onmouseover='popUp();' Onclick='popUpHidden();' data-toggle='tooltip' data-placement='top' title='Ver productos inactivos' style='font-size: 20px;color: red;'></i>",
                "className":"btn btn-warning",
                "action":function(){
                    showInactiveProducts();
                }
            }
        ]
    })
}

$("#tableProducts tbody").on(
    "click",
    "button.activeProduct",
    async function () {
        let dataRow = tableProducts.row($(this).parents("tr")).data();
        $("#proNameActive").html(dataRow.nom_producto),
            $("#productNametoActive").val(dataRow.nom_producto),
            $("#id_productToActive").val(dataRow.id_producto),
            $("#activeMessage").val('Se activó un producto')
    }
);