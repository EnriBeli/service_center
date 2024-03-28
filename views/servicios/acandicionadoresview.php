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


    <h2 class="text-center">Servicios Agregados</h2>

    <div class="text-center">
        <p class="text-center fw-bold">Para ver la lista de servicios guardados, seleccione un servicio</p>
        <a href="../../views/servicios/acandicionadoresview.php" type="button" class="btn btn-outline-primary">ACONDICIONADORES DE VOLTAJE</a>
        <a href="../../views/servicios/equipoupsview.php" type="button" class="btn btn-outline-warning">EQUIPOS UPS</a>
        <a href="../../views/servicios/serviciointernoview.php" type="button" class="btn btn-outline-success">SERVICIOS GENERALES</a>
    </div>
    <br>
        <!--Inicia contenedor busqueda -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <form class="d-flex" method="GET">
                        <p class="text-center fw-bold">ACONDICIONADORES DE VOLTAJE</p>
                        <input class="form-control me-2" type="serch" placeholder="Buscar usuario" name="serch">
                        <button class="btn btn-danger bg-donger" type="submit" name="enviar"><b>Buscar</b></button>
                    </form>
                </div>
            </div>
        </div>

        <!---search acandicionadores de boltaje--->
        <?php
        include("../../includes/conexion/db.php");
        $where = "";

        if (isset($_GET['enviar'])) {

        if (isset($_GET['serch'])) {
            $serch = $_GET['serch'];
            $where = "WHERE tbl_acondicionadores.folio LIKE '%$serch%' OR cliente LIKE '%$serch%' OR udn LIKE '%$serch%' OR fecha LIKE '%$serch%' OR modelo_equipo LIKE '%$serch%' OR n_s LIKE '%$serch%' OR fabricante LIKE '%$serch%'";
        }
        }
        ?>
        <!---Tabla acandiciondores de voltaje--->


        <!---Tabla acandiciondores de voltaje--->
        <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-2">
                <table class="table">
                    <thead class="info">

                        <tr>
                            <th class="text-center">Folio</th>
                            <th class="text-center">cliente</th>
                            <th class="text-center">UDN</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Modelo de Equipo</th>
                            <th class="text-center">N/S</th>
                            <th class="text-center">Fabricante</th>
                            <th class="text-center">Capacidad</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody class="table table-striped table-dark">
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "kge");
                        $sql = "SELECT * FROM tbl_acondicionadores $where";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <th><?php echo $row['folio'] ?></th>
                                <th><?php echo $row['cliente'] ?></th>
                                <th><?php echo $row['udn'] ?></th>
                                <th><?php echo $row['fecha'] ?></th>
                                <th><?php echo $row['modelo_equipo'] ?></th>
                                <th><?php echo $row['n_s'] ?></th>
                                <th><?php echo $row['fabricante'] ?></th>
                                <th><?php echo $row['capacidad']?></th>
                                <th><a href="" class="btn btn-primary">PDF</a></th>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <!--- FIN Tabla acandiciondores de voltaje--->



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include "../../includes/php/footer.php"; ?>

</body>
</html>