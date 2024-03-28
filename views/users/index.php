<?php include "../../includes/php/header.php"; ?>
<?php include("../../includes/conexion/db.php"); ?>



<!DOCTYPE html>
<html lang="en">
<head>
   <title>Administradores</title>
   <meta charset="UTF-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body background="../Imagenes/gby.jpg" width="2500" weight="1000">

    <br>
    <h2 class="text-center">Servicios </h2>

    <div class="text-center">
        <p class="text-center fw-bold">Para ver la lista de servicios guardados, seleccione un servicio</p>
        <a href="../../views/servicios/acandicionadoresview.php" type="button" class="btn btn-outline-primary">ACONDICIONADORES DE VOLTAJE</a>
        <a href="../../views/servicios/equipoupsview.php" type="button" class="btn btn-outline-warning">EQUIPOS UPS</a>
        <a href="../../views/servicios/serviciointernoview.php" type="button" class="btn btn-outline-success">SERVICIOS GENERALES</a>
    </div>

    <br>
    <br>
    <br>
    <br>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php include "../../includes/php/footer.php"; ?>

</body>
</html>