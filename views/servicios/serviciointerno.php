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
                        SERVICIOS
                    </div >
                    <div class="card-body bg-light">
                        <form action="insertserviciointerno.php" method="POST"enctype="multipart/form-data">
                            <b>

                            <!-- Información del cliente -->

                            <div class="form-row">
                            <!-- Información del Folio -->
                                <div class="form-group col-md-4">
                                    <label for="..">Cliente:</label>
                                    <input type="text" class="form-control" name="cliente" placeholder="Nombre del cliente" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Contacto(s):</label>
                                    <input type="text" class="form-control" name="contacto" placeholder="Contacto" required="True">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha" placeholder="Fecha" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">TEL/EXT:</label>
                                    <input type="text" class="form-control" name="tel_ext" placeholder="Teléfono o extensión" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="True">
                                </div>
                            </div>
                            <hr>
                            <p class="text-center fw-bold ">UBICACION DEL EQUIPO Y CONDICIONES AMBIENTALES</p>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">UDN:</label>
                                    <input type="text" class="form-control" name="udn" placeholder="UDN" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Responsables UDN:</label>
                                    <input type="text" class="form-control" name="responsables_udn" placeholder="Responsables UDN" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Temperatura:</label>
                                    <input type="text" class="form-control" name="temperatura" placeholder="Temperatura" required="True">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Ubicación Equipo:</label>
                                    <input type="text" class="form-control" name="ubicacion_equipo" placeholder="Ubicación de Equipo" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Humedad:</label>
                                    <input type="text" class="form-control" name="humedad" placeholder="Humedad" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Cuenta con Aire Acondicionado:</label>
                                    <input type="text" class="form-control" name="aire_acondicionado" placeholder="Cuenta con Aire Acondicionado" required="True">
                                </div>
                            </div>
                            <hr>
                            <p class="text-center fw-bold ">INFORMACION DEL EQUIPO / UPS REGULADOR</p>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Modelo:</label>
                                    <input type="text" class="form-control" name="modelo" placeholder="Modelo" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Marca:</label>
                                    <input type="text" class="form-control" name="marca" placeholder="Marca" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Serie:</label>
                                    <input type="text" class="form-control" name="serie" placeholder="Serie" required="True">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Activo Fijo #:</label>
                                    <input type="text" class="form-control" name="activo_fijo" placeholder="Activo Fijo" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Número de Fases:</label>
                                    <input type="text" class="form-control" name="num_fase" placeholder="Número de Fases" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="capacidadV">Capacidad en VA/KVA:</label>
                                    <input type="text" class="form-control" name="capacidad_vakva" placeholder="Capacidad en VA/KVA" required="True">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Cuenta con BYPASS(SI/NO):</label>
                                    <input type="text" class="form-control" name="cuenta_bypass" placeholder="Cuenta con BYPASS" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Targeta de Monitoreo (RED):</label>
                                    <input type="text" class="form-control" name="tageta_monitoreo" placeholder="Targeta de Monitoreo" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">ip Taregeta de Monitoreo:</label>
                                    <input type="text" class="form-control" name="ip_tarjeta" placeholder="ip Taregeta de Monitoreo"  required="True">
                                </div>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-text col-md-2">V Nom Input (Vac)</span>
                                <input type="text" aria-label="First name" class="form-control col-md-1" name="vninput_f1" placeholder="F1">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="vninput_f2" placeholder="F2">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="vninput_f3" placeholder="F3">
                                <input type="text" aria-label="Last name" class="form-control col-md-8" name="vninput_com" placeholder="OBSERVACIONES">
                            </div>
                            <br>
                            <div class="input-group ">
                                <span class="input-group-text col-md-2">V Nom Output (Vac)</span>
                                <input type="text" aria-label="First name" class="form-control col-md-1" name="vnoutput_f1" placeholder="F1">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="vnoutput_f2" placeholder="F2">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="vnoutput_f3" placeholder="F3">
                                <input type="text" aria-label="Last name" class="form-control col-md-8" name="vnoutput_com" placeholder="OBSERVACIONES">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-text col-md-2">I Nom Input (Aac)</span>
                                <input type="text" aria-label="First name" class="form-control col-md-1" name="ininput_f1" placeholder="F1">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="ininput_f2" placeholder="F2">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="ininput_f3" placeholder="F3">
                                <input type="text" aria-label="Last name" class="form-control col-md-8" name="ininput_com" placeholder="OBSERVACIONES">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-text col-md-2">V Medido Entrada (Vac)</span>
                                <input type="text" aria-label="First name" class="form-control col-md-1" name="vmentrada_f1" placeholder="F1">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="vmentrada_f2" placeholder="F2">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="vmentrada_f3" placeholder="F3">
                                <input type="text" aria-label="Last name" class="form-control col-md-8" name="vmentrada_com" placeholder="OBSERVACIONES">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-text col-md-2">V Medido Salida (Vac)</span>
                                <input type="text" aria-label="First name" class="form-control col-md-1" name="vmsalida_f1" placeholder="F1">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="vmsalida_f2" placeholder="F2">
                                <input type="text" aria-label="Last name" class="form-control col-md-1" name="vmsalida_f3" placeholder="F3">
                                <input type="text" aria-label="Last name" class="form-control col-md-8" name="vmsalida_com" placeholder="OBSERVACIONES">
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="..">Tipo de Baterías</label>
                                    <input type="text" class="form-control" name="tipo_bateria" placeholder="Tipo de Baterías">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="..">Voltaje Baterías Vcd:</label>
                                    <input type="text" class="form-control" name="voltaje_bateria" placeholder="Voltaje Baterías Vcd">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="..">Cantidad de Baterías</label>
                                    <input type="text" class="form-control" name="cantidad_baterias" placeholder="Cantidad de Baterías">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="..">Fecha de Baterías</label>
                                    <input type="date" class="form-control" name="fecha_bateria" placeholder="Fecha de Baterías">
                                </div>
                            </div>
                            <hr>
                            <p class="text-center fw-bold ">INFORMACION DEL EQUIPO / BANCO DE BATERIAS (Si Aplica)</p>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Marca:</label>
                                    <input type="text" class="form-control" name="marca_banco" placeholder="Marca">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Modelo:</label>
                                    <input type="text" class="form-control" name="modelo_banco" placeholder="Modelo">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Serie:</label>
                                    <input type="text" class="form-control" name="serie_banco" placeholder="Serie">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="..">Activo Fijo #:</label>
                                    <input type="text" class="form-control" name="activofijo_banco" placeholder="Activo fojo">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="..">Capacidad en HA:</label>
                                    <input type="text" class="form-control" name="capacidadha_banco" placeholder="Capacidad en HA">
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Número de Baterías</label>
                                    <input type="text" class="form-control" name="numerobateria_banco" placeholder="Número de Batería">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">I Output (A)</label>
                                    <input type="text" class="form-control" name="ioutput_banco" placeholder="I Output (A)">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Fecha de Instalación de Baterías</label>
                                    <input type="date" class="form-control" name="fechainstalacionbateria_banco" placeholder="Fecha de Instalación de Baterías">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="..">Equipo con Garantia: (Si No)</label>
                                    <input type="text" class="form-control" name="garantia_banco" placeholder="Equipo con Garantia">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="..">Tipo de Baterías</label>
                                    <input type="text" class="form-control" name="tipobateria_banco" placeholder="Tipo de Baterías">
                                </div>
                            </div>
                            <br>
                            <p class="text-center fw-bold ">ACTIVIDADES</p>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Previo mantenimiento: Toma de Fotografías del Antes, Durante y Después del estado del UPS, incluyendo pantallas.
                                    <select name="listado1" class="form-select"  aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control" name="listado1_obs" placeholder="Comentario">
                                </div>
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Apagado y desconexión de la carga (Por parte del cliente), colocación del equipo en modo bypass de
                                    mantenimiento y desenergizado del equipo.
                                    <select name="listado2" class="form-select"  aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control" name="listado2_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Retiro de coberturas y revisión visual de componentes eléctricos y electrónicos.
                                    <select name="listado3" class="form-select" aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control" name="listado3_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Limpieza general interna y externa del equipo.
                                    <select name="listado4" class="form-select"    aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control" name="listado4_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Revisión y limpieza de ventiladores y paneles
                                    <select name="listado5" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado5_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Revisión de los parámetros de medición y alarmas.
                                    <select  name="listado6" class="form-select"  aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regualar">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado6_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Evaluación del registro del inversor y registro de alarmas.
                                    <select name="listado7" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regualar">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado7_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Revisión y ajuste de las condiciones de operación: Entrada y salida de voltaje. (Parámetros Eléctricos)
                                    <select name="listado8" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regualar">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado8_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Inspección visual externa, prueba de conexiones, alimentación del UPS, internas y externas
                                    <select name="listado9" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado9_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Inspección visual de todos los componentes electrónicos del UPS, tanto ópticos como acústicos
                                    <select name="listado10" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado10_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Limpieza del módulo de control y electrónica, mediante aspirado con aire comprimido.
                                    <select name="listado11" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado11_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Actualizaciones del software de control. Prueba del software de control remoto del UPS, en caso de existir.
                                    <select name="listado12" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado12_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Inspección de la ubicación y ambiente de trabajo de los equipos, temperatura, humedad, condensaciones, etc.
                                    <select  name="listado13" class="form-select"  aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado13_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Revisión de la estabilidad y estado de carga de la batería, incluyendo una prueba funcional mediante corte del
                                    suministro eléctrico (previo aviso a los usuarios). Comprobación del voltaje en cada una de las celdas del banco de
                                    baterías.
                                    <select name="listado14" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado14_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Verificación y eliminación de sulfataciones.
                                    <select name="listado15" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value=" Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado15_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Revisión y apriete de terminales flojas.
                                    <select name="listado16" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado16_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Engrasado en terminales de baterías, (cuando sea necesario).
                                    <select name="listado17" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado17_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Verificación de voltaje en vacío.
                                    <select name="listado18" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado18_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Verificación del voltaje de batería, aplicando descarga.
                                    <select name="listado19" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado19_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Revisión del funcionamiento del Inversor
                                    <select name="listado20" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado20_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Revisión del funcionamiento del Rectificador
                                    <select name="listado21" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado21_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Generación de un reporte por escrito con las observaciones correspondientes
                                    <select name="listado22" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado22_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Final mantenimiento: Toma de Fotografías de la entrega del equipo posterior al Servicio de Mantenimiento.

                                    <select name="listado23" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado23_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <div class="form-row">      
                                <div class="form-group col-md-6">
                                    Reaprietes de Conexiones Tanto de Entrada y Salida
                                    <select name="listado24" class="form-select"   aria-label="Default select example">
                                        <option value="Normal">Normal</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Malo">Malo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Comentario:</label>
                                    <input type="text" class="form-control"  name="listado24_obs" placeholder="Comentario">
                                </div> 
                            </div>
                            <hr>
                            <p class="text-center fw-bold">COMENTARIOS</p>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text">Agregue Sus Comentarios</span>
                                <input type="text" class="form-control" name="comentario_final" placeholder="---" aria-label="" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text">Notas Importantes</span>
                                <input type="text" class="form-control" name="notas_importantes" placeholder="---" aria-label="" aria-describedby="addon-wrapping">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="..">Nombre del ing/técn:</label>
                                    <input type="text" class="form-control"  name="nombre_ingtecnico" placeholder="Nombre del ing/técn" required="True" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="..">Recibió Servicio a satisfacción: IMA - TI:</label>
                                    <input type="text" class="form-control"  name="nombre_recibido" placeholder="Recibió Servicio a satisfacción: IMA - TI" required="True">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nombrearea">Nombre Área:</label>
                                    <input type="text" class="form-control"  name="nombre_area" placeholder="Nombre Area" required="True">
                                </div>
                            </div>
                            <hr>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <h3>Evidencia Antes</h3>
                                    <input type="file" name="evidencia_antes1" id="evidencia_antes1" required="True" accept="image/*"><br><br>
                                    <input type="file" name="evidencia_antes2" id="evidencia_antes2" required="True" accept="image/*"><br><br>
                                    <input type="file" name="evidencia_antes3" id="evidencia_antes3" required="True" accept="image/*"><br><br>
                                </div>
                                <div class="form-group col-md-4">
                                    <h3>Evidencia Durante</h3>
                                    <input type="file" name="evidencia_durante1" id="evidencia_durante1" required="True" accept="image/*"><br><br>
                                    <input type="file" name="evidencia_durante2" id="evidencia_durante2" required="True" accept="image/*"><br><br>
                                    <input type="file" name="evidencia_durante3" id="evidencia_durante3" required="True" accept="image/*"><br><br>
                                </div>
                                <div class="form-group col-md-4">
                                    <h3>Evidencia Después</h3>
                                    <input type="file" name="evidencia_despues1" id="evidencia_despues1" required="True" accept="image/*"><br><br>
                                    <input type="file" name="evidencia_despues2" id="evidencia_despues2" required="True" accept="image/*"><br><br>
                                    <input type="file" name="evidencia_despues3" id="evidencia_despues3" required="True" accept="image/*"><br><br>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-secondary">Enviar</button>
                            <a href="../../views/users/index.php" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script>
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function() {
                if (this.files.length > 0) {
                    this.style.border = '3px solid green';
                } else {
                    this.style.border = '';
                }
            });
        });
    </script>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
