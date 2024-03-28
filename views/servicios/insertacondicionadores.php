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
$revicion_pe=$_POST['revicion_pe'];
$revicionpe_obs=$_POST['revicionpe_obs'];
$limpieza_gu=$_POST['limpieza_gu'];
$limpiezagu_obs=$_POST['limpiezagu_obs'];
$verificacion_fiv=$_POST['verificacion_fiv'];
$verificacionfiv_obs=$_POST['verificacionfiv_obs'];
$revision_fces=$_POST['revision_fces'];
$revicionfces_obs=$_POST['revicionfces_obs'];
$verificacion_ftp=$_POST['verificacion_ftp'];
$verificacionftp_obs=$_POST['verificacionftp_obs'];
$verificacion_ru=$_POST['verificacion_ru'];
$verificacionru_obs=$_POST['verificacionru_obs'];
$medicion_ca=$_POST['medicion_ca'];
$medicionca_obs=$_POST['medicionca_obs'];
$reaprietes_ctes=$_POST['reaprietes_ctes'];
$reaprietesctes_obs=$_POST['reaprietesctes_obs'];
$cierre_cesvc=$_POST['cierre_cesvc'];
$cierrecesvc_obs=$_POST['cierrecesvc_obs'];
$prueba_cera=$_POST['prueba_cera'];
$pruebacera_obs=$_POST['pruebacera_obs'];
$encendido_am=$_POST['encendido_am'];
$encendidoam_obs=$_POST['encendidoam_obs'];
$comentario_f=$_POST['comentario_f'];
$nombre_firmaing=$_POST['nombre_firmaing'];
$nombre_firmarci=$_POST['nombre_firmarci'];
$fecha_actual=$_POST['fecha_actual'];
$lugar_actual=$_POST['lugar_actual'];


$sql="INSERT INTO tbl_acondicionadores (folio, cliente, udn, fecha, modelo_equipo, n_s, fabricante, capacidad, fases, rack_torre, perioridad_m, 
                    entrada,  entrada2, entrada3, entrada4, entrada5, entrada6, entrada7, entrada8, entrada9, entrada_obs, 
                    salida,  salida2, salida3, salida4, salida5, salida6, salida7, salida8, salida9,salida_obs,
                    neutro_gnd, neutro_gnd2, neutro_gnd3, neutro_gnd4, neutro_gnd5, neutro_gnd6, neutro_gnd7, neutro_gnd8, neutro_gnd9, neutro_gndobs,
                    empleo_m, temperatura, humedad, ubicacion, tipo_carga, registro, carga_tirada, estado_trabajo, estado_equipo, tipo_mantenimiento, 
                    revicion_pe, revicionpe_obs, 
                    limpieza_gu, limpiezagu_obs, 
                    verificacion_fiv, verificacionfiv_obs, 
                    revision_fces, revicionfces_obs, 
                    verificacion_ftp, verificacionftp_obs, 
                    verificacion_ru, verificacionru_obs, 
                    medicion_ca, medicionca_obs, 
                    reaprietes_ctes, reaprietesctes_obs, 
                    cierre_cesvc, cierrecesvc_obs, 
                    prueba_cera, pruebacera_obs, 
                    encendido_am, encendidoam_obs,
                    comentario_f, nombre_firmaing, nombre_firmarci, fecha_actual, lugar_actual)


VALUES ('$folio', '$cliente', '$udn', '$fecha', '$modelo_equipo', '$n_s', '$fabricante', '$capacidad', '$fases', '$rack', '$perioridad_m', 
        '$entrada', '$entrada2', '$entrada3', '$entrada4', '$entrada5', '$entrada6', '$entrada7', '$entrada8', '$entrada9', '$entrada_obs',
        '$salida', '$salida2', '$salida3', '$salida4', '$salida5', '$salida6', '$salida7', '$salida8', '$salida9','$salida_obs',
        '$neutro_gnd', '$neutro_gnd2', '$neutro_gnd3', '$neutro_gnd4', '$neutro_gnd5', '$neutro_gnd6', '$neutro_gnd7', '$neutro_gnd8', '$neutro_gnd9', '$neutro_gndobs',
        '$empleo_m', '$temperatura', '$humedad', '$ubicacion', '$tipo_carga', '$registro', '$carga_tirada', '$estado_trabajo', '$estado_equipo', '$tipo_mantenimiento', 
        '$revicion_pe', '$revicionpe_obs', 
        '$limpieza_gu', '$limpiezagu_obs', 
        '$verificacion_fiv', '$verificacionfiv_obs', 
        '$revision_fces', '$revicionfces_obs', 
        '$verificacion_ftp', '$verificacionftp_obs', 
        '$verificacion_ru', '$verificacionru_obs',
        '$medicion_ca', '$medicionca_obs', 
        '$reaprietes_ctes', '$reaprietesctes_obs',
        '$cierre_cesvc', '$cierrecesvc_obs', 
        '$prueba_cera', '$pruebacera_obs', 
        '$encendido_am', '$encendidoam_obs', 
        '$comentario_f', '$nombre_firmaing', '$nombre_firmarci',
        '$fecha_actual', '$lugar_actual') ";
        $query= mysqli_query($conexion,$sql); 


        if($query){
            header("Location: ../../views/users/index.php");
            exit; // Terminar la ejecución del script después de redirigir
        } else {
            // Manejar el error
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
        }
        ?>