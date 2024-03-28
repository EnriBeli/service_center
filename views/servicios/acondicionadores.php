<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acondicionadores de voltaje</title>
    <!-- Enlace a los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-16 offset-md-0">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <img src="../../includes/img/KGESolutions.png" href="" width="100">
                        MANTENIMIENTO PREVENTIVO ACONDICIONADORES DE VOLTAJE
                    </div>
                    <div class="card-body bg-light">
                        <form action="insertacondicionadores.php" method="POST">
                            <b>
                            <!-- Información del Folio -->
                            <div class="form-group">
                                <label for="..">Folio:</label>
                                <input type="text" class="form-control" name="folio" placeholder="Número de Folio" required="True">
                            </div>
                            <!-- Información del cliente -->

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Cliente:</label>
                                    <input type="text" class="form-control" name="cliente" placeholder="Nombre del cliente" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">UDN:</label>
                                    <input type="text" class="form-control" name="udn" placeholder="UDN" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha" placeholder="Fecha"required="True">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Modelo del Equipo:</label>
                                    <input type="text" class="form-control" name="modelo_equipo" placeholder="Modelo del Equipo" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">N/s:</label>
                                    <input type="text" class="form-control" name="n_s" placeholder="Numero de Serie" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Fabricante:</label>
                                    <input type="text" class="form-control" name="fabricante" placeholder="Fabricante" required="True">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Capacidad:</label>
                                    <input type="text" class="form-control" name="capacidad" placeholder="Capacidad" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Fases:</label>
                                    <input type="text" class="form-control" name="fases" placeholder="Fases" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Rack/torre:</label>
                                    <input type="text" class="form-control" name="rack_torre" placeholder="Rack/torre" required="True">
                                </div>
                            </div>
                            <div>
                                Periodicidad del matenimiento
                                <select name="perioridad_m" id="perioridad_m" class="form-select" aria-label="Default select example">
                                    <option value="Mensual">Mensual</option>
                                    <option value="Semestral">Semestral</option>
                                    <option value="Anal">Anual</option>
                                </select>
                            </div>       
                            <p class="text-center fw-bold ">MEDICIONES</p>
                            <div class="text-center">
                                <a class="form-group col-md-4 fw-bold ">TENCIÓN</a>
                                <a class="form-group col-md-4 fw-bold ">CORRIENTE</a>
                            </div>
                            <div class="input-group">
                                <span for=".." class="input-group-text">Entrada</span>
                                <input type="text" aria-label="Last name" class="form-control" name="entrada" placeholder="L1-L2">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada2" placeholder="L2-L3">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada3" placeholder="L1-L3">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada4" placeholder="L1-N">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada5" placeholder="L2-N">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada6" placeholder="L3-N">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada7" placeholder="IL1">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada8" placeholder="IL2">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada9" placeholder="IL3">
                                <input type="text" aria-label="Last name" class="form-control" name="entrada_obs" placeholder="OBSERVACIONES">
                            </div>
                            <div class="input-group">
                                <span for=".." class="input-group-text">Salida</span>
                                <input type="text" aria-label="First name" class="form-control" name="salida" placeholder="L1-L2">
                                <input type="text" aria-label="Last name" class="form-control" name="salida2" placeholder="L2-L3">
                                <input type="text" aria-label="Last name" class="form-control" name="salida3" placeholder="L1-L3">
                                <input type="text" aria-label="Last name" class="form-control" name="salida4" placeholder="L1-N">
                                <input type="text" aria-label="Last name" class="form-control" name="salida5" placeholder="L2-N">
                                <input type="text" aria-label="Last name" class="form-control" name="salida6" placeholder="L3-N">
                                <input type="text" aria-label="Last name" class="form-control" name="salida7" placeholder="IL1">
                                <input type="text" aria-label="Last name" class="form-control" name="salida8" placeholder="IL2">
                                <input type="text" aria-label="Last name" class="form-control" name="salida9" placeholder="IL3">
                                <input type="text" aria-label="Last name" class="form-control" name="salida_obs" placeholder="OBSERVACIONES">
                            </div>
                            <div class="input-group">
                                <span for=".." class="input-group-text">Neutro-GND</span>
                                <input type="text" aria-label="First name" class="form-control" name="neutro_gnd" placeholder="L1-L2">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gnd2" placeholder="L2-L3">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gnd3" placeholder="L1-L3">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gnd4" placeholder="L1-N">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gnd5" placeholder="L2-N">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gnd6" placeholder="L3-N">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gnd7" placeholder="IL1">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gnd8" placeholder="IL2">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gnd9" placeholder="IL3">
                                <input type="text" aria-label="Last name" class="form-control" name="neutro_gndobs" placeholder="OBSERVACIONES">

                            </div>
                            <div class="form-row">
                                <div>
                                    Empleo de Materiales
                                    <select name="empleo_m" class="form-select form-group" aria-label="Default select example">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>       
                                <div class="form-group col-md-4">
                                    <label for="..">Temperatura:</label>
                                    <input type="text" class="form-control" name="temperatura" placeholder="Tempreratura" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Humedad:</label>
                                    <input type="text" class="form-control" name="humedad" placeholder="Humedad" required="True">
                                </div>
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-4">
                                    <label for="..">Ubicacion:</label>
                                    <input type="text" class="form-control" name="ubicacion" placeholder="Ubicacion" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Tipo de Carga:</label>
                                    <input type="text" class="form-control" name="tipo_carga" placeholder="Tipo de Carga" required="True">
                                </div>
                                <div>
                                    Registro
                                    <select name="registro" class="form-select " aria-label="Default select example">
                                        <option value="Nuevo">Nuevo</option>
                                        <option value="Seguimiento">Seguimiento</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-4">
                                    La Carga Fue Tirada
                                    <select name="carga_tirada" class="form-select" aria-label="Default select example">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div> 
                                <div class="form-group col-md-4">
                                    Estado del Trabajo
                                    <select name="estado_trabajo" class="form-select" aria-label="Default select example">
                                        <option value="Terminado">Terminado</option>
                                        <option value="Incompleto">Incompleto</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Estado del Equipo
                                    <select name="estado_equipo" class="form-select" aria-label="Default select example">
                                        <option value="En Linea">En Linea</option>
                                        <option value="Fuera de Linea">Fuera de Linea</option>
                                        <option value="En Espera de Partes">En Espera da Partes</option>
                                    </select>
                                </div> 
                            </div>
                            <p class="text-center fw-bold ">ACTIVIDADES</p>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Tipo de Mantenimiento
                                    <select name="tipo_mantenimiento" class="form-select" aria-label="Default select example">
                                        <option value="Mantenimiento Preventivo">Mantenimiento Preventivo</option>
                                        <option value="Mantenimiento Correctivo">Mantenimiento Correctivo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Revision de Parametros Electricos
                                    <select name="revicion_pe" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="revicionpe_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Limpieza Genreal de la Unidad
                                    <select name="limpieza_gu" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="limpiezagu_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Verificacion del Funcionamiento de Indicadores Visuales
                                    <select name="verificacion_fiv" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="verificacionfiv_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Revision de Fusibles de CA de Entrada y Salida CA
                                    <select name="revision_fces" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="revicionfces_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Verifiacion del Funcionamiento de la Targeta de Potencia
                                    <select name="verificacion_ftp" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="verificacionftp_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Verifiacion de la Regulacion de Voltaje
                                    <select name="verificacion_ru" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="verificacionru_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Medicion de las Condiciones Ambientales
                                    <select name="medicion_ca" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="medicionca_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Reaprietes de Conexiones Tanto de Entrada y Salida
                                    <select name="reaprietes_ctes" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="reaprietesctes_obs" placeholder="Comentario">
                            </div>
                            <p class="text-center fw-bold ">PRUEBAS DE OPERACIONES</p>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Cierre de Conexion de Entrada Y Salida de Voltaje en Contactos
                                    <select name="cierre_cesvc" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="cierrecesvc_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Prueba de Corte de Energia y Reestablecimiento Automatico
                                    <select name="prueba_cera" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="pruebacera_obs" placeholder="Comentario">
                            </div>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    * Encendido y Apagado Normal
                                    <select name="encendido_am" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group col-md-4">
                                <label for="..">Comentario:</label>
                                <input type="text" class="form-control" name="encendidoam_obs" placeholder="Comentario">
                            </div>
                            <p class="text-center fw-bold ">COMENTARIOS</p>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Agregue Sus Comentarios</span>
                                <input type="text" class="form-control" name="comentario_f" placeholder="---" aria-label="Username" aria-describedby="addon-wrapping" required="True">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Imagen antes:</label>
                                    <input type="text" class="form-control" name="imagen_antes" placeholder="Imagen" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Imagen durente:</label>
                                    <input type="text" class="form-control" name="imagen_durante" placeholder="Iamagen" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Imagen despues:</label>
                                    <input type="text" class="form-control" name="imagen_despues" placeholder="Imagen" required="True">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Nombre del ing/técn:</label>
                                    <input type="text" class="form-control" name="nombre_firmaing" placeholder="Nombre del ing/técn" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Nombre de Recibido:</label>
                                    <input type="text" class="form-control" name="nombre_firmarci" placeholder="Nombre de Recibido" required="True">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha_actual" placeholder="Fecha" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Lugar:</label>
                                    <input type="text" class="form-control" name="lugar_actual" placeholder="Lugar" required="True">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a href="../../views/users/index.php" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
