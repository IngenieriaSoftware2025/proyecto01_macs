<div class="container py-5">
    <div class="row mb-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body bg-gradient" style="background: linear-gradient(90deg, #f8fafc 60%, #e3f2fd 100%);">
                    <div class="mb-4 text-center">
                        <h5 class="fw-bold text-secondary mb-2">¡Bienvenido a Nuestra Aplicación!</h5>
                        <h3 class="fw-bold text-primary mb-0">ASIGNACIÓN DE PERMISOS</h3>
                    </div>
                    <form id="formAsignacion" class="p-4 bg-white rounded-3 shadow-sm border">
                        <input type="hidden" id="asignacion_id" name="asignacion_id">
                        <input type="hidden" id="asignacion_fecha" name="asignacion_fecha" value="">
                        <input type="hidden" id="asignacion_situacion" name="asignacion_situacion" value="1">
                        
                        <div class="row g-4 mb-3">
                            <div class="col-md-6">
                                <label for="asignacion_usuario_id" class="form-label">Usuario</label>
                                <select class="form-control form-control-lg" id="asignacion_usuario_id" name="asignacion_usuario_id" required>
                                    <option value="">Seleccione un usuario</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="asignacion_app_id" class="form-label">Aplicación</label>
                                <select class="form-control form-control-lg" id="asignacion_app_id" name="asignacion_app_id" required>
                                    <option value="">Seleccione una aplicación</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row g-4 mb-3">
                            <div class="col-md-6">
                                <label for="asignacion_permiso_id" class="form-label">Permiso</label>
                                <select class="form-control form-control-lg" id="asignacion_permiso_id" name="asignacion_permiso_id" required>
                                    <option value="">Seleccione un permiso</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="asignacion_usuario_asigno" class="form-label">Usuario que Asigna</label>
                                <select class="form-control form-control-lg" id="asignacion_usuario_asigno" name="asignacion_usuario_asigno" required>
                                    <option value="">Seleccione quién asigna</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row g-4 mb-3">
                            <div class="col-12">
                                <label for="asignacion_motivo" class="form-label">Motivo de la Asignación</label>
                                <textarea class="form-control form-control-lg" id="asignacion_motivo" name="asignacion_motivo" rows="3" placeholder="Ingrese el motivo de la asignación del permiso" required></textarea>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-center gap-3">
                            <button class="btn btn-success btn-lg px-4 shadow" type="submit" id="BtnGuardar">
                                <i class="bi bi-save me-2"></i>Guardar
                            </button>
                            <button class="btn btn-warning btn-lg px-4 shadow d-none" type="button" id="BtnModificar">
                                <i class="bi bi-pencil-square me-2"></i>Modificar
                            </button>
                            <button class="btn btn-secondary btn-lg px-4 shadow" type="reset" id="BtnLimpiar">
                                <i class="bi bi-eraser me-2"></i>Limpiar
                            </button>
                            <button class="btn btn-primary btn-lg px-4 shadow" type="button" id="BtnBuscarAsignaciones">
                                <i class="bi bi-search me-2"></i>Buscar Asignaciones
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5" id="seccionTabla" style="display: none;">
        <div class="col-lg-11">
            <div class="card shadow-lg border-primary rounded-4">
                <div class="card-body">
                    <h3 class="text-center text-primary mb-4">Asignaciones de permisos en la base de datos</h3>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered align-middle rounded-3 overflow-hidden w-100" id="TableAsignaciones" style="width: 100% !important;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Usuario</th>
                                    <th>Aplicación</th>
                                    <th>Permiso</th>
                                    <th>Clave Permiso</th>
                                    <th>Asignado por</th>
                                    <th>Motivo</th>
                                    <th>Fecha</th>
                                    <th>Fecha Revocación</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="<?= asset('build/js/asignacionpermisos/index.js') ?>"></script>