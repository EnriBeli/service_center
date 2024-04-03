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
   <br>

    <h2 class="text-center">Servicios Agregados</h2>

    <br>

         <!--Inicia contenedor busqueda Equipos UPS -->

         <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <form class="d-flex" method="GET">
                        <input class="form-control me-2" type="serch" placeholder="Buscar usuario" name="serch">
                        <button class="btn btn-warning bg-warning" type="submit" name="enviar"><b>Buscar</b></button>
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
            $where = "WHERE tbl_serviciosgenerales.folio LIKE '%$serch%' OR fecha LIKE '%$serch%' OR cliente LIKE '%$serch%' OR contacto LIKE '%$serch%' OR tel_ext LIKE '%$serch%' OR email LIKE '%$serch%' OR responsables_udn LIKE '%$serch%'";
        }
        }
        ?>
        <!---Tabla acandiciondores de voltaje--->


        <!---Tabla acandiciondores de voltaje--->
        <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-2">
                <table class="table">
                    <thead class="secondary">

                        <tr>
                            <th class="text-center">Folio</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Contacto</th>
                            <th class="text-center">Tel_Ext</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Udn</th>
                            <th class="text-center">Responsable Udn</th>
                            <th class="text-center">Descargar PDF</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody class="table table-striped table-dark">
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "kge");
                        $sql = "SELECT * FROM tbl_serviciosgenerales $where";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <th><?php echo $row['folio'] ?></th>
                                <th><?php echo $row['fecha'] ?></th>
                                <th><?php echo $row['cliente'] ?></th>
                                <th><?php echo $row['contacto'] ?></th>
                                <th><?php echo $row['tel_ext'] ?></th>
                                <th><?php echo $row['email'] ?></th>
                                <th><?php echo $row['udn'] ?></th>
                                <th><?php echo $row['responsables_udn']?></th>
                                <!--- <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row['evidencia_durante1']); ?>" width="100" height="100" alt="Evidencia Durante 1"></td> -->
                                <th><a type="button" href="plantilla.php?folio=<?php echo $row['folio']; ?>" class="btn btn-warning">PDF</a></th>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <!--- FIN Tabla acandiciondores de voltaje--->


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php include "../../includes/php/footer.php"; ?>

</body>
</html>