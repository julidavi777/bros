<div class="modal fade" id="createClienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Crear Cliente</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="cliente-tab" data-toggle="tab" href="#cliente" role="tab" aria-controls="cliente" aria-selected="true">Datos del Cliente</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contactosComerciales-tab" data-toggle="tab" href="#contactosComerciales" role="tab" aria-controls="contactosComerciales" aria-selected="false">Contactos Comerciales</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contactosFacturacion-tab" data-toggle="tab" href="#contactosFacturacion" role="tab" aria-controls="contactosFacturacion" aria-selected="false">Contactos Financieros</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">
                        <form method="POST" action="" class="card-body">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 form-group col-md-4">
                                            <label for="identification_type" class="form-label">Tipo de documento *</label>
                                            <select class="form-select" name="identification_type" id="identification_type" aria-label="Default select example">
                                                <option value="1">CC</option>
                                                <option value="2">NIT</option>
                                                <option value="3">CE</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 form-group col-md-6">
                                            <label for="identification" class="form-label">Número identificación *</label>
                                            <input type="number" class="form-control" name="identification" id="identification" placeholder="" required>
                                        </div>

                                        <div class="mb-3 form-group col-md-2" id="dv_container"> <!-- Contenedor del campo DV -->
                                            <!-- Etiqueta del campo DV -->
                                            <label for="digit_v" class="form-label" id="dv_label">DV</label>
                                            <!-- Campo DV -->
                                            <input type="number" class="form-control" name="digit_v" id="digit_v" placeholder="#" required>
                                        </div>

                                        <!-- Contenedor para Nombre y Apellido (se muestra arriba) -->
                                        <div id="name_lastname_container" style="display: none;">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="mb-3 form-group col-md-6">
                                                        <label for="name" class="form-label">Nombres *</label>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombres">
                                                    </div>
                                                    <div class="mb-3 form-group col-md-6">
                                                        <label for="surname" class="form-label">Apellidos *</label>
                                                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Apellidos">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Contenedor para Razón Social y Razón Comercial (se muestra abajo si es NIT) -->
                                        <div id="social_commercial_container" style="display: none;">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="mb-3 form-group col-md-6">
                                                        <label for="razon_social" class="form-label">Razón social *</label>
                                                        <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="" required>
                                                    </div>
                                                    <div class="mb-3 form-group col-md-6">
                                                        <label for="razon_comercial" class="form-label">Razón comercial *</label>
                                                        <input type="text" class="form-control" name="razon_comercial" id="razon_comercial" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 form-group col-md-12">
                                            <label for="phone_number" class="form-label">Número telefónico *</label>
                                            <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="# Telefono" required>
                                        </div>

                                        <div class="form-group selectChosen col-md-6 ">
                                            <label for="departamento1"></label>
                                            <select name="departamento" id="departamento" class="form-control select2">
                                                <option value="">Selecciona un departamento</option>
                                                @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="municipio"></label>
                                            <select name="municipio" id="municipio" class="form-control select2">
                                                <option value="">Selecciona un municipio</option>
                                                @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3 form-group col-md-6">
                                            <label for="validation04" class="form-label">Dirección *</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Direccion" required>
                                        </div>

                                        <div class="mb-3 form-group col-md-6">
                                            <label for="validation04" class="form-label">Correo electrónico *</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@gmail.com" required>
                                        </div>
                                    </div>

                                    <hr>
                                    <h4 class="card-title">Cargar Documentos</h4>

                                    <!-- Row para archivos adjuntos -->
                                    <div class="row">
                                        <div class="mb-3 form-group col-md-6">
                                            <label for="validation07" class="form-label">RUT *</label>
                                            <input type="file" class="form-control" name="rut_file_field" (change)="onFileChange($event, 'rut_file_field')" id="validation07" placeholder="" accept=".doc, .docx, .jpg, .png, .pdf">
                                        </div>

                                        <div class="mb-3 form-group col-md-6">
                                            <label for="validation08" class="form-label">Cámara de comercio</label>
                                            <input type="file" class="form-control" name="camara_commerce_file_field" id="camara_commerce_file_field" placeholder="Cargue archivo" accept=".doc, .docx, .jpg, .png, .pdf">
                                        </div>

                                        <div class="mb-3 form-group col-md-6">
                                            <label for="validation09" class="form-label">Declaración de renta</label>
                                            <input type="file" class="form-control" name="income_statement_file_field" id="income_statement_file_field" placeholder="Cargue archivo" accept=".doc, .docx, .jpg, .png, .pdf">
                                        </div>

                                        <div class="mb-3 form-group col-md-6">
                                            <label class="form-label" for="validation09">Logo cliente</label>
                                            <br>
                                            <input type="file" class="form-control d-none" name="cliente_logo_field" id="cliente_logo_field" accept="image/png, image/jpeg" placeholder="Seleccione">
                                            <img src="{{ asset('imagenes/foto.png') }}" width="80" height="80" onclick="logoInput.click()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="contactosComerciales" role="tabpanel" aria-labelledby="contactosComerciales-tab">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h4 class="card-title">Datos Contacto Comercial #1</h4>
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="mb-3 form-group col-md-5">
                                            <label for="nombre_contacto_comercial_1" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre_contacto_comercial_1" id="nombre_contacto_comercial_1" placeholder="Nombre">
                                        </div>

                                        <div class="mb-3 form-group col-md-5">
                                            <label for="celular_contacto_comercial_1" class="form-label">Celular</label>
                                            <input type="text" class="form-control" name="celular_contacto_comercial_1" id="celular_contacto_comercial_1" placeholder="Celular">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="telefono_contacto_comercial_1" class="form-label">Teléfono</label>
                                            <input type="text" class="form-control" name="telefono_contacto_comercial_1" id="telefono_contacto_comercial_1" placeholder="Teléfono">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="ext_contacto_comercial_1" class="form-label">Ext</label>
                                            <input type="text" class="form-control" name="ext_contacto_comercial_1" id="ext_contacto_comercial_1" placeholder="Extensión">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="correo_contacto_comercial_1" class="form-label">Correo Electrónico</label>
                                            <input type="email" class="form-control" name="correo_contacto_comercial_1" id="correo_contacto_comercial_1" placeholder="Correo Electrónico">
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="departamento_contacto_comercial_1">Departamento</label>
                                            <select name="departamento_contacto_comercial_1" id="departamento_contacto_comercial_1" class="form-control select2">
                                                <option value="">Selecciona un departamento</option>
                                                @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="municipio_contacto_comercial_1">Municipio</label>
                                            <select name="municipio_contacto_comercial_1" id="municipio_contacto_comercial_1" class="form-control select2">
                                                <option value="">Selecciona un municipio</option>
                                                @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h4 class="card-title">Datos Contacto Comercial #2</h4>
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="mb-3 form-group col-md-5">
                                            <label for="nombre_contacto_comercial_2" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre_contacto_comercial_2" id="nombre_contacto_comercial_2" placeholder="Nombre">
                                        </div>

                                        <div class="mb-3 form-group col-md-5">
                                            <label for="celular_contacto_comercial_2" class="form-label">Celular</label>
                                            <input type="text" class="form-control" name="celular_contacto_comercial_2" id="celular_contacto_comercial_2" placeholder="Celular">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="telefono_contacto_comercial_2" class="form-label">Teléfono</label>
                                            <input type="text" class="form-control" name="telefono_contacto_comercial_2" id="telefono_contacto_comercial_2" placeholder="Teléfono">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="ext_contacto_comercial_2" class="form-label">Ext</label>
                                            <input type="text" class="form-control" name="ext_contacto_comercial_2" id="ext_contacto_comercial_2" placeholder="Extensión">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="correo_contacto_comercial_2" class="form-label">Correo Electrónico</label>
                                            <input type="email" class="form-control" name="correo_contacto_comercial_2" id="correo_contacto_comercial_2" placeholder="Correo Electrónico">
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="departamento_contacto_comercial_2">Departamento</label>
                                            <select name="departamento_contacto_comercial_2" id="departamento_contacto_comercial_2" class="form-control select2">
                                                <option value="">Selecciona un departamento</option>
                                                @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="municipio_contacto_comercial_2">Municipio</label>
                                            <select name="municipio_contacto_comercial_2" id="municipio_contacto_comercial_2" class="form-control select2">
                                                <option value="">Selecciona un municipio</option>
                                                @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Puedes agregar más tarjetas para más contactos comerciales si es necesario -->
                    </div>
                    <div class="tab-pane fade" id="contactosFacturacion" role="tabpanel" aria-labelledby="contactosFacturacion-tab">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h4 class="card-title">Datos Contacto Facturación</h4>
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="mb-3 form-group col-md-5">
                                            <label for="nombre_contacto_financiero_1" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre_contacto_financiero_1" id="nombre_contacto_financiero_1" placeholder="Nombre">
                                        </div>

                                        <div class="mb-3 form-group col-md-5">
                                            <label for="celular_contacto_financiero_1" class="form-label">Celular</label>
                                            <input type="text" class="form-control" name="celular_contacto_financiero_1" id="celular_contacto_financiero_1" placeholder="Celular">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="telefono_contacto_financiero_1" class="form-label">Teléfono</label>
                                            <input type="text" class="form-control" name="telefono_contacto_financiero_1" id="telefono_contacto_financiero_1" placeholder="Teléfono">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="ext_contacto_financiero_1" class="form-label">Ext</label>
                                            <input type="text" class="form-control" name="ext_contacto_financiero_1" id="ext_contacto_financiero_1" placeholder="Extensión">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="correo_contacto_financiero_1" class="form-label">Correo Electrónico</label>
                                            <input type="email" class="form-control" name="correo_contacto_financiero_1" id="correo_contacto_financiero_1" placeholder="Correo Electrónico">
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="departamento_contacto_financiero_1">Departamento</label>
                                            <select name="departamento_contacto_financiero_1" id="departamento_contacto_financiero_1" class="form-control select2">
                                                <option value="">Selecciona un departamento</option>
                                                @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="municipio_contacto_financiero_1">Municipio</label>
                                            <select name="municipio_contacto_financiero_1" id="municipio_contacto_financiero_1" class="form-control select2">
                                                <option value="">Selecciona un municipio</option>
                                                @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h4 class="card-title">Datos Contacto Pagos y Tesorería</h4>
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="mb-3 form-group col-md-5">
                                            <label for="nombre_contacto_financiero_2" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name="nombre_contacto_financiero_2" id="nombre_contacto_financiero_2" placeholder="Nombre">
                                        </div>

                                        <div class="mb-3 form-group col-md-5">
                                            <label for="celular_contacto_financiero_2" class="form-label">Celular</label>
                                            <input type="text" class="form-control" name="celular_contacto_financiero_2" id="celular_contacto_financiero_2" placeholder="Celular">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="telefono_contacto_financiero_2" class="form-label">Teléfono</label>
                                            <input type="text" class="form-control" name="telefono_contacto_financiero_2" id="telefono_contacto_financiero_2" placeholder="Teléfono">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="ext_contacto_financiero_2" class="form-label">Ext</label>
                                            <input type="text" class="form-control" name="ext_contacto_financiero_2" id="ext_contacto_financiero_2" placeholder="Extensión">
                                        </div>

                                        <div class="mb-3 form-group col-md-4">
                                            <label for="correo_contacto_financiero_2" class="form-label">Correo Electrónico</label>
                                            <input type="email" class="form-control" name="correo_contacto_financiero_2" id="correo_contacto_financiero_2" placeholder="Correo Electrónico">
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="departamento_contacto_financiero_2">Departamento</label>
                                            <select name="departamento_contacto_financiero_2" id="departamento_contacto_financiero_2" class="form-control select2">
                                                <option value="">Selecciona un departamento</option>
                                                @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group selectChosen col-md-6">
                                            <label for="municipio_contacto_financiero_2">Municipio</label>
                                            <select name="municipio_contacto_financiero_2" id="municipio_contacto_financiero_2" class="form-control select2">
                                                <option value="">Selecciona un municipio</option>
                                                @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Puedes agregar más tarjetas para más contactos financieros si es necesario -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="submitButton">Guardar</button>
            </div>
        </div>
    </div>
</div>


<style>
    /* Estilos generales del formulario */
    .modal-content {
        border-radius: 10px;
    }

    h4 {
        font-size: 1.5rem;
        /* Tamaño de fuente */
        color: #333;
        /* Color del texto */
        margin-top: 20px;
        /* Espacio superior */
        margin-bottom: 10px;
        /* Espacio inferior */
        font-weight: bold;
        /* Negrita */
    }

    .modal-header {
        background-color: #007bff;
        color: #fff;
        border-bottom: none;
    }

    .modal-body {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    /* Campos requeridos */
    .required-label:after {
        content: " *";
        color: red;
    }

    /* Estilos para selects y archivos */
    .selectChosen select,
    .form-control-file input[type="file"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }

    /* Estilos para los botones */
    .modal-footer button {
        border: none;
        transition: background-color 0.3s ease-in-out;
    }

    .modal-footer .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .modal-footer .btn-primary:hover {
        background-color: #0056b3;
    }

    .modal-footer .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .modal-footer .btn-secondary:hover {
        background-color: #5a6268;
    }

    /* Responsividad */
    @media (max-width: 768px) {
        .modal-lg {
            max-width: 95% !important;
        }
    }
</style>
