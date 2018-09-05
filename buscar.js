
$(document).ready(function () {
    $("#resultadoBusqueda").html('<p>Listar Productos</p>');
});

function buscar() {
    var textoBusqueda = $("#busqueda").val();

    if (textoBusqueda != "") {
        $.post("procesos/buscar.php", { valorBusqueda: textoBusqueda }, function (mensaje) {
            $("#resultadoBusqueda").html(mensaje);
        })
    } else {
        $("#resultadoBusqueda").html('<p>Listar Productos</p>');
    };
};
