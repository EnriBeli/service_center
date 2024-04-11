<?php
if(isset($_POST['folio']) && !empty($_POST['folio'])) {
    $folio = $_POST['folio'];

    // Verificar si se recibieron ambas imágenes
    if(isset($_POST['firma_recibido']) && !empty($_POST['firma_recibido']) && isset($_POST['firma_tecnico']) && !empty($_POST['firma_tecnico'])) {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "kge";
        $uploadDir = "../upload/"; // Ruta donde guardar las imágenes

        // Conectar a la base de datos
        $conexion = new mysqli($host, $user, $password, $database);

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Obtener la información de la imagen de recibido
        $imagen_base64_recibido = $_POST['firma_recibido'];
        $imagen_recibido = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagen_base64_recibido));

        // Generar el nombre de la imagen de recibido
        $imagen_nombre_recibido = "firma_" . $folio . "_recibido.png";

        // Guardar la imagen de recibido en la carpeta de destino
        $ruta_imagen_recibido = $uploadDir . $imagen_nombre_recibido;
        if(file_put_contents($ruta_imagen_recibido, $imagen_recibido)) {
            // Obtener la información de la imagen del técnico
            $imagen_base64_tecnico = $_POST['firma_tecnico'];
            $imagen_tecnico = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagen_base64_tecnico));

            // Generar el nombre de la imagen del técnico
            $imagen_nombre_tecnico = "firma_" . $folio . "_tecnico.png";

            // Guardar la imagen del técnico en la carpeta de destino
            $ruta_imagen_tecnico = $uploadDir . $imagen_nombre_tecnico;
            if(file_put_contents($ruta_imagen_tecnico, $imagen_tecnico)) {
                // Verificar si el folio ya existe en la tabla
                $sql_check = "SELECT * FROM tbl_serviciosgenerales WHERE folio = ?";
                $stmt_check = $conexion->prepare($sql_check);
                $stmt_check->bind_param("i", $folio);
                $stmt_check->execute();
                $result = $stmt_check->get_result();

                if($result->num_rows > 0) {
                    // Si el folio ya existe, actualizar el registro con los nombres de las imágenes
                    $sql_update = "UPDATE tbl_serviciosgenerales SET firma = ?, firmaingtec = ? WHERE folio = ?";
                    $stmt_update = $conexion->prepare($sql_update);
                    $stmt_update->bind_param("ssi", $imagen_nombre_recibido, $imagen_nombre_tecnico, $folio);
                    if ($stmt_update->execute()) {
                        // Asignar los nuevos nombres de archivo a $firmaRecibido y $firmaTecnico
                        $firmaRecibido = $imagen_nombre_recibido;
                        $firmaTecnico = $imagen_nombre_tecnico;
                
                        echo "Datos actualizados correctamente.";
                        // Redirigir al usuario a la página index.php
                        header("Location: ../../views/users/index.php");
                        exit(); // Asegurar que el script se detenga después de la redirección
                    } else {
                        echo "Error al actualizar datos: " . $stmt_update->error;
                    }
                    $stmt_update->close();
                } else {
                    echo "Error: El folio no existe en la tabla.";
                }

                $stmt_check->close();
            } else {
                echo "Error al guardar la imagen del técnico en la carpeta de destino.";
            }
        } else {
            echo "Error al guardar la imagen de recibido en la carpeta de destino.";
        }

        // Cerrar la conexión
        $conexion->close();
    } else {
        echo "Error: No se recibieron ambas imágenes válidas.";
    }
} else {
    echo "Error: No se recibió un folio válido.";
}
?>
