
<?php
// Verificamos si se ha enviado el formulario
if(isset($_POST['submit'])){
    // Incluimos la conexión a la base de datos
    include("../../includes/conexion/db.php"); // Asegúrate de incluir el archivo que contiene la conexión a la base de datos

    // Recibimos los datos del formulario
    // Aquí puedes recibir otros datos del formulario además de las imágenes, si los hay
    $fecha=$_POST['fecha'];
    $cliente=$_POST['cliente'];
    $contacto=$_POST['contacto'];
    $tel_ext=$_POST['tel_ext'];
    $email=$_POST['email'];
    $udn=$_POST['udn'];
    $temperatura=$_POST['temperatura'];
    $humedad=$_POST['humedad'];
    $responsables_udn=$_POST['responsables_udn'];
    $ubicacion_equipo=$_POST['ubicacion_equipo'];
    $aire_acondicionado=$_POST['aire_acondicionado'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $serie=$_POST['serie'];
    $activo_fijo=$_POST['activo_fijo'];
    $num_fase=$_POST['num_fase'];
    $capacidad_vakva=$_POST['capacidad_vakva'];
    $cuenta_bypass=$_POST['cuenta_bypass'];
    $tageta_monitoreo=$_POST['tageta_monitoreo'];
    $ip_tarjeta=$_POST['ip_tarjeta'];
    $vninput_f1=$_POST['vninput_f1'];
    $vninput_f2=$_POST['vninput_f2'];
    $vninput_f3=$_POST['vninput_f3'];
    $vninput_com=$_POST['vninput_com'];
    $vnoutput_f1=$_POST['vnoutput_f1'];
    $vnoutput_f2=$_POST['vnoutput_f2'];
    $vnoutput_f3=$_POST['vnoutput_f3'];
    $vnoutput_com=$_POST['vnoutput_com'];
    $ininput_f1=$_POST['ininput_f1'];
    $ininput_f2=$_POST['ininput_f2'];
    $ininput_f3=$_POST['ininput_f3'];
    $ininput_com=$_POST['ininput_com'];
    $vmentrada_f1=$_POST['vmentrada_f1'];
    $vmentrada_f2=$_POST['vmentrada_f2'];
    $vmentrada_f3=$_POST['vmentrada_f3'];
    $vmentrada_com=$_POST['vmentrada_com'];
    $vmsalida_f1=$_POST['vmsalida_f1'];
    $vmsalida_f2=$_POST['vmsalida_f2'];
    $vmsalida_f3=$_POST['vmsalida_f3'];
    $vmsalida_com=$_POST['vmsalida_com'];
    $tipo_bateria=$_POST['tipo_bateria'];
    $voltaje_bateria=$_POST['voltaje_bateria'];
    $cantidad_baterias=$_POST['cantidad_baterias'];
    $fecha_bateria=$_POST['fecha_bateria'];
    $marca_banco=$_POST['marca_banco'];
    $modelo_banco=$_POST['modelo_banco'];
    $serie_banco=$_POST['serie_banco'];
    $activofijo_banco=$_POST['activofijo_banco'];
    $capacidadha_banco=$_POST['capacidadha_banco'];
    $numerobateria_banco=$_POST['numerobateria_banco'];
    $ioutput_banco=$_POST['ioutput_banco'];
    $fechainstalacionbateria_banco=$_POST['fechainstalacionbateria_banco'];
    $garantia_banco=$_POST['garantia_banco'];
    $tipobateria_banco=$_POST['tipobateria_banco'];
    $listado1=$_POST['listado1'];
    $listado1_obs=$_POST['listado1_obs'];
    $listado2=$_POST['listado2'];
    $listado2_obs=$_POST['listado2_obs'];
    $listado3=$_POST['listado3'];
    $listado3_obs=$_POST['listado3_obs'];
    $listado4=$_POST['listado4'];
    $listado4_obs=$_POST['listado4_obs'];
    $listado5=$_POST['listado5'];
    $listado5_obs=$_POST['listado5_obs'];
    $listado6=$_POST['listado6'];
    $listado6_obs=$_POST['listado6_obs'];
    $listado7=$_POST['listado7'];
    $listado7_obs=$_POST['listado7_obs'];
    $listado8=$_POST['listado8'];
    $listado8_obs=$_POST['listado8_obs'];
    $listado9=$_POST['listado9'];
    $listado9_obs=$_POST['listado9_obs'];
    $listado10=$_POST['listado10'];
    $listado10_obs=$_POST['listado10_obs'];
    $listado11=$_POST['listado11'];
    $listado11_obs=$_POST['listado11_obs'];
    $listado12=$_POST['listado12'];
    $listado12_obs=$_POST['listado12_obs'];
    $listado13=$_POST['listado13'];
    $listado13_obs=$_POST['listado13_obs'];
    $listado14=$_POST['listado14'];
    $listado14_obs=$_POST['listado14_obs'];
    $listado15=$_POST['listado15'];
    $listado15_obs=$_POST['listado15_obs'];
    $listado16=$_POST['listado16'];
    $listado16_obs=$_POST['listado16_obs'];
    $listado17=$_POST['listado17'];
    $listado17_obs=$_POST['listado17_obs'];
    $listado18=$_POST['listado18'];
    $listado18_obs=$_POST['listado18_obs'];
    $listado19=$_POST['listado19'];
    $listado19_obs=$_POST['listado19_obs'];
    $listado20=$_POST['listado20'];
    $listado20_obs=$_POST['listado20_obs'];
    $listado21=$_POST['listado21'];
    $listado21_obs=$_POST['listado21_obs'];
    $listado22=$_POST['listado22'];
    $listado22_obs=$_POST['listado22_obs'];
    $listado23=$_POST['listado23'];
    $listado23_obs=$_POST['listado23_obs'];
    $listado24=$_POST['listado24'];
    $listado24_obs=$_POST['listado24_obs'];
    $comentario_final=$_POST['comentario_final'];
    $notas_importantes=$_POST['notas_importantes'];
    $nombre_ingtecnico=$_POST['nombre_ingtecnico'];
    $nombre_recibido=$_POST['nombre_recibido'];
    $nombre_area=$_POST['nombre_area'];
    

    $evidencia_antes1 = $_FILES['evidencia_antes1']['name'];
    $evidencia_antes2 = $_FILES['evidencia_antes2']['name'];
    $evidencia_antes3 = $_FILES['evidencia_antes3']['name'];

    $evidencia_durante1 = $_FILES['evidencia_durante1']['name'];
    $evidencia_durante2 = $_FILES['evidencia_durante2']['name'];
    $evidencia_durante3 = $_FILES['evidencia_durante3']['name'];

    $evidencia_despues1 = $_FILES['evidencia_despues1']['name'];
    $evidencia_despues2 = $_FILES['evidencia_despues2']['name'];
    $evidencia_despues3 = $_FILES['evidencia_despues3']['name'];

    $uploadDir = "../upload/";

    //Mover las imagenes desde el directorio tamporal a la carpeta de destino
    move_uploaded_file($_FILES['evidencia_antes1']['tmp_name'], $uploadDir . $evidencia_antes1);
    move_uploaded_file($_FILES['evidencia_antes2']['tmp_name'], $uploadDir . $evidencia_antes2);
    move_uploaded_file($_FILES['evidencia_antes3']['tmp_name'], $uploadDir . $evidencia_antes3);
    
    move_uploaded_file($_FILES['evidencia_durante1']['tmp_name'], $uploadDir . $evidencia_durante1);
    move_uploaded_file($_FILES['evidencia_durante2']['tmp_name'], $uploadDir . $evidencia_durante2);
    move_uploaded_file($_FILES['evidencia_durante3']['tmp_name'], $uploadDir . $evidencia_durante3);

    move_uploaded_file($_FILES['evidencia_despues1']['tmp_name'], $uploadDir . $evidencia_despues1);
    move_uploaded_file($_FILES['evidencia_despues2']['tmp_name'], $uploadDir . $evidencia_despues2);
    move_uploaded_file($_FILES['evidencia_despues3']['tmp_name'], $uploadDir . $evidencia_despues3);



    // Preparamos la consulta SQL para insertar los datos en la base de datos
    $consulta = "INSERT INTO tbl_serviciosgenerales (fecha, cliente, contacto, tel_ext, email, udn, temperatura, humedad, responsables_udn, ubicacion_equipo, aire_acondicionado,
                    marca, modelo, serie, activo_fijo, num_fase, capacidad_vakva, cuenta_bypass, tageta_monitoreo, ip_tarjeta, vninput_f1, vninput_f2, vninput_f3, vninput_com, 
                    vnoutput_f1, vnoutput_f2, vnoutput_f3, vnoutput_com, ininput_f1, ininput_f2, ininput_f3, ininput_com, vmentrada_f1, vmentrada_f2, vmentrada_f3, vmentrada_com,
                    vmsalida_f1, vmsalida_f2, vmsalida_f3, vmsalida_com, tipo_bateria, voltaje_bateria, cantidad_baterias, fecha_bateria, marca_banco, modelo_banco, serie_banco,
                    activofijo_banco, capacidadha_banco, numerobateria_banco, ioutput_banco,fechainstalacionbateria_banco, garantia_banco, tipobateria_banco, listado1, listado1_obs, 
                    listado2, listado2_obs, listado3 , listado3_obs, listado4, listado4_obs, listado5, listado5_obs, listado6, listado6_obs, listado7, listado7_obs, listado8, 
                    listado8_obs, listado9, listado9_obs, listado10, listado10_obs, listado11, listado11_obs, listado12, listado12_obs, listado13, listado13_obs, listado14,
                    listado14_obs, listado15, listado15_obs, listado16, listado16_obs, listado17, listado17_obs, listado18, listado18_obs, listado19, listado19_obs, listado20, listado20_obs, 
                    listado21, listado21_obs, listado22, listado22_obs, listado23, listado23_obs, listado24, listado24_obs, comentario_final, notas_importantes, 
                    nombre_ingtecnico, nombre_recibido, nombre_area,
                    evidencia_antes1, evidencia_antes2, evidencia_antes3, 
                    evidencia_durante1, evidencia_durante2, evidencia_durante3, 
                    evidencia_despues1, evidencia_despues2, evidencia_despues3)
                    VALUES ('$fecha', '$cliente', '$contacto', '$tel_ext', '$email', '$udn', '$temperatura', '$humedad', '$responsables_udn', '$ubicacion_equipo', '$aire_acondicionado', 
                    '$marca', '$modelo', '$serie', '$activo_fijo', '$num_fase', '$capacidad_vakva', '$cuenta_bypass', '$tageta_monitoreo', '$ip_tarjeta', '$vninput_f1', '$vninput_f2',
                    '$vninput_f3', '$vninput_com', '$vnoutput_f1', '$vnoutput_f2', '$vnoutput_f3', '$vnoutput_com', '$ininput_f1', '$ininput_f2', '$ininput_f3',
                    '$ininput_com', '$vmentrada_f1', '$vmentrada_f2', '$vmentrada_f3', '$vmentrada_com', '$vmsalida_f1', '$vmsalida_f2', '$vmsalida_f3', '$vmsalida_com',
                    '$tipo_bateria', '$voltaje_bateria', '$cantidad_baterias', '$fecha_bateria', '$marca_banco', '$modelo_banco', '$serie_banco', '$activofijo_banco', '$capacidadha_banco',
                    '$numerobateria_banco', '$ioutput_banco', '$fechainstalacionbateria_banco', '$garantia_banco', '$tipobateria_banco', '$listado1', '$listado1_obs', '$listado2',
                    '$listado2_obs', '$listado3', '$listado3_obs', '$listado4', '$listado4_obs', '$listado5', '$listado5_obs', '$listado6', '$listado6_obs', '$listado7', '$listado7_obs',
                    '$listado8', '$listado8_obs', '$listado9', '$listado9_obs', '$listado10', '$listado10_obs', '$listado11', '$listado11_obs', '$listado12', '$listado12_obs', '$listado13', '$listado13_obs',
                    '$listado14', '$listado14_obs', '$listado15', '$listado15_obs', '$listado16', '$listado16_obs', '$listado17', '$listado17_obs', '$listado18', '$listado18_obs', '$listado19', '$listado19_obs',
                    '$listado20', '$listado20_obs', '$listado21', '$listado21_obs', '$listado22', '$listado22_obs', '$listado23', '$listado23_obs', '$listado24', '$listado24_obs',
                    '$comentario_final', '$notas_importantes', '$nombre_ingtecnico' , '$nombre_recibido', '$nombre_area',
                    '$evidencia_antes1', '$evidencia_antes2', '$evidencia_antes3', '$evidencia_durante1', '$evidencia_durante2', '$evidencia_durante3', '$evidencia_despues1'
                    , '$evidencia_despues2', '$evidencia_despues3')";

    // Ejecutamos la consulta
    if(mysqli_query($conexion, $consulta)){
        header("Location: ../../views/users/index.php");
        exit; // Terminar la ejecución del script después de redirigir
    } else {
        // Manejar el error
        echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
    }

    // Cerramos la conexión
    mysqli_close($conexion);
}
?>