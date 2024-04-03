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
    $pdf->Cell(80, 10, isset($datos['cliente']) ? $datos['cliente'] : '', 1, 0);
    $pdf->Cell(20, 10, 'Email:', 1, 0, 'L');
    $pdf->Cell(70, 10, isset($datos['email']) ? $datos['email'] : '', 1, 1);

    // Segunda fila
    $pdf->Cell(20, 10, 'TEL/EXT:', 1, 0, 'L');
    $pdf->Cell(80, 10, isset($datos['tel_ext']) ? $datos['tel_ext'] : '', 1, 0);
    $pdf->Cell(20, 10, 'Contacto:', 1, 0, 'L');
    $pdf->Cell(70, 10, isset($datos['contacto']) ? $datos['contacto'] : '', 1, 1);


    // Ubicación del Equipo y Condiciones Ambientales
    $pdf->SetFillColor(251, 190, 143);
    $pdf->Cell(190, 10, utf8_decode('UBICACIÓN DEL EQUIPO Y CONDICIONES AMBIENTALES'), 1, 1, 'C', true);


    // Primera fila
    $pdf->Cell(20, 10, 'UDN:', 1, 0, 'L');
    $pdf->Cell(60, 10, isset($datos['udn']) ? $datos['udn'] : '', 1, 0);
    $pdf->Cell(30, 10, 'Responsables UDN:', 1, 0, 'L');
    $pdf->Cell(80, 10, isset($datos['responsables_udn']) ? $datos['responsables_udn'] : '', 1, 1);

    // Segunda fila
    $pdf->Cell(20, 10, 'Temperatura:', 1, 0, 'L');
    $pdf->Cell(60, 10, isset($datos['temperatura']) ? $datos['temperatura'] : '', 1, 0);
    $pdf->Cell(30, 10, utf8_decode('Ubicación del Equipo:'), 1, 0, 'L');
    $pdf->Cell(80, 10, isset($datos['ubicacion_equipo']) ? $datos['ubicacion_equipo'] : '', 1, 1);

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
        array('Marca:', '', 'V Nom Input (Vac)', '', '', '', ''),
        array('Modelo:', '', 'V Nom Output (Vac)', '', '', '', ''),
        array('Serie:', '', 'I Nom Input (Aac)', '', '', '', ''),
        array('Activo Fijo #', '', 'V Medio Entrada (Vac)', '', '', '', ''),
        array('Número de Fases', '', 'V Medio Salida (Vac)', '', '', '', ''),
        array('Capacidad en Va/KVA', '', 'Tipo de Baterias', '', '', '', ''),
        array('Cuenta con BYPASS (SI/NO)', '', 'Voltaje Baterías Vcd', '', '', '', ''),
        array('Tarjeta de Monitoreo', '', 'Cantidad de Baterias', '', '', '', ''),
        array('Ip Tarjeta de monitoreo', '', 'Fecha de Baterias', '', '', '', ''),
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
    $pdf->Cell(130, 10, utf8_decode('INFORMACIÓN DEL EQUIPO / BANCO DE BATERÍAS (Si Aplica)'), 1, 0, 'C', true);
    $pdf->Cell(60, 10, 'Comentarios', 1, 1, 'C', true);

    // Tabla de información del banco de baterías
    $columnWidths = array(25, 40, 45, 20, 60);
    $pdf->Cell($columnWidths[0], 10, 'Marca', 1, 0, 'C');
    $pdf->Cell($columnWidths[1], 10, '', 1, 0, 'C');
    $pdf->Cell($columnWidths[2], 10, utf8_decode('Número de Baterías'), 1, 0, 'C');
    $pdf->Cell($columnWidths[3], 10, '', 1, 0, 'C');
    $pdf->Cell($columnWidths[4], 10, '', 1, 1, 'C');

    $filas = array(
        array('Modelo', '', 'I Output (A)', '', ''),
        array('Serie', '', utf8_decode('Fecha de Instalación de Baterías'), '', ''),
        array('Activo Fijo #', '', utf8_decode('Equipo con Garantía (Si/No)'), '', ''),
        array('Capacidad en AH', '', utf8_decode('Tipo de Baterías'), '', ''),
    );

    foreach ($filas as $fila) {
        $pdf->Cell($columnWidths[0], 10, $fila[0], 1, 0, 'C');
        $pdf->Cell($columnWidths[1], 10, $fila[1], 1, 0, 'C');
        $pdf->Cell($columnWidths[2], 10, $fila[2], 1, 0, 'C');
        $pdf->Cell($columnWidths[3], 10, $fila[3], 1, 0, 'C');
        $pdf->Cell($columnWidths[4], 10, $fila[4], 1, 1, 'C');
    }

    // Listado para revisión (CHECK LIST)
    $pdf->SetFillColor(152, 205, 255);
    $pdf->Cell(80, 8, utf8_decode('LISTADO PARA REVISIÓN (CHECK LIST) (MARCAR CON UNA X)'), 1, 0, 'C', true);

    $columnWidths = array(80, 20, 20, 20, 50);

    // Encabezados de columna
    $pdf->Cell($columnWidths[1], 8, 'Normal', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[2], 8, 'Regular', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[3], 8, 'Mal Estado', 1, 0, 'C', true);
    $pdf->Cell($columnWidths[4], 8, 'Observaciones', 1, 1, 'C', true);



    $filas = array(
        array(utf8_decode('Previo mantenimiento: Toma de Fotografías del Antes, Durante y Después del estado del UPS, incluyendo pantallas.'), '', '', '', ''),
        array(utf8_decode('Apagado y desconexión de la carga (Por parte del cliente), colocación del equipo en modo bypass de mantenimiento y desenergizado del equipo.'), '', '', '', ''),
        array(utf8_decode('Retiro de coberturas y revisión visual de componentes eléctricos y electrónicos.'), '', '', '', ''),
        array(utf8_decode('Limpieza general interna y externa del equipo.'), '', '', '', ''),
        array(utf8_decode('Revisión y limpieza de ventiladores y paneles.'), '', '', '', ''),
        array(utf8_decode('Revisión de los parámetros de medición y alarmas.'), '', '', '', ''),
        array(utf8_decode('Evaluación del registro del inversor y registro de alarmas.'), '', '', '', ''),
        array(utf8_decode('Revisión y ajuste de las condiciones de operación: Entrada y salida de voltaje. (Parámetros Eléctricos)'), '', '', '', ''),
        array(utf8_decode('Inspección visual externa, prueba de conexiones, alimentación del UPS, internas y externas.'), '', '', '', ''),
        array(utf8_decode('Inspección visual de todos los componentes electrónicos del UPS, tanto ópticos como acústicos.'), '', '', '', ''),
        array(utf8_decode('Limpieza del módulo de control y electrónica, mediante aspirado con aire comprimido.'), '', '', '', ''),
        array(utf8_decode('Actualizaciones del software de control. Prueba del software de control remoto del UPS, en caso de existir.'), '', '', '', ''),
        array(utf8_decode('Inspección de la ubicación y ambiente de trabajo de los equipos, temperatura, humedad, condensaciones, etc.'), '', '', '', ''),
        array(utf8_decode('Revisión de la estabilidad y estado de carga de la batería, incluyendo una prueba funcional mediante corte del suministro eléctrico (previo aviso a los usuarios). Comprobación del voltaje en cada una de las celdas del banco de baterías.'), '', '', '', ''),
        array(utf8_decode('Verificación y eliminación de sulfataciones.'), '', '', '', ''),
        array(utf8_decode('Revisión y apriete de terminales flojas.'), '', '', '', ''),
        array(utf8_decode('Engrasado en terminales de baterías, (cuando sea necesario).'), '', '', '', ''),
        array(utf8_decode('Verificación de voltaje en vacío.'), '', '', '', ''),
        array(utf8_decode('Verificación del voltaje de batería, aplicando descarga.'), '', '', '', ''),
        array(utf8_decode('Revisión del funcionamiento del Inversor.'), '', '', '', ''),
        array(utf8_decode('Revisión del funcionamiento del Rectificador.'), '', '', '', ''),
        array(utf8_decode('Generación de un reporte por escrito con las observaciones correspondientes.'), '', '', '', ''),
        array(utf8_decode('Final mantenimiento: Toma de Fotografías de la entrega del equipo posterior al Servicio de Mantenimiento.'), '', '', '', ''),
    );

    // Deshabilitar el salto de página automático
    $pdf->SetAutoPageBreak(false);

    foreach ($filas as $fila) {
        // Guardar la posición actual
        $x = $pdf->GetX();
        $y = $pdf->GetY();

        // Imprimir la celda MultiCell para la primera columna
        $pdf->MultiCell($columnWidths[0], 8, $fila[0], 1, 'L', false);

        // Calcular la altura de la MultiCell
        $height = $pdf->GetY() - $y;

        // Ajustar la posición vertical después de imprimir MultiCell
        $pdf->SetXY($x + $columnWidths[0], $y);

        // Imprimir las demás celdas en la misma fila
        for ($i = 1; $i < count($fila); $i++) {
            $pdf->Cell($columnWidths[$i], $height, $fila[$i], 1, 0, 'C');
        }

        // Saltar a la siguiente fila
        $pdf->Ln();
    }

    // Habilitar el salto de página automático
    $pdf->SetAutoPageBreak(true);

    // Comentarios Finales
    $pdf->SetFont('Arial', 'B', 7);$pdf->SetFillColor(152, 205, 255);
    $pdf->Cell(190, 10, utf8_decode('COMENTARIOS FINALES'), 1, 1, 'C', true);
    $pdf->Cell(190, 20, utf8_decode(''), 1, 1, 'C');

    // Notas Importantes
    $pdf->Cell(190, 10, utf8_decode('NOTAS IMPORTANTES'), 1, 1, 'C', true);
    $pdf->Cell(190, 20, utf8_decode(''), 1, 1, 'C');

    // Define los datos para tu tabla
    $datos = array(
        array('Ingeniero de Servicio:', utf8_decode('Recibió Servicio a satisfacción: IMA - TI:'), utf8_decode('Nombre área:')),
        array('', '', ''),
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