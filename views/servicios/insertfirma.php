<?php
// Verificar si se recibió un folio válido
if(isset($_POST['folio']) && !empty($_POST['folio'])) {
    $folio = $_POST['folio'];

    // Verificar si se recibió una firma válida
    if(isset($_POST['firma']) && !empty($_POST['firma'])) {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "kge";

        // Conectar a la base de datos
        $conexion = new mysqli($host, $user, $password, $database);

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Obtener los datos de la firma del formulario
        $firma_base64 = $_POST['firma'];

        // Convertir la firma de base64 a una cadena binaria
        $firma_binaria = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $firma_base64));

        // Verificar si el folio ya existe en la tabla
        $sql_check = "SELECT * FROM tbl_serviciosgenerales WHERE folio = ?";
        $stmt_check = $conexion->prepare($sql_check);
        $stmt_check->bind_param("i", $folio);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if($result->num_rows > 0) {
            // Si el folio ya existe, actualizar el registro
            $sql_update = "UPDATE tbl_serviciosgenerales SET firma = ? WHERE folio = ?";
            $stmt_update = $conexion->prepare($sql_update);
            $stmt_update->bind_param("si", $firma_binaria, $folio);
            if ($stmt_update->execute()) {
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
        // Cerrar la conexión
        $conexion->close();
    } else {
        echo "Error: No se recibió una firma válida.";
    }
} else {
    echo "Error: No se recibió un folio válido.";
}
?>
