<?php include "../../includes/php/header.php"; ?>
<?php include("../../includes/conexion/db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Administradores</title>
   <meta charset="UTF-8">
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

</head>
<head>

</head>
<body background="../Imagenes/gby.jpg" width="2500" weight="1000">

<h2 class="text-center">Clientes</h2>

    <!---modal gregar--->
    <div>
        <!-- Button trigger modal -->
        <!--Inicia contenedor busqueda y botón agregar -->
                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-5">
                            <form class="d-flex" method="GET">
                                <input class="form-control me-2" type="serch" placeholder="Buscar usuario" name="serch">
                                <button class="btn btn-success bg-success" type="submit" name="enviar"><b>Buscar</b></button>
                            </form>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-info div-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Agregar nuevo
                           </button>
                        </div>
                    </div>
                </div>


        <!-- fin busqueda -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-6 bg-success p-2 text-dark bg-opacity-10">
                        <h3>Datos requeridos</h3>
                        <form action="insert_cliente.php" method="POST">
                            <label for="..">Nombre Completo:</label>
                            <input type="text" class="form-control mb-3" name="tbl_nombre" placeholder="Nombre" required="True">
                            <label for="..">Correo:</label>
                            <input type="text" class="form-control mb-3" name="tbl_correo" placeholder="Correo" required="True">
                            <label for="..">Telefono:</label>
                            <input type="text" class="form-control mb-3" name="tbl_telefono" placeholder="Telefono">
                            <label for="..">Marca Registrada:</label>
                            <input type="text" class="form-control mb-3" name="tbl_marcaregistrada" placeholder="Marca Registrada">
                            <label for="..">RFC:</label>
                            <input type="text" class="form-control mb-3" name="tbl_rfc" placeholder="RFC">
                            <label for="..">Estado:</label>
                            <input type="text" class="form-control mb-3" name="tbl_estado" placeholder="Estado">
                            <label for="..">Municipio:</label>
                            <input type="text" class="form-control mb-3" name="tbl_municipio" placeholder="Municipio">
                            <label for="..">Direccion:</label>
                            <input type="text" class="form-control mb-3" name="tbl_direccion" placeholder="Direccion">
                            <button type="submit" class="btn btn-info">Guardar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include("../../includes/conexion/db.php");
$where = "";

if (isset($_GET['enviar'])) {

   if (isset($_GET['serch'])) {
    $serch = $_GET['serch'];
       $where = "WHERE tbl_clientes.tbl_nombre LIKE '%$serch%' OR tbl_correo LIKE '%$serch%' OR tbl_telefono LIKE '%$serch%' OR tbl_marcaregistrada LIKE '%$serch%'";
   }
}
?>

<div class="container-fluid">
   <div class="row">
       <div class="col-12 p-2">
           <table class="table">
               <thead class="secondary">
                   <tr>
                       <th>Id</th>
                       <th class="text-center">Nombre</th>
                       <th class="text-center">Correo</th>
                       <th class="text-center">Telefono</th>
                       <th class="text-center">Marca Registrada</th>
                       <th class="text-center">RFC</th>
                       <th class="text-center">Estado</th>
                       <th class="text-center">Municipio</th>
                       <th class="text-center">Direccion</th>
                       <th></th>
                       <th></th>
                   </tr>
               </thead>

               <tbody class="table table-striped table-dark">
                   <?php
                   $con = mysqli_connect("localhost", "root", "", "kge");
                   $sql = "SELECT * FROM tbl_clientes $where";
                   $query = mysqli_query($con, $sql);
                   while ($row = mysqli_fetch_array($query)) {
                       ?>
                       <tr>
                           <th><?php echo $row['idtbl_clientes'] ?></th>
                           <th><?php echo $row['tbl_nombre'] ?></th>
                           <th><?php echo $row['tbl_correo'] ?></th>
                           <th><?php echo $row['tbl_telefono'] ?></th>
                           <th><?php echo $row['tbl_marcaregistrada'] ?></th>
                           <th><?php echo $row['tbl_rfc'] ?></th>
                           <th><?php echo $row['tbl_estado'] ?></th>
                           <th><?php echo $row['tbl_municipio'] ?></th>
                           <th><?php echo $row['tbl_direccion'] ?></th>
                           <th><a href="update.php?id=<?php echo $row['idtbl_clientes'] ?>" class="btn btn-success">Editar</a></th>
                           <th><a href="../../includes/php/delete_users.php?id=<?php echo $row['idtbl_clientes'] ?>&tabla=tbl_users" class="btn btn-danger">Eliminar Usuarios</a></th>
                       </tr>
                   <?php } ?>
               </tbody>
           </table>
       </div>
   </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<?php include "../../includes/php/footer.php"; ?>

</body>
</html>