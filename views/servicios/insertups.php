<?php
include("../../includes/conexion/db.php");



$folio=$_POST['folio'];
$cliente=$_POST['cliente'];
$udn=$_POST['udn'];
$fecha=$_POST['fecha'];
$modelo_equipo=$_POST['modelo_equipo'];
$n_s=$_POST['n_s'];
$fabricante=$_POST['fabricante'];
$capacidad=$_POST['capacidad'];
$fases=$_POST['fases'];
$rack=$_POST['rack_torre'];
$perioridad_m=$_POST['perioridad_m'];
$entrada=$_POST['entrada'];
$entrada2=$_POST['entrada2'];
$entrada3=$_POST['entrada3'];
$entrada4=$_POST['entrada4'];
$entrada5=$_POST['entrada5'];
$entrada6=$_POST['entrada6'];
$entrada7=$_POST['entrada7'];
$entrada8=$_POST['entrada8'];
$entrada9=$_POST['entrada9'];
$entrada_obs=$_POST['entrada_obs'];
$salida=$_POST['salida'];
$salida2=$_POST['salida2'];
$salida3=$_POST['salida3'];
$salida4=$_POST['salida4'];
$salida5=$_POST['salida5'];
$salida6=$_POST['salida6'];
$salida7=$_POST['salida7'];
$salida8=$_POST['salida8'];
$salida9=$_POST['salida9'];
$salida_obs=$_POST['salida_obs'];
$neutro_gnd=$_POST['neutro_gnd'];
$neutro_gnd2=$_POST['neutro_gnd2'];
$neutro_gnd3=$_POST['neutro_gnd3'];
$neutro_gnd4=$_POST['neutro_gnd4'];
$neutro_gnd5=$_POST['neutro_gnd5'];
$neutro_gnd6=$_POST['neutro_gnd6'];
$neutro_gnd7=$_POST['neutro_gnd7'];
$neutro_gnd8=$_POST['neutro_gnd8'];
$neutro_gnd9=$_POST['neutro_gnd9'];
$neutro_gndobs=$_POST['neutro_gndobs'];
$empleo_m=$_POST['empleo_m'];
$temperatura=$_POST['temperatura'];
$humedad=$_POST['humedad'];
$ubicacion=$_POST['ubicacion'];
$tipo_carga=$_POST['tipo_carga'];
$registro=$_POST['registro'];
$carga_tirada=$_POST['carga_tirada'];
$estado_trabajo=$_POST['estado_trabajo'];
$estado_equipo=$_POST['estado_equipo'];
$tipo_mantenimiento=$_POST['tipo_mantenimiento'];
$condiciones_at=$_POST['condiciones_at'];
$condicionesat_obs=$_POST['condicionesat_obs'];
$revision_pe=$_POST['revision_pe'];
$revicionpe_obs=$_POST['revicionpe_obs'];
$limpieza_g=$_POST['limpieza_g'];
$limpiezag_obs=$_POST['limpiezag_obs'];
$revision_bb=$_POST['revision_bb'];
$revicionbb_obs=$_POST['revicionbb_obs'];
$estado_b=$_POST['estado_b'];
$estadob_obs=$_POST['estadob_obs'];
$verificacion_v=$_POST['verificacion_v'];
$verificacionv_obs=$_POST['verificacionv_obs'];
$funcionamiento_v=$_POST['funcionamiento_v'];
$funcionamientov_obs=$_POST['funcionamientov_obs'];
$funcionamiento_in=$_POST['funcionamiento_in'];
$funcionamientoin_obs=$_POST['funcionamientoin_obs'];
$funcionamiento_lgte=$_POST['funcionamiento_lgte'];
$funcionamientolgt_obs=$_POST['funcionamientolgt_obs'];
$no_bat=$_POST['no_bat'];
$tipo_bat=$_POST['tipo_bat'];
$v_bat=$_POST['v_bat'];
$b_bat=$_POST['b_bat'];
$fecha_bat=$_POST['fecha_bat'];
$comentarios=$_POST['comentarios'];
$nombre_fit=$_POST['nombre_fit'];
$nombre_fr=$_POST['nombre_fr'];
$fecha_actual=$_POST['fecha_actual'];
$lugar_actual=$_POST['lugar_actual'];
$evidencia_f1=$_POST['evidencia_f1'];
$evidencia_f2=$_POST['evidencia_f2'];
$evidencia_f3=$_POST['evidencia_f3'];


$sql="INSERT INTO tbl_ups (folio, cliente, udn, fecha, modelo_equipo, n_s, fabricante, capacidad, fases, rack_torre, perioridad_m, 
                    entrada, entrada2, entrada3, entrada4, entrada5, entrada6, entrada7, entrada8, entrada9, entrada_obs, 
                    salida, salida2, salida3, salida4, salida5, salida6, salida7, salida8, salida9,salida_obs,
                    neutro_gnd, neutro_gnd2, neutro_gnd3, neutro_gnd4, neutro_gnd5, neutro_gnd6, neutro_gnd7, neutro_gnd8, neutro_gnd9, neutro_gndobs,
                    empleo_m, temperatura, humedad, ubicacion, tipo_carga, registro, carga_tirada, estado_trabajo, estado_equipo, tipo_mantenimiento, 
                    condiciones_at, condicionesat_obs,
                    revision_pe, revicionpe_obs, 
                    limpieza_g, limpiezag_obs, 
                    revision_bb, revicionbb_obs,
                    estado_b, estadob_obs,
                    verificacion_v, verificacionv_obs, 
                    funcionamiento_v, funcionamientov_obs, 
                    funcionamiento_in, funcionamientoin_obs,  
                    funcionamiento_lgte, funcionamientolgt_obs, 
                    no_bat, tipo_bat,
                    v_bat, b_bat, fecha_bat, comentarios, nombre_fit, nombre_fr, fecha_actual, lugar_actual, evidencia_f1, evidencia_f2, evidencia_f3)


VALUES ('$folio', '$cliente', '$udn', '$fecha', '$modelo_equipo', '$n_s', '$fabricante', '$capacidad', '$fases', '$rack', '$perioridad_m', 
        '$entrada', '$entrada2', '$entrada3', '$entrada4', '$entrada5', '$entrada6', '$entrada7', '$entrada8', '$entrada9', '$entrada_obs',
        '$salida', '$salida2', '$salida3', '$salida4', '$salida5', '$salida6', '$salida7', '$salida8', '$salida9','$salida_obs',
        '$neutro_gnd', '$neutro_gnd2', '$neutro_gnd3', '$neutro_gnd4', '$neutro_gnd5', '$neutro_gnd6', '$neutro_gnd7', '$neutro_gnd8', '$neutro_gnd9', '$neutro_gndobs',
        '$empleo_m', '$temperatura', '$humedad', '$ubicacion', '$tipo_carga', '$registro', '$carga_tirada', '$estado_trabajo', '$estado_equipo',
        '$tipo_mantenimiento', 
        '$condiciones_at', '$condicionesat_obs', 
        '$revision_pe', '$revicionpe_obs',
        '$limpieza_g', '$limpiezag_obs', 
        '$revision_bb', '$revicionbb_obs',
        '$estado_b', '$estadob_obs', 
        '$verificacion_v', '$verificacionv_obs', 
        '$funcionamiento_v', '$funcionamientov_obs', 
        '$funcionamiento_in', '$funcionamientoin_obs',
        '$funcionamiento_lgte', '$funcionamientolgt_obs',
        '$no_bat', '$tipo_bat', '$v_bat', '$b_bat', '$fecha_bat', '$comentarios', '$nombre_fit', '$nombre_fr',
        '$fecha_actual', '$lugar_actual', '$evidencia_f1', '$evidencia_f2', '$evidencia_f3') ";
        $query= mysqli_query($conexion,$sql); 


        if($query){
            header("Location: ../../views/users/index.php");
            exit; // Terminar la ejecución del script después de redirigir
        } else {
            // Manejar el error
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
        }
        ?>