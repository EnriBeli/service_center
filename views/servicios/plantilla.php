<?php
require('../../fpdf/fpdf.php');

//Función para generar el PDF con los datos
function generarPDF($datos) 
{

    //Instancia del PDF
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();

    // Logo
    $pdf->Image('../../img/logo.png', 15, 15, 20);
    $pdf->SetFont('Arial', 'B', 10);

    // Establecer posición X para alinear el texto a la derecha del logo
    $pdf->SetX(50); // Puedes ajustar este valor según sea necesario

    // Address
    $pdf->Cell(100, 10, 'KGE TECNOLOGY', 0, 1, 'C');

    // Dirección
    $pdf->SetFont('Arial', '', 7);
    $pdf->SetX(60);
    $pdf->MultiCell(0, 5, utf8_decode('Calle 16 #337 x Av Aleman y Calle 21, Colonia Itzimna, Merida, Yucatan'));

    // Email
    $pdf->SetX(5);
    $pdf->Cell(0, 5, utf8_decode('Email: servicios@servicios.kge.com.mx'), 0, 1, 'C');

    // Teléfono
    $pdf->SetX(5);
    $pdf->Cell(0, 5, utf8_decode('Teléfono: 984 87 33419'), 0, 1, 'C');
    $pdf->Ln();

    // Encabezados de la tabla
    $pdf->Cell(20, 10, 'Cliente:', 1, 0, 'L');
    $pdf->Cell(80, 10, isset($datos['cliente']) ? utf8_decode($datos['cliente']) : '', 1, 0);
    $pdf->Cell(20, 10, 'Email:', 1, 0, 'L');
    $pdf->Cell(70, 10, isset($datos['email']) ? utf8_decode($datos['email']) : '', 1, 1);

    // Segunda fila
    $pdf->Cell(20, 10, 'TEL/EXT:', 1, 0, 'L');
    $pdf->Cell(80, 10, isset($datos['tel_ext']) ? utf8_decode($datos['tel_ext']) : '', 1, 0);
    $pdf->Cell(20, 10, 'Contacto:', 1, 0, 'L');
    $pdf->Cell(70, 10, isset($datos['contacto']) ? utf8_decode($datos['contacto']) : '', 1, 1);


    // Ubicación del Equipo y Condiciones Ambientales
    $pdf->SetFillColor(251, 190, 143);
    $pdf->Cell(190, 10, utf8_decode('UBICACIÓN DEL EQUIPO Y CONDICIONES AMBIENTALES'), 1, 1, 'C', true);


    // Primera fila
    $pdf->Cell(20, 10, 'UDN:', 1, 0, 'L');
    $pdf->Cell(60, 10, isset($datos['udn']) ? utf8_decode($datos['udn']) : '', 1, 0);
    $pdf->Cell(30, 10, 'Responsables UDN:', 1, 0, 'L');
    $pdf->Cell(80, 10, isset($datos['responsables_udn']) ? utf8_decode($datos['responsables_udn']) : '', 1, 1);

    // Segunda fila
    $pdf->Cell(20, 10, 'Temperatura:', 1, 0, 'L');
    $pdf->Cell(60, 10, isset($datos['temperatura']) ? $datos['temperatura'] : '', 1, 0);
    $pdf->Cell(30, 10, utf8_decode('Ubicación del Equipo:'), 1, 0, 'L');
    $pdf->Cell(80, 10, isset($datos['ubicacion_equipo']) ? utf8_decode($datos['ubicacion_equipo']) : '', 1, 1);

    // Tercera fila
    $pdf->Cell(20, 10, 'Humedad:', 1, 0, 'L');
    $pdf->Cell(60, 10, isset($datos['humedad']) ? $datos['humedad'] : '', 1, 0);
    $pdf->Cell(40, 10, utf8_decode('Cuenta con Aire Acondicionado:'), 1, 0, 'L');
    $pdf->Cell(70, 10, isset($datos['aire_acondicionado']) ? $datos['aire_acondicionado'] : '', 1, 1);

    // Información del Equipo
    $pdf->SetFillColor(251, 190, 143);
    $pdf->Cell(190, 10, utf8_decode('INFORMACIÓN DEL EQUIPO/UPS REGULADOR'), 1, 1, 'C', true);

    // Tabla de información del equipo
    $pdf->SetFont('Arial', '', 6); // Reducir tamaño de fuente
    $columnWidths = array(30, 30, 30, 20, 20, 20, 40); // Anchos de columna
    $pdf->SetFillColor(251, 190, 143);
    $pdf->Cell($columnWidths[0], 10, '', 1, 0, 'C', true); // Celdas vacías para los encabezados
    $pdf->Cell($columnWidths[1], 10, '', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[2], 10, '', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[3], 10, 'F1', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[4], 10, 'F2', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[5], 10, 'F3', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[6], 10, 'Comentarios', 1, 1, 'C', true);

    $filas = array(
        array('Marca:', isset($datos['marca']) ?  utf8_decode($datos['marca']) :'', 'V Nom Input (Vac)', isset($datos['vninput_f1']) ? $datos['vninput_f1'] : '', isset($datos['vninput_f2']) ? $datos['vninput_f2'] :  '', isset($datos['vninput_f3']) ? $datos['vninput_f3'] : '', isset($datos['vninput_com']) ? $datos['vninput_com'] : ''),
        array('Modelo:', isset($datos['modelo']) ? $datos['modelo'] : '', 'V Nom Output (Vac)', isset($datos['vnoutput_f1']) ? $datos['vnoutput_f1'] : '', isset($datos['vnoutput_f2']) ? $datos['vnoutput_f2'] : '', isset($datos['vnoutput_f3']) ? $datos['vnoutput_f3'] : '', isset($datos['vnoutput_f1']) ? $datos['vnoutput_com'] : ''),
        array('Serie:', isset($datos['serie']) ? $datos['serie'] : '', 'I Nom Input (Aac)', isset($datos['ininput_f1']) ? $datos['ininput_f1'] : '', isset($datos['ininput_f2']) ? $datos['ininput_f2'] : '', isset($datos['ininput_f3']) ? $datos['ininput_f3'] : '', isset($datos['ininput_com']) ? $datos['ininput_com'] : ''),
        array('Activo Fijo #', isset($datos['activo_fijo']) ? $datos['activo_fijo'] : '', 'V Medio Entrada (Vac)', isset($datos['vmentrada_f1']) ? $datos['vmentrada_f1'] : '', isset($datos['vmentrada_f2']) ? $datos['vmentrada_f2'] : '', isset($datos['vmentrada_f3']) ? $datos['vmentrada_f3'] : '', isset($datos['vmentrada_com']) ? $datos['vmentrada_com'] : ''),
        array('Número de Fases', isset($datos['num_fase']) ? $datos['num_fase'] : '', 'V Medio Salida (Vac)', isset($datos['vmsalida_f1']) ? $datos['vmsalida_f1'] : '', isset($datos['vmsalida_f2']) ? $datos['vmsalida_f2'] : '', isset($datos['vmsalida_f3']) ? $datos['vmsalida_f3'] : '', isset($datos['vmsalida_com']) ? $datos['vmsalida_com'] : ''),
        array('Capacidad en Va/KVA', isset($datos['capacidad_vakva']) ? $datos['capacidad_vakva'] : '', utf8_decode('Tipo de Baterias'), '', '', '', isset($datos['tipo_bateria']) ? utf8_decode($datos['tipo_bateria']) : ''),
        array('Cuenta con BYPASS (SI/NO)', isset($datos['cuenta_bypass']) ? $datos['cuenta_bypass'] : '', utf8_decode('Voltaje Baterías Vcd'), '', '', '', isset($datos['voltaje_bateria']) ? $datos['voltaje_bateria'] : ''),
        array('Tarjeta de Monitoreo', isset($datos['tageta_monitoreo']) ? $datos['tageta_monitoreo'] : '', 'Cantidad de Baterias', '', '', '', isset($datos['cantidad_baterias']) ? $datos['cantidad_baterias'] : ''),
        array('Ip Tarjeta de monitoreo', isset($datos['ip_tarjeta']) ? $datos['ip_tarjeta'] : '', 'Fecha de Baterias', '', '', '', isset($datos['fecha_bateria']) ? $datos['fecha_bateria'] : ''),
    );

    foreach ($filas as $fila) {
        $pdf->Cell($columnWidths[0], 10, $fila[0], 1, 0, 'C');
        $pdf->Cell($columnWidths[1], 10, $fila[1], 1, 0, 'C');
        $pdf->Cell($columnWidths[2], 10, $fila[2], 1, 0, 'C');
        $pdf->Cell($columnWidths[3], 10, $fila[3], 1, 0, 'C');
        $pdf->Cell($columnWidths[4], 10, $fila[4], 1, 0, 'C');
        $pdf->Cell($columnWidths[5], 10, $fila[5], 1, 0, 'C');
        $pdf->Cell($columnWidths[6], 10, $fila[6], 1, 1, 'C');
    }

    // Información del Equipo / Banco de Baterías (Si Aplica)
    $pdf->SetFillColor(152, 205, 255);
    $pdf->Cell(190, 10, utf8_decode('INFORMACIÓN DEL EQUIPO / BANCO DE BATERÍAS (Si Aplica)'), 1, 1, 'C', true);
    //$pdf->Cell(60, 10, 'Comentarios', 1, 1, 'C', true);

    // Tabla de información del banco de baterías
    $columnWidths = array(25, 50, 45, 70);
    $pdf->Cell($columnWidths[0], 10, 'Marca', 1, 0, 'C');
    $pdf->Cell($columnWidths[1], 10, isset($datos['marca_banco']) ? $datos['marca_banco'] : '', 1, 0, 'C');
    $pdf->Cell($columnWidths[2], 10, utf8_decode('Número de Baterías'), 1, 0, 'C');
    $pdf->Cell($columnWidths[3], 10, isset($datos['numerobateria_banco']) ? $datos['numerobateria_banco'] : '', 1, 1, 'C');
    //$pdf->Cell($columnWidths[4], 10, '', 1, 1, 'C');

    $filas = array(
        array('Modelo', isset($datos['modelo_banco']) ? $datos['modelo_banco'] : '', 'I Output (A)', isset($datos['ioutput_banco']) ? $datos['ioutput_banco'] : '', ''),
        array('Serie', isset($datos['serie_banco']) ? $datos['serie_banco'] : '', utf8_decode('Fecha de Instalación de Baterías'), isset($datos['fecha_bateria']) ? $datos['fecha_bateria'] : '', ''),
        array('Activo Fijo #', isset($datos['activofijo_banco']) ? $datos['activofijo_banco'] : '', utf8_decode('Equipo con Garantía (Si/No)'), isset($datos['garantia_banco']) ? $datos['garantia_banco'] : '', ''),
        array('Capacidad en AH', isset($datos['capacidadha_banco']) ? $datos['capacidadha_banco'] : '', utf8_decode('Tipo de Baterías'), isset($datos['numerobateria_banco']) ? $datos['numerobateria_banco'] : ''),
    );

    foreach ($filas as $fila) {
        $pdf->Cell($columnWidths[0], 10, $fila[0], 1, 0, 'C');
        $pdf->Cell($columnWidths[1], 10, $fila[1], 1, 0, 'C');
        $pdf->Cell($columnWidths[2], 10, $fila[2], 1, 0, 'C');
        $pdf->Cell($columnWidths[3], 10, $fila[3], 1, 1, 'C');
        //$pdf->Cell($columnWidths[4], 10, $fila[4], 1, 1, 'C');
    }

    // Listado para revisión (CHECK LIST)
    $pdf->SetFillColor(152, 205, 255);
    $pdf->Cell(80, 8, utf8_decode('LISTADO PARA REVISIÓN (CHECK LIST) (MARCAR CON UNA X)'), 1, 0, 'C', true);

    $columnWidths = array(80, 30, 80);
    
    // Encabezados de columna
    $pdf->Cell($columnWidths[1], 8, 'Estado', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[0], 8, 'Observaciones', 1, 1, 'C', true); 
    


    $filas = array(
        array(utf8_decode('Previo mantenimiento: Toma de Fotografías del Antes, Durante y Después del estado del UPS, incluyendo pantallas.'), isset($datos['listado1']) ? $datos['listado1'] : '', isset($datos['listado1_obs']) ? $datos['listado1_obs'] : ''),
        array(utf8_decode('Apagado y desconexión de la carga (Por parte del cliente), colocación del equipo en modo bypass de mantenimiento y desenergizado del equipo.'), isset($datos['listado2']) ? $datos['listado2'] : '', isset($datos['listado2_obs']) ? $datos['listado2_obs'] : ''),
        array(utf8_decode('Retiro de coberturas y revisión visual de componentes eléctricos y electrónicos.'), isset($datos['listado3']) ? $datos['listado3'] : '', isset($datos['listado3_obs']) ? $datos['listado3_obs'] : ''),
        array(utf8_decode('Limpieza general interna y externa del equipo.'), isset($datos['listado4']) ? $datos['listado4'] : '', isset($datos['listado4_obs']) ? $datos['listado4_obs'] : ''),
        array(utf8_decode('Revisión y limpieza de ventiladores y paneles.'), isset($datos['listado5']) ? $datos['listado5'] : '', isset($datos['listado5_obs']) ? $datos['listado5_obs'] : ''),
        array(utf8_decode('Revisión de los parámetros de medición y alarmas.'), isset($datos['listado6']) ? $datos['listado6'] : '', isset($datos['listado6_obs']) ? $datos['listado6_obs'] : ''),
        array(utf8_decode('Evaluación del registro del inversor y registro de alarmas.'), isset($datos['listado7']) ? $datos['listado7'] : '', isset($datos['listado7_obs']) ? $datos['listado7_obs'] : ''),
        array(utf8_decode('Revisión y ajuste de las condiciones de operación: Entrada y salida de voltaje. (Parámetros Eléctricos)'), isset($datos['listado8']) ? $datos['listado8'] : '', isset($datos['listado8_obs']) ? $datos['listado8_obs'] : ''),
        array(utf8_decode('Inspección visual externa, prueba de conexiones, alimentación del UPS, internas y externas.'), isset($datos['listado9']) ? $datos['listado9'] : '', isset($datos['listado9_obs']) ? $datos['listado9_obs'] : ''),
        array(utf8_decode('Inspección visual de todos los componentes electrónicos del UPS, tanto ópticos como acústicos.'), isset($datos['listado10']) ? $datos['listado10'] : '', isset($datos['listado10_obs']) ? $datos['listado10_obs'] : ''),
        array(utf8_decode('Limpieza del módulo de control y electrónica, mediante aspirado con aire comprimido.'), isset($datos['listado11']) ? $datos['listado11'] : '', isset($datos['listado11_obs']) ? $datos['listado11_obs'] : ''),
        array(utf8_decode('Actualizaciones del software de control. Prueba del software de control remoto del UPS, en caso de existir.'), isset($datos['listado12']) ? $datos['listado12'] : '', isset($datos['listado12_obs']) ? $datos['listado12_obs'] : ''),
        array(utf8_decode('Inspección de la ubicación y ambiente de trabajo de los equipos, temperatura, humedad, condensaciones, etc.'), isset($datos['listado13']) ? $datos['listado13'] : '', isset($datos['listado13_obs']) ? $datos['listado13_obs'] : ''),
        array(utf8_decode('Revisión de la estabilidad y estado de carga de la batería, incluyendo una prueba funcional mediante corte del suministro eléctrico (previo aviso a los usuarios). Comprobación del voltaje en cada una de las celdas del banco de baterías.'), isset($datos['listado14']) ? $datos['listado14'] : '', isset($datos['listado14_obs']) ? $datos['listado14_obs'] : ''),
        array(utf8_decode('Verificación y eliminación de sulfataciones.'), isset($datos['listado15']) ? $datos['listado15'] : '', isset($datos['listado15_obs']) ? $datos['listado15_obs'] : ''),
        array(utf8_decode('Revisión y apriete de terminales flojas.'), isset($datos['listado16']) ? $datos['listado16'] : '', isset($datos['listado16_obs']) ? $datos['listado16_obs'] : ''),
        array(utf8_decode('Engrasado en terminales de baterías, (cuando sea necesario).'), isset($datos['listado17']) ? $datos['listado17'] : '', isset($datos['listado17_obs']) ? $datos['listado17_obs'] : ''),
        array(utf8_decode('Verificación de voltaje en vacío.'), isset($datos['listado18']) ? $datos['listado18'] : '', isset($datos['listado18_obs']) ? $datos['listado18'] : ''),
        array(utf8_decode('Verificación del voltaje de batería, aplicando descarga.'), isset($datos['listado19']) ? $datos['listado19'] : '', isset($datos['listado19_obs']) ? $datos['listado19_obs'] : ''),
        array(utf8_decode('Revisión del funcionamiento del Inversor.'), isset($datos['listado20']) ? $datos['listado20'] : '', isset($datos['listado20_obs']) ? $datos['listado20_obs'] : ''),
        array(utf8_decode('Revisión del funcionamiento del Rectificador.'), isset($datos['listado21']) ? $datos['listado21'] : '', isset($datos['listado21_obs']) ? $datos['listado21_obs'] : ''),
        array(utf8_decode('Generación de un reporte por escrito con las observaciones correspondientes.'), isset($datos['listado22']) ? $datos['listado22'] : '', isset($datos['listado22_obs']) ? $datos['listado22_obs'] : ''),
        array(utf8_decode('Final mantenimiento: Toma de Fotografías de la entrega del equipo posterior al Servicio de Mantenimiento.'), isset($datos['listado23']) ? $datos['listado23'] : '', isset($datos['listado23_obs']) ? $datos['listado23_obs'] : ''),
    );

    // Deshabilitar el salto de página automático
    $pdf->SetAutoPageBreak(false);

    foreach ($filas as $fila) {
        $x = $pdf->GetX();
        $y = $pdf->GetY();
        
        // Imprimir la celda MultiCell para la primera columna
        $pdf->MultiCell($columnWidths[0], 8, $fila[0], 1, 'L', false);
        
        $height = $pdf->GetY() - $y;
        
        // Ajustar la posición vertical después de imprimir MultiCell
        $pdf->SetXY($x + $columnWidths[0], $y);
        
        // Imprimir las celdas restantes en la misma fila
        $pdf->Cell($columnWidths[1], $height, isset($fila[1]) ? $fila[1] : '', 1, 0, 'C');
        $pdf->Cell($columnWidths[2], $height, isset($fila[2]) ? $fila[2] : '', 1, 0, 'C');
        
        $pdf->Ln();
    }
    
    
    // Habilitar el salto de página automático
    $pdf->SetAutoPageBreak(true);

    // Comentarios Finales
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetFillColor(152, 205, 255);
    $pdf->Cell(190, 10, utf8_decode('COMENTARIOS FINALES'), 1, 1, 'C', true);

    // Obtener el texto y calcular el tamaño de la fuente adecuado
    $comentario_final = isset($datos['comentario_final']) ? $datos['comentario_final'] : '';
    $font_size = 10; // Tamaño de fuente inicial
    $width_limit = 190; // Ancho de la celda
    while ($pdf->GetStringWidth($comentario_final) > $width_limit - 2 && $font_size > 5) { // -2 para dejar espacio
        $pdf->SetFontSize($font_size -= 0.5); // Reducir el tamaño de la fuente
    }

    // Imprimir el texto con el tamaño de fuente ajustado
    $pdf->MultiCell(190, 7, utf8_decode($comentario_final), 1, 'J');

    // Notas Importantes
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetFillColor(152, 205, 255);
    $pdf->Cell(190, 10, utf8_decode('NOTAS IMPORTANTES'), 1, 1, 'C', true);

    // Obtener el texto y calcular el tamaño de la fuente adecuado
    $notas_importantes = isset($datos['notas_importantes']) ? $datos['notas_importantes'] : '';
    $font_size = 10; // Tamaño de fuente inicial
    $width_limit = 190; // Ancho de la celda
    while ($pdf->GetStringWidth($notas_importantes) > $width_limit - 2 && $font_size > 5) { // -2 para dejar espacio
        $pdf->SetFontSize($font_size -= 0.5); // Reducir el tamaño de la fuente
    }

    // Imprimir el texto con el tamaño de fuente ajustado
    $pdf->MultiCell(190, 7, utf8_decode($notas_importantes), 1, 'J');

    // Define los datos para tu tabla
    $datos = array(
        array('Ingeniero de Servicio:', utf8_decode('Recibió Servicio a satisfacción: IMA - TI:'), utf8_decode('Nombre área:')),
        array(utf8_decode(isset($datos['nombre_ingtecnico']) ? $datos['nombre_ingtecnico'] : ''), utf8_decode(isset($datos['nombre_recibido']) ? $datos['nombre_recibido'] : ''), utf8_decode(isset($datos['nombre_area']) ? $datos['nombre_area'] : '')),
        array('', '', '')
    );

    // Define el ancho de cada columna
    $ancho_columna = 56.70;

    // Define el espacio entre cada columna
    $espacio_entre_columnas = 10;

    // Define el tamaño de fuente para el texto de la tabla
    $tamanio_fuente = 7;

    // Establece la fuente y el tamaño de fuente para el texto de la tabla
    $pdf->SetFont('Arial', 'B', $tamanio_fuente);

    // Itera sobre los datos para crear la tabla
    foreach ($datos as $indice_fila => $fila) {
        foreach ($fila as $indice => $valor) {
            // Calcula la posición de la celda
            $x = $pdf->GetX();
            $y = $pdf->GetY();

            // Define la altura de la celda dependiendo de si es la primera fila o no
            $altura_celda = $indice_fila == 0 ? 10 : 20;

            // Verifica si $valor no está vacío y si no está en las últimas dos filas, luego establece el color de relleno
            if (!empty($valor) && $indice_fila < count($datos) - 2) {
                $pdf->SetFillColor(152, 205, 255);
                // Agrega la celda con el valor actual y el color de relleno
                $pdf->Cell($ancho_columna, $altura_celda, $valor, 1, 0, 'C', true);
            } else {
                // Agrega la celda sin color de relleno
                $pdf->Cell($ancho_columna, $altura_celda, $valor, 1, 0, 'C');
            }

            // Mueve la posición a la siguiente columna
            $pdf->SetXY($x + $ancho_columna + $espacio_entre_columnas, $y);
        }
        
        // Salta a la siguiente línea
        $pdf->Ln();
    }

    // Título
    $pdf->SetFont('Arial', 'B', 7);$pdf->SetFillColor(152, 205, 255);
    $pdf->Cell(190, 10, utf8_decode('EVIDENCIA FOTOGRÁFICA'), 1, 1, 'C', true);

    // Ajustar posición para 'ANTES'
    $pdf->SetX(10); // Ajustar la posición X según sea necesario

    // Antes
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->SetFillColor(152, 205, 255);
    $pdf->Cell(190, 10, 'ANTES', 1, 1, 'C', true);
    $pdf->Cell(63.3, 70, '', 1, 0);
    $pdf->Cell(63.3, 70, '', 1, 0);
    $pdf->Cell(63.3, 70, '', 1, 1);

    // DURANTE
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->Cell(190, 10, 'DURANTE', 1, 1, 'C', true);
    $pdf->Cell(63.3, 70, '', 1, 0);
    $pdf->Cell(63.3, 70, '', 1, 0);
    $pdf->Cell(63.3, 70, '', 1, 1);

    // DESPUES
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->Cell(190, 10, 'DESPUES', 1, 1, 'C', true);
    $pdf->Cell(63.3, 70, '', 1, 0);
    $pdf->Cell(63.3, 70, '', 1, 0);
    $pdf->Cell(63.3, 70, '', 1, 1);



    $pdf->SetFont('Arial', '', 8); // Restaurar tamaño de fuente

    $pdf->Output();
}

    // Obtener los datos del formulario de la base de datos
    $con = mysqli_connect("localhost", "root", "", "kge");
    $folio = isset($_GET['folio']) ? $_GET['folio'] : '';
    $sql = "SELECT * FROM tbl_serviciosgenerales WHERE folio = '$folio'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    // Generar el PDF con los datos obtenidos
    generarPDF($row);
?>