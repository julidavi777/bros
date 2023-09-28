$(document).ready(function() {
    // Inicializa Select2 en tu elemento select
    $('.select2').chosen({
        theme: "classic",
        width: 'resolve',
        placeholder_text_multiple: 'Selecciona un departamento', // Texto de marcador de posición
        allowClear: true, // Permite borrar la selección
    });

    // Inicializa Select2 en otro elemento select si es necesario
    $('#municipio').chosen({
        theme: "classic",
        width: 'resolve',
        placeholder: 'Selecciona un municipio',
        allowClear: true,
    });

    // Función para mostrar u ocultar el contenedor del campo DV según la selección de tipo de documento
    function toggleDVContainer() {
        var identificationType = document.getElementById('identification_type');
        var dvContainer = document.getElementById('dv_container');

        // Verificar si se seleccionó "NIT"
        if (identificationType.value === '2') {
            dvContainer.style.display = 'block'; // Mostrar el contenedor del campo DV
        } else {
            dvContainer.style.display = 'none'; // Ocultar el contenedor del campo DV
        }
    }

    // Agregar un manejador de eventos al campo identification_type
    document.getElementById('identification_type').addEventListener('change', toggleDVContainer);

    // Llamar a la función al cargar la página para establecer el estado inicial
    toggleDVContainer();


    function toggleDocumentFields() {
        var identificationType = document.getElementById('identification_type').value;
        var nameLastNameContainer = document.getElementById('name_lastname_container');
        var socialCommercialContainer = document.getElementById('social_commercial_container');

        if (identificationType === '2') { // Si se selecciona NIT
            nameLastNameContainer.style.display = 'none'; // Ocultar campos de Nombre y Apellido
            socialCommercialContainer.style.display = 'block'; // Mostrar campos de Razón Social y Razón Comercial
        } else {
            nameLastNameContainer.style.display = 'block'; // Mostrar campos de Nombre y Apellido
            socialCommercialContainer.style.display = 'none'; // Ocultar campos de Razón Social y Razón Comercial
        }
    }

    // Escuchar cambios en el tipo de documento
    document.getElementById('identification_type').addEventListener('change', toggleDocumentFields);

    // Llamar a toggleDocumentFields cuando se cargue la página para establecer el estado inicial
    toggleDocumentFields();





});

$(document).ready(function () {
    $('#departamento').change(function () {
        var departamentoId = $(this).val();
        if (departamentoId) {
            $.ajax({
                url: '/municipios/' + departamentoId,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('#municipio').empty();
                    $.each(data, function (key, value) {
                        $('#municipio').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        } else {
            $('#municipio').empty();
        }
    });
});
