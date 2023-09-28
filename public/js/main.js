$(document).ready(function () {
    if (window.jQuery) {
        if ($.fn.DataTable) {
            $(".dts").DataTable({
                language: {
                    url: "/libs/datatables/spanish.json",
                },
            });
        }
    }

    // Manejar el evento click del botón "Guardar" del formulario
    $("#guardarEmpleado").click(function () {
        // Realizar una solicitud AJAX para enviar el formulario
        $.ajax({
            type: "POST",
            url: storeEmpleadoUrl,
            data: $("#createEmployeeForm, #contractForm").serialize(), // Serializar ambos formularios
            success: function (response) {
                // Si la solicitud AJAX tiene éxito, mostrar una alerta de SweetAlert2
                if (response.status == "success") {
                    mostrarAlerta("No se pudo registrar el Empleado");
                } else {
                    mostrarAlerta("Empleado registrado exitosamente.", true);
                    limpiarFormularios();
                    $("#myModal").modal("hide");
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                mostrarAlerta("No se pudo registrar el Empleado.");
            },
        });
    });

    // Función para mostrar alertas de SweetAlert2
    function mostrarAlerta(mensaje, exito = false) {
        Swal.fire({
            position: "top-end",
            icon: exito ? "success" : "error",
            title: mensaje,
            showConfirmButton: false,
            timer: exito ? 5000 : 5500,
        });
    }

    // Función para limpiar los formularios y recargar la página
    function limpiarFormularios() {
        $("#createEmployeeForm")[0].reset();
        $("#contractForm")[0].reset();
        setTimeout(function () {
            location.reload();
        }, 3000);
    }
});





