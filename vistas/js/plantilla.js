/*=======================
SIDEBAR MENU
=======================*/

$('.sidebar-menu').tree()

/*=======================
DATA TABLE
=======================*/
$(".tablas").DataTable({
    "language": {
        'sProcessing': "Procesando...",
        'sLengthMenu': "Mostrar _MENU_ registros",
        'sZeroRecords': "No se encontraron registros",
        'sEmptyTable': "Nigun dato disponible en esta tabla",
        'sInfo': "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        'sInfoEmpty': "Mostrando registros del 0 al 0 de un total de 0",
        'sInfoFiltered': "(Fintrando de un total de _MAX_ registros)",
        'sInfoPostFix': "",
        'sSearch': "Buscar",
    }
});