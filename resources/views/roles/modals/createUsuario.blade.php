<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="createRolModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <!-- Contenido de las pestañas -->
            <div class="tab-content" id="myTabContent">
                <!-- Formulario de Datos del Empleado -->
                <div class="tab-pane fade show active" id="employee" role="tabpanel" aria-labelledby="employee-tab">



                    <form action="{{ route('empleados.store') }}" role="form" method="POST" enctype="multipart/form-data" id="createEmployeeForm">
                        @csrf

                        <div class="row">
                            <!-- Columna 1 -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre Completo:</label>
                                    <input type="text" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" id="nombre" name="nombre" value="{{ old('nombre') }}">
                                    @if ($errors->has('nombre'))
                                        <span class="text-danger">{{ $errors->first('nombre') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="tipo_documento">Tipo de Documento:</label>
                                    <select class="form-control @error('tipo_documento') is-invalid @enderror" id="tipo_documento" name="tipo_documento" required>
                                        <option value="Cédula">Cédula</option>
                                        <option value="Cédula Extranjeria">Cédula Extranjería</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                    </select>
                                    @error('tipo_documento')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="num_documento">Número de Documento:</label>
                                    <input type="text" class="form-control @error('num_documento') is-invalid @enderror" id="num_documento" name="num_documento" value="{{ old('num_documento') }}" required>
                                    @error('num_documento')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="correo">Correo:</label>
                                    <input type="email" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo" value="{{ old('correo') }}" required>
                                    @error('correo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="num_telefonico">Número Telefónico:</label>
                                    <input type="tel" class="form-control @error('num_telefonico') is-invalid @enderror" id="num_telefonico" name="num_telefonico" value="{{ old('num_telefonico') }}" required>
                                    @error('num_telefonico')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Columna 2 -->
                            <div class="col-md-6">
                                <!-- Dirección -->
                                <div class="form-group">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{ old('direccion') }}" required>
                                    @error('direccion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Ciudad -->
                                <div class="form-group">
                                    <label for="ciudad">Ciudad:</label>
                                    <input type="text" class="form-control @error('ciudad') is-invalid @enderror" id="ciudad" name="ciudad" value="{{ old('ciudad') }}" required>
                                    @error('ciudad')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Método de Pago -->
                                <div class="form-group">
                                    <label for="metodo_pago">Método de Pago:</label>
                                    <input type="text" class="form-control @error('metodo_pago') is-invalid @enderror" id="metodo_pago" name="metodo_pago" value="{{ old('metodo_pago') }}" required>
                                    @error('metodo_pago')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Entidad Bancaria -->
                                <div class="form-group">
                                    <label for="enti_bancaria">Entidad Bancaria:</label>
                                    <input type="text" class="form-control @error('enti_bancaria') is-invalid @enderror" id="enti_bancaria" name="enti_bancaria" value="{{ old('enti_bancaria') }}" required>
                                    @error('enti_bancaria')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Tipo de Cuenta -->
                                <div class="form-group">
                                    <label for="tipo_cuenta">Tipo de Cuenta:</label>
                                    <input type="text" class="form-control @error('tipo_cuenta') is-invalid @enderror" id="tipo_cuenta" name="tipo_cuenta" value="{{ old('tipo_cuenta') }}" required>
                                    @error('tipo_cuenta')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Número de Cuenta -->
                                <div class="form-group">
                                    <label for="num_cuenta">Número de Cuenta:</label>
                                    <input type="text" class="form-control @error('num_cuenta') is-invalid @enderror" id="num_cuenta" name="num_cuenta" value="{{ old('num_cuenta') }}" required>
                                    @error('num_cuenta')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <h3>Cargar Documentos</h3><br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Campos de tipo file -->
                                <div class="mb-3 form-group col-md-3">
                                    <label for="hdv" class="form-label" style="font-size: 10px;">Hoja de vida:</label>
                                    <input type="file" class="form-control-file d-none @error('hdv') is-invalid @enderror" id="hdv" accept=".doc, .docx, .jpg, .png, .pdf" style="display: none" name="hdv" multiple />
                                    <br />
                                    <label for="hdv" id="cv_label" style="cursor: pointer">
                                        <img src="{{ asset('imagenes/cv.png') }}" class="img-fluid" alt="no-image" width="100" />
                                    </label>
                                    @error('hdv')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Certificado laboral -->
                                <div class="mb-3 form-group col-md-3">
                                    <label for="certificado_laboral" class="form-label" style="font-size: 10px;">Certificado laboral:</label>
                                    <input type="file" class="form-control-file d-none @error('certificado_laboral') is-invalid @enderror" id="certificado_laboral" accept=".doc, .docx, .jpg, .png, .pdf" style="display: none" name="certificado_laboral" multiple />
                                    <br />
                                    <label for="certificado_laboral" id="cv_label" style="cursor: pointer">
                                        <img src="{{ asset('imagenes/work_certificate.png') }}" class="img-fluid" alt="no-image" width="100" />
                                    </label>
                                    @error('certificado_laboral')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Cédula/Documento -->
                                <div class="mb-3 form-group col-md-3">
                                    <label for="cedula_doc" class="form-label" style="font-size: 10px;">Cédula/Documento:</label>
                                    <input type="file" class="form-control-file d-none @error('cedula_doc') is-invalid @enderror" id="cedula_doc" accept=".doc, .docx, .jpg, .png, .pdf" style="display: none" name="cedula_doc" multiple />
                                    <br />
                                    <label for="cedula_doc" id="cv_label" style="cursor: pointer">
                                        <img src="{{ asset('imagenes/id_card.png') }}" class="img-fluid" alt="no-image" width="100" />
                                    </label>
                                    @error('cedula_doc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Certificados Estudios -->
                                <div class="mb-3 form-group col-md-3">
                                    <label for="certificados_estudios" class="form-label" style="font-size: 10px;">Certificados Estudios:</label>
                                    <input type="file" class="form-control-file d-none @error('certificados_estudios') is-invalid @enderror" id="certificados_estudios" accept=".doc, .docx, .jpg, .png, .pdf" style="display: none" name="certificados_estudios" multiple />
                                    <br />
                                    <label for="certificados_estudios" id="cv_label" style="cursor: pointer">
                                        <img src="{{ asset('imagenes/study_stands.png') }}" class="img-fluid" alt="no-image" width="100" />
                                    </label>
                                    @error('certificados_estudios')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Columna 2 con más campos de tipo file -->
                            <div class="col-md-6">
                                <!-- Examen Médico -->
                                <div class="mb-3 form-group col-md-3">
                                    <label for="examen_medico" class="form-label" style="font-size: 10px;">Examen Médico:</label>
                                    <input type="file" class="form-control-file d-none @error('examen_medico') is-invalid @enderror" id="examen_medico" accept=".doc, .docx, .jpg, .png, .pdf" style="display: none" name="examen_medico" multiple />
                                    <br />
                                    <label for="examen_medico" id="cv_label" style="cursor: pointer">
                                        <img src="{{ asset('imagenes/medical_exam.png') }}" class="img-fluid" alt="no-image" width="100" />
                                    </label>
                                    @error('examen_medico')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Libreta Militar -->
                                <div class="mb-3 form-group col-md-3">
                                    <label for="libreta_militar" class="form-label" style="font-size: 10px;">Libreta Militar:</label>
                                    <input type="file" class="form-control-file d-none @error('libreta_militar') is-invalid @enderror" id="libreta_militar" accept=".doc, .docx, .jpg, .png, .pdf" style="display: none" name="libreta_militar" multiple />
                                    <br />
                                    <label for="libreta_militar" id="cv_label" style="cursor: pointer">
                                        <img src="{{ asset('imagenes/military_passbook.png') }}" class="img-fluid" alt="no-image" width="100" />
                                    </label>
                                    @error('libreta_militar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Antecedentes -->
                                <div class="mb-3 form-group col-md-3">
                                    <label for="antecedentes" class="form-label" style="font-size: 10px;">Antecedentes:</label>
                                    <input type="file" class="form-control-file d-none @error('antecedentes') is-invalid @enderror" id="antecedentes" accept=".doc, .docx, .jpg, .png, .pdf" style="display: none" name="antecedentes" multiple />
                                    <br />
                                    <label for="antecedentes" id="cv_label" style="cursor: pointer">
                                        <img src="{{ asset('imagenes/history.png') }}" class="img-fluid" alt="no-image" width="100" />
                                    </label>
                                    @error('antecedentes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

                <!-- Formulario de Datos del Contrato -->
                <div class="tab-pane fade" id="contract" role="tabpanel" aria-labelledby="contract-tab">
                    <form  role="form" method="POST" enctype="multipart/form-data" id="contractForm">
                        @csrf

                        <div class="form-group">
                            <label for="tipoContrato">Tipo de Contrato:</label>
                            <input type="text" class="form-control @error('tipoContrato') is-invalid @enderror" id="tipoContrato" name="tipoContrato" value="{{ old('tipoContrato') }}" required>
                            @error('tipoContrato')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fechaInicio">Fecha de Inicio:</label>
                            <input type="date" class="form-control @error('fechaInicio') is-invalid @enderror" id="fechaInicio" name="fechaInicio" value="{{ old('fechaInicio') }}" required>
                            @error('fechaInicio')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fechaFinalizacion">Fecha de Finalización:</label>
                            <input type="date" class="form-control @error('fechaFinalizacion') is-invalid @enderror" id="fechaFinalizacion" name="fechaFinalizacion" value="{{ old('fechaFinalizacion') }}" required>
                            @error('fechaFinalizacion')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sueldo">Sueldo:</label>
                            <input type="text" class="form-control @error('sueldo') is-invalid @enderror" id="sueldo" name="sueldo" value="{{ old('sueldo') }}" required>
                            @error('sueldo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cargo">Cargo:</label>
                            <input type="text" class="form-control @error('cargo') is-invalid @enderror" id="cargo" name="cargo" value="{{ old('cargo') }}" required>
                            @error('cargo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr> <!-- Línea divisoria entre los campos del contrato y aportes de seguridad social -->

                        <h4>Aportes De Seguridad Social</h4> <br>

                        <div class="form-group">
                            <label for="tipoCotizante">Tipo de Cotizante:</label>
                            <select class="form-control @error('tipoCotizante') is-invalid @enderror" id="tipoCotizante" name="tipoCotizante" required>
                                <option value="Independiente">Independiente</option>
                                <option value="Contrato Laboral">Contrato Laboral</option>
                                <!-- Agrega más opciones según tus necesidades -->
                            </select>
                            @error('tipoCotizante')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fondoSalud">Fondo de Salud:</label>
                            <input type="text" class="form-control @error('fondoSalud') is-invalid @enderror" id="fondoSalud" name="fondoSalud" value="{{ old('fondoSalud') }}" required>
                            @error('fondoSalud')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fondoPensiones">Fondo de Pensiones:</label>
                            <input type="text" class="form-control @error('fondoPensiones') is-invalid @enderror" id="fondoPensiones" name="fondoPensiones" value="{{ old('fondoPensiones') }}" required>
                            @error('fondoPensiones')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fondoCesantias">Fondo de Cesantías:</label>
                            <input type="text" class="form-control @error('fondoCesantias') is-invalid @enderror" id="fondoCesantias" name="fondoCesantias" value="{{ old('fondoCesantias') }}" required>
                            @error('fondoCesantias')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cajaCompensacion">Caja de Compensación:</label>
                            <input type="text" class="form-control @error('cajaCompensacion') is-invalid @enderror" id="cajaCompensacion" name="cajaCompensacion" value="{{ old('cajaCompensacion') }}" required>
                            @error('cajaCompensacion')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ARL">ARL:</label>
                            <input type="text" class="form-control @error('ARL') is-invalid @enderror" id="ARL" name="ARL" value="{{ old('ARL') }}" required>
                            @error('ARL')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Agregar más campos de formulario aquí con el mismo patrón -->

                    </form>
                </div>
            </div>

            <!-- Botones del modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="guardarEmpleado">Guardar</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Establecer la altura máxima del modal */
    .modal-lg {
        max-height: 85vh;
        /* Ajusta la altura máxima según tus necesidades */
    }

    /* Estilos para el formulario */
    #createEmployeeForm,
    #contractForm {
        padding: 20px;
        background-color: #f8f9fa;
        /* Color de fondo */
    }

    /* Estilos para los campos de entrada */
    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    /* Estilos para los botones */
    .btn-primary {
        background-color: #007bff;
        /* Color de fondo del botón primario */
        color: #fff;
        /* Color del texto del botón primario */
    }

    .btn-secondary {
        background-color: #6c757d;
        /* Color de fondo del botón secundario */
        color: #fff;
        /* Color del texto del botón secundario */
    }

    /* Estilos para el modal */
    .modal-content {
        border-radius: 10px;
    }

    .modal-header {
        background-color: #007bff;
        /* Color de fondo de la cabecera del modal */
        color: #fff;
        /* Color del texto de la cabecera del modal */
        border-bottom: none;
        /* Sin borde inferior en la cabecera */
    }

    /* Estilos para los campos de tipo file */
    .form-control-file {
        padding: 10px 0;
    }
</style>

<script>
    var storeEmpleadoUrl = "{{ route('empleados.store') }}";

</script>
