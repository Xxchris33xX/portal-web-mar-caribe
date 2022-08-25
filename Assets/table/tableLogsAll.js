let tableAllLogs

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
    tableAllLogs = new DataTable( "#tableAllLogs" , {
        "aProcessing":true,
        "aServerSide":true,
        /*"language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
        },*/
        "ajax":{
            "url" : host+path+"/con_log_all/JSON/JSON",
            "dataSrc" : ""
        },
        "columns":[
            {"data":"id_historial"},
            {"data":"nom_usuario"},
            {"data":"mensaje"},
            {"data":"nombre_entidad"},
            {"data":"fecha"},
            {"data":"hora"}
        ],
        "columnDefs": [
            { targets: [0, 1, 2, 3, 4,5], visible: true},
            { targets: '_all', visible: false },
            { type:'natural' ,targets: 0, "data":"id_historial", "render": function(data){return '<span>LOG - ' +data+'</span>'}},
            { type:'natural-ci' ,targets: 3},
           // { targets: 2, "data":"cantidad_salida", "render": function(data){return '<span>+'+data+' Unidades</span>'}}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]],
        "dom": "lBfrtip",
        "buttons":[
            {
                "extend":"copyHtml5",
                "text":"<i class='bx bx-copy-alt' Onmouseover='popUp();' data-toggle='tooltip' data-placement='top' title='Copiar en el portapapeles'></i>",
                "className":"btn btn-warning",
            },
            {
                "extend":"excelHtml5",
                "text":"<i class='bx bx-table' Onmouseover='popUp();' data-toggle='tooltip' data-placement='top' title='Exportar Excel'></i>",
                "className":"btn btn-success"
            },
            {
                "extend":"pdfHtml5",
                "text":"<i class='bx bxs-file-pdf'  Onmouseover='popUp();' data-toggle='tooltip' data-placement='top' title='Exportar PDF'></i>",
                "className":"btn btn-danger",
                customize: function(doc) {
                   doc.content.splice( 0, 1, {
                        margin: [ 0, 0, 0, 12 ],
                        alignment: 'center',
                        image: 'data:image/png;base64,'+encode,
                    } );
                    doc.content[1].fontSize = 16;
                    doc.content[2].table.widths = 
                    Array(doc.content[2].table.body[0].length + 1).join('*').split('');
                    let rowCount = tableAllLogs.rows.length;
                    for (i = 0; i < rowCount; i++) {
                        doc.content[2].table.body[i][2].alignment = 'right';
                    };
                    doc.defaultStyle.alignment = 'center';
                  },
                "messageTop": 'Historial de acciones'
            }
        ]
    })
},false);

function popUp(){
    $('[data-toggle="tooltip"]').tooltip()
}

let encode = 'iVBORw0KGgoAAAANSUhEUgAAAMgAAABGCAYAAACJ4ts2AAAACXBIWXMAAA7EAAAOxAGVKw4bAAADnWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSfvu78nIGlkPSdXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQnPz4KPHg6eG1wbWV0YSB4bWxuczp4PSdhZG9iZTpuczptZXRhLyc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczpBdHRyaWI9J2h0dHA6Ly9ucy5hdHRyaWJ1dGlvbi5jb20vYWRzLzEuMC8nPgogIDxBdHRyaWI6QWRzPgogICA8cmRmOlNlcT4KICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0nUmVzb3VyY2UnPgogICAgIDxBdHRyaWI6Q3JlYXRlZD4yMDIyLTA2LTAxPC9BdHRyaWI6Q3JlYXRlZD4KICAgICA8QXR0cmliOkV4dElkPjZmODhiMWMxLTYyMDItNDJlNC1iY2VlLTc2NzI0Yzg0MjdhYTwvQXR0cmliOkV4dElkPgogICAgIDxBdHRyaWI6RmJJZD41MjUyNjU5MTQxNzk1ODA8L0F0dHJpYjpGYklkPgogICAgIDxBdHRyaWI6VG91Y2hUeXBlPjI8L0F0dHJpYjpUb3VjaFR5cGU+CiAgICA8L3JkZjpsaT4KICAgPC9yZGY6U2VxPgogIDwvQXR0cmliOkFkcz4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6cGRmPSdodHRwOi8vbnMuYWRvYmUuY29tL3BkZi8xLjMvJz4KICA8cGRmOkF1dGhvcj5Kb3NlIE1hcnRpbmV6PC9wZGY6QXV0aG9yPgogPC9yZGY6RGVzY3JpcHRpb24+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczp4bXA9J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8nPgogIDx4bXA6Q3JlYXRvclRvb2w+Q2FudmE8L3htcDpDcmVhdG9yVG9vbD4KIDwvcmRmOkRlc2NyaXB0aW9uPgo8L3JkZjpSREY+CjwveDp4bXBtZXRhPgo8P3hwYWNrZXQgZW5kPSdyJz8+tPyKLgAAIABJREFUeJztvXmcZUWZ5/2NiLPcLTMrl9qroKgqoAqoAmWTRbFFRxRt91ZGbZcZlHabUXveV+luGbXVbtt9GbtxehhURp23lde1FRsFtRUQZEeg9r0q98y7nXvOiYj5I865eXOpopAssGvy+Xwy77nnniUiTjzx/J71CGutZYEWaIHmJPlUN2CBFugPmbynugEL9H835QBGCEEnmJnre8dJIIT7nDpg7u+d5/0etMAgC/SU0kxGMMa09+d/1trpjARTzGDtbMYQQLZLMJ0JH3f7FnSQBXoqyVrbZoKZE9haizEGJSXkjGQNWItQj722W50CAqScxogCjlqyLDDIAj0l1DntrLVIKbnxxhv5+c9/zrnnnsuZZ57J6aefDoDW2inL2UQHJyDs+Bjp3l2YsVFsK0IEBWT/AGr5SlRv3zQmsFrPZpSjYJIFBlmgJ5Xm0jO01iilGBoa4l3vehff/OY3qVQqPPOZz+Saa67h/PPPx+JW/uTB+4hu+j7xA78l3bEFW5/EJjEYDVIh/BBRLOOfdDL+GU8jfM5lBE871907h29SHrU0WWCQBXpSqXP1zvUNKacbUz/0oQ9xzTXXAKCU4vrrv8JrN29k9LMfI737Nkyzigg9ROiDUqBENsktGAPaYqMEWgmEZYLN51J649sIn/081wadtiHaXNCukxYYZIGeFJopOXKpAXDzzTfz/e9/n71797J582be9KY38f73X83XvvZVACqe4menLOYUL6FVKSEDCdJiMU4ECEA4GSMAbL5TYhODrTUQiSR4zosp//k1qJWrnX4i1ZT+4xo2q90LDPI4qFOhnE4CIWxmVXxiZsXHuj8c3gQ616N8vJj7WFFnG3LmiKKIt7/97Vx33XXT2r5u3To+/MEP8oG//Eu27twJwCfXLuKdaxYxYRKkB6hsPkuwwmZYiYw5cEqKEZk1S0EKDFeR3csof/iz+Jc8dzaTHCsG6Zw42rYtbICTfvIIDyk32R3ufE9wxA4ca5oaHifCDVPm9dyamH+XHLsJOQ2aWIvsYAoL7e9znfdUMsbMduTMUa1W+eM//mNuueUWpJRtmOV7Hs0o4qRli3nDiWU+ePtOLPBXJ3fzl6d0UU8t0nNzX0oQskNgkAkSC9Y65hAGrBGQglA+otXEporiB76Af+lLHZMoz81BmCVF5sUP0jmBvTmeRf5A5+TFGWa+uc5/Kh7yTMY1WJQQKJharXLKFy1r0dYdl9vu57PdncxhrWU8tfT6sm3rt0Ckp9qvBBTUH4YEyXUOpRTj4+M897nP5a677kIphda6rY+kaQpIdhwc4h5/nIuXh/ziQItNKzyCZYK4avCsoFAQxFgiY/EkYMBqwAPh50uXQISAsaAEckkC5RCzW5Pc8GeI3gLe0y/DmhQhvQxq5eaArN3zKUFa2nLd7haxdt8l8PKVAcsLctqDnYIEkMsLIQT11PLNvTG11CIyTPnKGec/WdQpFfMV2lq4bTThjjHNvsjQ1JaSEqwpSS7o8zhrkVtv2m3Nzp2viZlf99Ga5l33NnikqrlkwOOTm0v0B5K9TcPLbqsSG2hoy3MX+3zpaeU/CAbJFwwpJZ/85Ce55557uPzyy+np6UEphRDgBUVu/vZ13P3PX+NXew0Cy9OX+Px6X4u/ekY328YTdk1ofASbl3i89YIya/o96pFFAjYBWQLRCwQC4QOFzKkuMmaRQORhazHoHvzX/hCx6CSs1QihZi1q8+pJbxr4wENNxhNLKKGWwm/GUv7nOZX2IM0YNoQQpMbiCfjctoirH2xS9kBnsPK8Xo/lBckT5uLHQfkg5RNSAD86lPCpLU3undDUtEUgUAJ01qduT/CMPo+/3FDk6Yu8aefOW5uy7Q881ORnQwlLQslX98SsLEk+clqJ1MLByNIylrq2jCV/WOqlzMyrb3vb2ygWi7N+v/Xnv6Q5vp9FJThzhc+/7oi4eVcLX8L7fzk57dgf7mnxv7Y3+eobF/GsDSFRYlESRFlAAcAilHCYy7jFSkgQUmALKYQhRIPoO6/Ge+7XATknwplXBpHAQCDxpcUX0BvADw4l/Gok4cJ+fxr8yMWYsRZPCvY1DdftarG8IAikwGRHzA25fr/Qm/y2okPPmXneNM9udsyHH27yiS0RUkCXEoTKScvUQkEKQukE88+GUn4+XOV/nl3mRcsDtLVZNKh4wu115wi0tRyIDBVPECooKtjXNO3xDyRYBImde+yeKuqE0cViEa11W6r4vs+nP/0Z3vOed3eckbB2sWL7kCYxsGG5IkosO4ddXwse7B4zvP5r4/z6wwMsX6xILAjfLV5W4FCIAGT2LCVYBWiBSBOodMPwTdhd/xtx4p84qDVDisxrNK8FUmtJjSXJQmRiA1/c3nKDRKcUyVdp9+3LO1vsjwyedA83NW4CzpI51mJxWD/N/rS1GJtpZx33yHWC/C/T3tBMnecGY6ZnF8egQvDxR5t89JEmXZ6gxxPUtCU2llO7FH+02GdjlyK1llrqsHB/KFhbydki7+l8tBdi4xaYN58Yoi0caBr6AskbTwjb49/+6xg7g5PIiZnqc3ssO/7yfSZ/hsZ9znXO45oX08Z2CmpJKfF9nwMHDvCxj30UAKkUoQ8f/9NuXnxOgZ6ioL8i2Dms6e+SvOL8ApWCIEqhEMDuIcOXb20gegTWA+EJCEB4QDD1ZwOgCKJkEaFFhCB8gyh42B3/gNUtp4d0PDc4xsGKBujyBDcNJvxiOOGZAx1SBNuWHrsbhhv2tKh4UwwzkwRO2jjl03VBzVghjbWzlH7V8bvtOL/z3M4VI1+llRDcPpryd1si+gKJFDCRWM7r8/joaUXOXKRQCAyWhyY1n9oa8bOhlM+fWea0Lg+dSSAzz+211vKGE0PO6/O4ezzl0sU+SwuOIeWM6+dDqXKTWwdNl+ZTBgB3HTHrWjPPOVoDxEzmgCnHYK6Y/+QnP2FoaAghJUZrvn5NLxduCFn2Jwf54BUVXnFRiXPfO8hdO1JqLcvn39rDp75T4/6dKQD/+C8N3vnyCn0ViRYW4WX3yiFWbgXOrV0h4OO877aIjR5ADP0Mll0GaKzw2sr6MWMQgRtQX4i2FHnmgN8hRXKMD9fujDgQudUwMXMr4wbwsv2DLcNvxlJ21g11bVnkCy7o89jUM11JbmrLL4dTYmPpDQQX9rv733Qo5jdjmg1dipevCKZN0E5o9YXtES0DZQXV1HJGt+Kfzq/Q1YFdFIJNPR7XnV1hPHFtMRm0EvPc3lO7FK9cGbClptnXNJxcVtw/qYktrC7KaRAut2IB7KhrfjGSMplY1pQkly7xKaqphQCYtv27qubOsZTxxBkhNnQ5I4TqWDyOxCRz+YuMMW3GyIMQkyRBKcUjjzwMQOhLvnJ1Dy97UYkXv2MYgH9/WYn1pwa85YVlPntjnUf2a255qMW3P9jP5X8xzKN7NXuGDL/dmfDcC4voyKAyXGRnrgtiCrNaCUJlIxUn2KEfIpZdhsNh+XHHSIII4R56xRM0tZMi/zKYcOtQwiWL/Wx1ddJjZ13z9T0xXZ5AWygpQcvMhlaeEByMDJ/aGvHdAzFjsaWpwWCRCMoevHZ1yN+cXsTLlr+hluXNv61T1xYl4PsXdHHrcMKHH24SaVhdkly21KfcMeFzi9WuhuZfR1LKysETY+HPTy7Q5QlaxhJ0jLxxw9pmDoFjjvlu7/KC5JUrA753IOG99zdYEgpqqeX6cyqsXhlg8j5kbUgMfGZrxOe3RYwmDi4pIdjUrfhvZ5XY1OO1jQxKCA5Fhr/6XZN/PphQ15amtvhSUFJwRrfiY6eXOLfXmyV9OqmTOYwxbd+H7/ts376dD33oQ9x333309fXxjne8g5e+9KU0Gw0A/tMrK7zqFRV+/KMG3/9ViysuLbL+JB8SyysuLfL336/TSuBHd7b4wnsVP/i7AV74X4bZslfz0J6U53rZg5CAFZklNH+u+cKXS8xsU2jwA2z9LtAthApdv7Lne0wyCiVQ1/DsAZ8NXZJIOwfgFzp0kRxK/cOOFoMtByWWhYLLl/k09Gwp0tSWP7mjxme3Rownlsi4TiohqHju87PbIv7ioWb7HCGc0lqQbjW9+sEGX9juoFxfIFhZkM6G3kH5JLtnXDORWDwhiI1lRVHy7MU+wDTmgCkIZTuYo2Xmv70ripniKKCgoOQJCkrMhm5A2RP8ajTl6gcb7G0atIWKJ+jxBfdMaP70rjrDLZPBN8H+puElt1X52u4WaTbxl4aSonQLxF1jmpfdVuO342lbkswVnt7p1VdKtfUMgHe84x1cf/31jIyM8JKXvITTTjvN9SeocEIffOTKHpgw/P136gC87JIiBJJWDBdvCrl4s9O1tLUMjhvWnxzy3Y8tphjCtv0aEIjMQegaQduznvNDR2unvIpCIZJD2Ghn+7c2HOQYUWIsi0PBW9cUiIyl2xf8dCjh5qEEKQSeFGyva76xL6bHF0wklitWB5zV41FL7SwMXFSCFy71CaSzcr1iRcCnN5W4ZkORvkCSWsvSUHLDnpjfVZ23zGSKag7P7pvU1FJLIZtRy4uSUM58yO5zb9P5OZSAxMKJJUnXDHmbJ/TM3DbWEsr5b++KTNfIjzuS7VsCtdRyfp/H584s8bHTiywvSBraPZeHq5r/vrPVPv7PH2hw/4RmSehM6v/PyQVufEaF688ps7FLESp3vQ9kDC2ZW7+AKTh100038brXvY53vvOd3HbbbWzdupW+vj4GBgb4yEc+wjMvvphvfOMbnLJ2JW97GajFkp/d2eL//0XEysWSC88IIXFecVFSbF7vGG3xIsWiikdahQ0bQz7zzl4OjmhnzhW5otFuWXugRMf29N8UNp2A6r15D9pXOGY6iBKCamp51aqAz23zeLimscAXt0Vcmq3EX9reYrjlmGdpKLnqpAJf2d06rO/gfacW2dSjWBpKzumdavqSUPD2exv0+jCWWG4fTdnYpbAdg5FLrdetDnjvyUUS4yAgzOWfgaaxGJvDRSgrMU2qHU5BFR323Plub84o+XGdVqtOkkBknM707fMr9AaOsc7oUrzqjhqJcVD2psGE951a5I6xlH8ZTBgIJSOx5X2nFnjfqVN+inVlxbN+PknZE9w9kXLvRMqZPV4bTnb2PQ8luemmm7jsssvaY/v1r38dKSWjo6NUq1UKhQLVapUrrriCz1zzUv7zFStgMuaGnzi49fzzCqxc4RM3LEK6Sf/sswp8+ps1Tl/j07dIkiQWU4M3vbDCQI+iWTOEQac5vXN0rJMm+Vc5nZGsbmFbg1mw45T+ckyV9CTDK29fG/KWexr0+oKfDqX8ciRhfVnxjb1OeownhnevL1DxRAavZl8vx8qXLwva+xLjMPKKoqSoXN9jYxnLbpwPlMRN+NO7FZ/ZXJo20Q+naBaks+RY68ayltpZMVCPpaCaeW9vvhIe2XokhCDWlrUlSW8giTNH7AX9HieUJLsbhkDCjoZBW8egtdRSVIKigvHY8tXdLeraGVma2lLOdMOmhoerOmOQKctZ3melFI1GgyuvvBJrLevXr2ffvn2MjIwA4HkupOM1r3kNz3/+v+P662/gb774z1x+yiIWlSU33+mk2ksuLINwzjspgESwOltYX/rMEgQS2zIYl2zIyy8pkmqb5XzkJvJsNEWmmBjppExmPrcie4ZWIQzOqjWDjqmZNx+8V6wM+O+7Wtwz4aTIdbtiVhQEY4mh2xOsLkresqZA1p05yVrwpHtY/zKYcNtoyva6YTA2DLVs+zyLw8ydJIQg0ZaTShKZ4+d2G6ebOvP9K4qSgnKGA1/AzoZmPLH0BdOZKz8vN8l2TmUl5re9qXU6yhGxVX4NIM4O8wWZCdmyOJDsqBs84e47EluGMh3QAr4UfH57REu755f3qctzcXKjiWV8Dg99rpQrpfjWt75FrVbjhhtu4Mc//jFf+cpXeNWrXsXq1avZsWMHe/bs4ctf/jKvfvWr+O53b+SH3/hr4trHuWNPhZ0HNauXKM47pQwNhcr9Lkrw6O6US59e4IrnVDB1xzjCOr9YmocnGcjCRh1D4GVOEQ+0xOoMankaMJkZ2IdWGaH9aeMHx5hB8pv4UvD2tQXeeFedbk/wo0MxvhD0+pKxxPCudQVWl3Jb/tyroycFtw4nXP1gk99VNfXUEhvwJFSUoNRhiZrrCgKnS0AnE07pDznlTL25W9HlCRJjCaRgf2T5yWDKq1cFxHa6ot7pP+gMWJzv9h75jLmvAVOT3NopSZyTLzstPI4uGfBZ5Al0xzVSm4fzu/CfzrHKKTfjJknCrbfeyhlnnME111yDEILPfe5zbN26lfe85z28/vWv58477+QHP/g+l176PF546dPg4RX89X8dBODsk4ssXVQgTU2mN2iIYUW/xyeu6kV6giTS7v5Zm5xdVCJs5i63EoxCCA/wsXiQCEQdwEDJgDAgDWgBrS4si2eN2ZNS1cRYy8tWBHx5Z4tfj6ZU1JS3/KSS4j+uCTuOtjPOdZ93jaVccUeNyEAo4YQuxeXLfDZ1K3Y2DZ/dGh05boPZ02quw91EsqyvKM5epPjpUEqP71bhT2xpculij4FwetxOztR7m4aVBYkS8Nvx+W/v70sGt9LGFgZbDm4ZoKKg15csDrPFCahpy7vWhVy+LGhDs1wadpK1sy2NecTum9/85va+crnMW9/6VpYtW8bo6ChbtmxhzZo1nHnmmXheBj+Lp7FjZxc/vO0RAE4/oYQIAmwzQUiLlKAjyzM3lcFa0qbzxJOjqUxCYjKpYRWkEmKFVT7C+o5hGgJii5AWGxuEMqAMtAzWdiO6Ts06Ip8cCZKTzrDqO9aG/HokRQk34SYSy39YEzIQOlNwYaa9soO+vjdmIrX0BxJPwD+dX2F9xfmdH5hM+fSWaJ5a67zjCnjLSQV+OlTDZP6ZrXXDK2+v8bdnlDi3V7UnyGhs+MK2Fl/cHvG2tQWu2Vh07U0s/eGxbu9jU+5gvWM0YV9kKCpnNdw84B7/2YsUFU+04d439sZcviwg6BARibE8WjOc3q3mukUbZuYBiVprPM/j8ssv57zzzgNg6dKlhGHI3r17ufLKKwmCjEEqq/nV1hITTj9n46oy2BCrFQiw2gHANHWfQrp9Ijf55fp2C4gkxAKMAuOB8LHag0hADIQWK62THNJgY+Ny2sMliN71eW/aq9OTwiBO2bW8cFnAsxe3+O6BBF/Axi7Fm08M28e0G9dB+SI1kTiFMdcJ8v17m4ZPbYna4/TEyekHxlouW+rzxhMD/n57i6UFSbcnuH9S88e/rnJ6t2J5QVLXlkeqph1A+NFHmgwEgtSQ+QuOdXtnk7GWonKR1NfuiPijxT67G84J6KSBg1ovXeEm6EX9Phf3e/xkMGUgFPzzwYSr7q7z+hMCikrw0KTmhj0xd4ylvPfkAldnFq6Zfo9O73meTnvVVVe1t/v7++nr6+O2227j2muvJWrmPiCP2/b0AxD4ivVLKxD5kLjzhAKbZaq1fX+50pSpErQs1IFIOciklJMkEoglNMHWBCiLqACBcRWEmmBbCWLdaYigNIUMMjPWvDKIwOkKvgRP2rYDK4OKCODTm0ucUmnR1JY3nBDS7c9UmsEXTiHMcTM4ZqprpyRHBl7y6xonliQPVzV7mob+QGSSSZALSIGLaNXCYf8jCKjp/eh40J/YVKKewg17WpQ90TYNPzCpuWfC4eBQCrozX87iUPL0Xg8lUxraMhDOf3vzMfKlY75OHcUTjjE9AYdalnff32BZ6BgZnP5zIDK8cGnAa1YFbcvcx04v8cBklYMtFwrz/+2L+c6BmEA6c70Uzkjw2a0Rr14ZsK6ippl5Z1r08jFcvXo1MOUbWbJkCQ8//DCFQoFCodBW7u/83QEAesuKtX1laHmIyDrpkSPwBDdxvSzAtC4RDYGNBTRBpA5m2YaEgnX4PJ9HYwpbFdiGQJQtLDJOmjQVdjJAPe8SsoYipGyHpcwrgxhc3FEtsbRSy0SHtUNksVdrSoq/PaM0dU6m0OaKbj21VFsGgyC1UxaeN5wY8OPBhFuGEkIpGIsND1U1fb7gb88osaOu+fy2FmhLLTspzTB3ZFx75rK+zKQ2VMja5AnBl59e5rxejy/tiNhRN7Qyc63AmbIj7aTHpYs9PnhakU3dHqdWJDfuPzbtraeWWmQ4JCTVxB3vzrcMtiwN7RTq/7Am5IFJzW2jKeUsELSO4QVLfa592tQz0NZFJ3/7GV285746vxnXpMb1rZo5zXwpOK1L8aGNRdZV1LSYtbnGr51T01EpEZxOsn37dqrVKl1dXQgh2LJlCw/cfx8A6/qL9CqfdAJIBaLbrfJUJbYhoGgQBTB1CU2BTQW0BIwpTEM4+FV1q4YIwLZwiVIRmJqDWbYqYEwgymAiA8XVyNMudB2QMs9FBOZZghQkXLOhSGycxWZzTyYiAZiadJ2PXbUnpPv+R4t9Pryp1H6gJ2bWrf5A8q3zK3x9T8x9kynGwqqi5AVLfc5a5HEoMqwvKyZSy6WLvewcwQc3Fkmtw9AnV+bGz3NRJ5MI4MqTQl69KuCW4YR7JjSHIkNqXfjGCUXJhf0e52bWncRY+o5Be/Mxes5inw9vLlHJ4sLO7MnPl3xwoxv/QAquXBMynlqu39ViT9NQVoIL+j1etjxox8vlepS2zrH4o4u6uGkw4fZRzWDLIITL8Xn6IsXzsiDHx8pQ7Nw/E4IJIRgaGqLZbNLV1QXA7bffTq3uFJC1i0p4tYAoThEtia27eC5bF9gYmFSIgkXEwsGulsTuVzAundddQm5+c7kf2Wcr224IB0sqAhKFHZ5Avf7fI3r728XlpvVlPlJuOwfgSPtn4tSZ+w+XVtuZ9joXpca2A/5y6oxOPZp2znVc3sbc6TfX9Waekx93pBThJ9Lew1338aYkz6wT0BnmfyTqPOb3GcsXvOAF/OhHP2LLli2sX++U4re+9a1ce+21gOD9F5/AR198Co04RWVMIApZ5EBTITSIoiv3YyOJPSThQGbRMiCUwFaBMi6kvYVziQzT1lWsAdEtEYUYsXwF4f/4EqIypX8I11hgniRI58RPO9hNiikJkQ9Q52dOnbDGJRNN/ZZXNRHZfXRm9xbQDgXxpJuQORzrvG9ne4RwFp2jydGeybwygw2d9wDayUki0wVUR1/mu73u2Nlj1Fk5Jp0xdja7b+70y3xus4poWDsVoZtXbsn7mN9LCfd3NOPXed38WGst1WoVgEYWwWuM4ZFHHmkfv/z8F4AexDaGsVGAnRBQBtFtYFI4GFUUiNBi9ivsHuGU81Tk9mxEAkw634hIHNy0SeYrkRl8mgAzbCh86M8cc2iNUCqL5J3q17xVNck//TnG7GgGMj9mZjJTTlMJRVMPVYmpgZ/r3k+kPbOPdaYGT86oSZX9mykZj2V7DzdGnedbAJvnxU+tjEIePpfDthlBTIsL62y3teKx3DezKL/X4OAgW7duBaBedxG7+/bt44EH7s+PJNx0IZyxHPsPV6PHi9i6h+wzCGkwByVMCihlHvNBAWNgjXBhI2RMIUC0sjHIF9cgEzJCIqxFjIwTvv8teH/0DKw2TveYA0z9m3n9weGkz+H2zf/9YS7P++Ha8ZS3191ozvsdvv3tM+e13fl5QRDwF1dfTZLErFt7EgA93V383cf/ji3bdrB12zZOXnMSnH0x/gtHiD98LaQRek+mf1iLDAWkYGtgIto1sdrRAjgDVFti5vttFoaVUeHK1xC++w0duR/5kY7ai9186SALtEBtslPljtz0yiXrdAV4+pSMIK5BVHfQ0wtIvvVDzJ49YH1sbF0GYJjBJi2mTfiZNNdPVghINXLlEsI3vBwZ9iHEbMPNtBTsBQZZoGNFc8E4nUSkI1sQ0QjENUxcIx7Zhh68F6lbjqkyYCq7Kggl3cTOLiOMxUqJERKblxnN0mhpG2in4BZMqRQG4epjWQG1JqrnRPzl5yBK/ajSAKprBUIFCBW0Jci/GYi1QLOtgJ00lw7Uuf1kwLqOhk5JkLhOOrYL4QUI6WOSGiKuYhpjmPog6eDvSMd2IKWHTTVWSIxwuo4ZGkVag8bFtEsMFuEmepsNOpgHxyIultd2MIgbC9PBOqrYRWHpWcjyUoRfBOljjUbI6WN7XDPIzAllOn7Lhnbq+zxOpLnM2U/02tMsTkw3ef9BgwAVgPQwrSoyqNB88Pu0dvwrUinQKanWblskjoGsIEWBsHhIEiEwyKzPdoopmGKIqQfp9phMiuQWFNtmi0zGCIlJUpAlwlXnzWrycQ+xcgvOY/kwjiYB6nHdd8Y9LaCYPwbp9BUlxhWBKCnalrWZpumZbXpSpQhzj6mJm0TbbsVM7MVENdK0hW2MQfUApj6GkT6plBgtUMI6PUO6MrbuuWaLWyY4bMY0AoeyrGhng0xzSBvAyuy9h1KhyovxelaielYhwx5k2EewdD2q1P1/AcSasYLniUs/H06ZTA2LPMmasuTkiiLKMhgD+cQn0XTzbmdznvjk7GSOBydTttYNz+j1uGdCExn4d0v8aRVKvncg5pSK4tQu9aTWNZ4pPdtKeja7hfIprHs2yegedGME1WoQD+/AFPqwchemOYluxZhIu2xBH4QHOi++0JF2bCwucE2AVLRN0EJYbO4WAbAuQttEMSZJEcoiJsaQI3sprvPx+7vACmRYdlCrQ2Ycdwwy14r5td0tPvpIxAV9Hm9bG9LlC+6fcGV9RmLDm04M25mCudc+J7daiVkQZ5rIZkrKCyEYiQ33T2h+V9X86QkhZW963a2jvT5MlRQCB6tiY/lv21t8YEORpVnN4nsm0mnXA/jNmGZLTXNqVzGL2Tt6597vS4fTkYSQ0/CsTSP05EGivQ+STgwhCyVUuQ9v7WrS6ihi+CC6MYFNIqyJsHGKTdMse9a2r+VMv45BnKQBGViskCD9TJxIpLKQGlRlDaUlawDbSwjKAAAQT0lEQVSQpSJ+70rC5Wfg967AsdzsuXPcMQh0hHwAH3+0yf/7QJPnLvH4x7PL7WNOqSi+sz/mul0J/2mdS/fNJ2Pnamsyp9q0gg3uLnTmhudec0/AzYMJf3pXnaWh5E0nhtOuBbP1h5krfOcUziWRti5H5b4JjRCwtCDR1rKsILmsELSDB6UQDLYMbzgx4OOPRjS1nRY/dSzpcFDOpgkAJmmSDO+n8ehv0c0xhNJgAnSjgYmqoAJk0IPXtQSv3I+JG6S1UUx9DG2qoDsdmBmegqlQBmExiXC5HsS5wuFqVxtQ8SiJKlA4YROLLnrVzNYzM9ffWnv8MUhnTNEvhhM+/mjEIl9w1UmOCfIsOQG8ZEXAb8ZS6trSI0VbT3mkqhmKDcsLknVlN0WriSWxrpzPROLqZD1c1RxqGU4oSk4qKwRuso/Grnh3ty842DL0+i5MPr/+jrp7fUJ/INnYpRBApF1937InGE8s/YFgLLbsbRo29ah28lLLMCd8y8NxALbWDCeUXKLWLUMJL1gWtJl/uu/hidNcUsMaQ2vfVnSzBjolGRt0L87UGnRKc8fDmFaVYPFSTLOJ8IvIYoVkZBfCm0AWekCnmKiKro5hWi48RVgHnbAgjHAedEBY4bIEM0lpveygLLbGBTAKdGMcqSroyTHq99+K6u7HJjEmSUBIiiedgQhCRFYsQohjWHr0qaLOMOyv7I5pGsuKguTsXjetcubI6eIBrx0TNdwyvOXuOgOB5Kq1IX9ye43nL/X56OklBluG9z3Y4DdjmhUFydWnFtjTNHxld8yjNc3fnlHiP64J+d2kZlfTuIJz2nLfhGYgKyPa0pa339tgLDFcs6HIO++tc2JJ8o9Pr5Ba+PiWiBv3xyjhoqKHWpYPP9zkitUBnzvTSb/TulxpnnrGTKOx4cHJtF33ONIuKnhVUfLyFQE/OOgYJKcnyhxHZaETAuGFyNBg0xhV6sJEDeKhfUS7H4Y0BSGIdm7FNCaxxmJNgggVQmWVSYRCKtUu+QOG/K1RWVGSdhKVBayxYDL5knaYf/MVQadgQdfq1O+/jcYDd6AqPYigiOoeoHLms9GNKgqBCAvtrhx3DAK069zePZESCEGX5+puwWzM//wlU5Usrry7zvcOJPz2Od1s7vF43hKfjz3i6nhdusTnWQM+396fIAUsDiUvWu4m3tvuafDV3S1etzpgY7fLZW8ZSyAlL1rmt+HTe+9v8I87Ir53URebezxeujzgnXfXec5in9euDnn5ioDrdrlkslAJlLQM1zR3jumsbCj0BpLXnRDyT/tiXrEy4KGqJjbwy5GE34xpTqlIykpwapdiU7fiE1uaPDSpOa1btSHeMZEgxqWumrgJxqIq3ZjhOtILsYUKrb3b0RMj+L3LQCfoqA6lCt6iJehmjXR8KAsYFC4i14BJrdMfBFNOQU3GHSILHhMI4d4ziOfex2aNIX/1QW70FaUKCA8dRahyN6UN5+D3LydYtoZw+RqEH87qExyHDJIvGA1tmcwSjiqemFZOqHMV1NaZSW8ZSvjpUMopFdXOjS97AlqGW4YTLl3iE0hXBaQvEO1cl6JyZUDr2raLuzW1g8QWmExdht7DVc2398ecWFb0+U6E+9mrw24eTHnt6hBfuHpcSsApFcnTehRXbSjyyhVBOwIY61KBx2LDZGo5e5FHUbmsvw0VNa1SZG8g+MZ5FXw55Td4onQ4PSMdHyYe3IttNdH1SVoHdtHc+RBpvYaNU4SUCE+1dQWbxpnSZ8AkThrgrE1CTnkucj+HtWRFGWzb1Ov2AUoivAAZFkEol2MuJNL33X0sBMtPwutfifR8vIHlFE44FRkWMEmLdHIcodw71mWpfHxDrPyxKSHaxfPiGe9U6Hy4uV7w4KSmZVxtpW01lyy0qVvxufMqnJkxgyu36Sq6p5kVwExB3fbdO1M98s2HJjVNA6GCPU0Do66U6BfPKbOunEk3QftdiJF2BaO/dJaDVp2GAmMtvYGkN7u2tZYuT0yrOu8YUNAj58/P03md6lgVOTlE0FVBhiWQCr9vKTZN8QYsFoluNBBjg5hYY5pNdKOKjupOT3BvuEGGIJXAJG4MpQYZZpApr/OW5XrY7BObhYvgjrNRDPUWMNHRUOngmXROw9bgMDa9HZTvwtqTCOF5dJ11AeHqdahyL17/Egqr19IuD89xKEFy6vJgZVFyMHIF32oZbAGm4edfj6Rc0O9lZYgcwzxvqd+uBNJJ+a7phtqjo6axaOOY7KJ+j1XF2SXy8nW+U4+KM2ilOlZu0dGHnGabVmeE5effxUxbze9Hpa4SFJa5/G3p3p8Sjw7SOriPtFYlHRvG4mNlEX9JL6bRQO/ZDiLB6jSrgAhGuPgonXaYyj2w2jGEzNUnjctPb+sgGYQyYHVWFzkr12MzXUQYyL0hQoUQSKQfEqxcQ3njmYRLVlBctxFZmP46uOMaYsFU1tuli31+PZJSSwUPTmqeNSDRNkv6wT2QX44knN+n6A0Ehew9IDvrhvUVRStjqrap9DHuO722oqNcePX57pVpdW3ZVtesKsr2dfMU2Y7p3N5WYna1yaOVBEcb5v77kFTSMUCaYqMIoRThqnX4S1ZhoibohLRewzTq6HoVHUUgPOKhg5hWA92oY5IUm6Tu3YHGZfpZCbrlJr4QOMmiwSY4/UN1jLAFnYXBCwHCy6xZOmMaaaewbmrw+3pB+eh6E1AU1m5AFIruVdAuqae9Ch6/EEsIRLZyvmVNyHf2x9wxpvnugYRnDfhZWIaDQbsaml+NpvwXITi/16Pbk4zGlq/sbvGh00qEylVHnEwsL17u6kRJ4QoYZPWgnTItnHUs111cJVjRVqoBNvd4LA4EOxuG/7Un5pIBl99993jKozXDq1cFhDLLAhSuDldnnzo//xDIpBrTaJDWJkknRjH1KtIPaNXrYFwBa1UqY7Rm/P57aO7fSzI2ggoLyDBEl3x0o45qTCIkpKnFaJf3IaSlEArnA0wA48rmpjEYYVHZc5BSYLQlSaZct77vfksNWCsdWhIW6SmSlsXr66b8tPMonXIGMiu8gZqbDY5LP0hn6u5AKLn+nApX3V3nSzsiNnYp3nBCQGphOLbcuD+hrAQTiWFDl+Id60L++uEmH98S8dtxTTmrR/vFs1wFkLvHU6LEsqOu2V43bOxW3DehacSWXQ3DA5Oapy/y2Nit8CXsbhq+vT+mqS1XrAp536lF3nlvg/+xq8WWmmZlUVJNLZ/Z7K5/17grBqEt/PhQzPpKwTFMByR8qimHasr3UD09+D09sHI1JkmwaUrBaNDawag0wcQJxXUTNCYnMNYSjQ2jR4dduDpQQGJSS6QNGIMxUPAkEmjEhkrBrRiNyNKIDcZCQbmJ73vOcBUngsRmueaRIcxewdZqpVidvXHK1onSEaS/j0Pb9hL03ExlxXKKy1dQPvEkCitWooIAr1RCFQpI388X2+MrWLEzUDGHWi1juXF/zG2jmo1dihOKzml38YCrLtIXCHp8t9J/70DMTYMJhyLLad2Sd68v0uMLHqlqbhpMCCRtBfqMbsWN+2PAlexZEgpesTJACcG3s7pS/YHkz9aG7QoltwwlfO9gwt6mczD+5/UFVhYlwy3D9w4mNNKpd5Kc1+txfp/3B8Ugc4aTWOt0kSNQ0mgQDQ+i44hoeIiJLb+jOTqMnpwkmZygPjGOjlogBF5mnWomhkAJZxTRFm0s9VQTKkmQ6VJFT5JoS12DVyhQrJSp9C4i6O4mTjU9J66hNDCAwelzaRRh4ti9mx336miUj1UuB8X3FV1r1tK78TRneTveGASmr7gzK3XExlVOnFlV5EiT8Giqfcy81qwo1jnCTI7m+k9FFO7R0JFyUw5zAkmjTu3QfhqDhxjftY1WrYZMEpLxMcbHx0lqddIkwUs1ylgemWjSqySLfUlVW8at4FArpUvA4kKItNATeEwmmv21CG0sfaFPX3eZeFE//qJelq45gbUXXcjAKeudZfNx9I3jEWLBFAywdqpSR15dJA/ZyN9h3g42FHlVkCymiamawnkZn1zhtrj9+TEz9+XX73TkdlZ+J78+0yuh5EaanB2clfLoqrA82dTWi9yXtkc7/22WVU1KLJYkanJo26OkaYrs6kGlCXErpil91NJVCG3oCUPqrRg1WkXrhN3j4+wfnaBuoS7BSzUj+Bhj6DEeBAX22YR6vYacrFMeGSdKdpMKSYBlzc9/RfeyZXQP9HP2pZfQ1duL53tOT/I8hBTZto/yPTzPp53nfjxKkE6aK8sup06n1+GOe7y5FHOtrEdzfecR/r26+JTTzL51xoeBK+2jk4RUa9IkJm7UKVa6Gdq3m22/uY2xapXfPvAgB4eGIDX0Ko97q00ibVisJDbVxNow3GwyFLXoVR59UiKsYJHynL5iIRWCUAgKUtKygHEhPyhFlCR4SrFk2VKWLl3CyjWrKYUB1hhOOXMTA8uXUeqqEAQ+pUoXxa7K8amkz6S5Ko3M9fuRjns8K/fhLE7zdf0/RJqZnNX+bowzmkiB9DxazQb33XMne/fvY7zeYHxsDBk12TcxySFtGUZi0pSx0CcqSwLPo46T3hO1BuPaGTCGtGYou185TSlKwWSiibQhFIIepWgJQalQoCAlvV1dDCwe4OUvfxEXPesiypUyQeBe/935euqcciaH49QPskBPLnVKkLGJCbbs3MHQ8BBoTaVUpBlFVBt1li9fwe7xCZpCQqlCfbJKEhYZETWagCqW0F6BQ1ETW22QGEMtalFvRTSiFnGrhU41xhgMEukHNIE0x0M6pS4kI0JSCAMSpRhYu4bzLziPDevXcvLGU/HCAOX5bSaeyRx5P9rbxzvEWqBjTzMZZGh0lDiJwVpq9RqDI8McGBpk5769WKDeaKBTTU9XN1hLKBU6Tmk1m7RaMfXxCVr1BoODB7FWoDyFynwVSZIQxzGpNsRxSmoMqZkq0KAzL3qzGRE1WwRhQBiGBIUC5WKBlSuWceEF5/G0szax4ZRT6OnpotloZhYsDykkylP4nuekzAKDLNB80ZzWO2NoRE3iJGGyWqVWrzE6Ns6j27awZ+8+qmNj7N25i2a9TqsZYVJN6AcoKTDaFa72wxCjNc1GE7BEkXv5kBQSKRVCSYIgRCnPGTWkZM+e/Rw8NEg9isFkfhnPIwwLVLoqnHveOVx00QWsXrWS00/fyJIlixkZHSUIAgqFkGKhQFelssAgC/TEaZaS3s5BZ5pOMhelScLExAQjw8MMDQ3RiiJ0qkniFjpNabVaNBoNxkZHObhvPyNDw+0sTKNTWlGLOEmI4wSMpdWKiKKIuBUjpEBIjzyBRHoeK1eton/JEkrlMkIpPN/nnHPP5uJnXcySpUtntW+BQRZo3uixLIJ5gCH2sRnncNePmk2MMc4AgJMiQooO44jMQqpE22mc/QDWkqYpRhuMNe1rWguFYv5Cn6mgVFhgkAU6xjSziMbhplun5SjbMbWdMdNcCvWxbCssMMgCPYU0l8TJ9z8VNKdfbIFBFmiBDk/HVmYt0AL9G6cFBlmgBToCLTDIAi3QEWiBQRZogY5ACwyyQAt0BPo/492uK/+0fGUAAAAASUVORK5CYII='