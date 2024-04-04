<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>KGE-SOLUTIONS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../includes/css/style.css" rel="stylesheet">
</head>

<body>
<?php
        @session_start();
        if($_SESSION['existe'] != 'SI'){
            header('Location: ../../index.php');
            exit(0);
        }
    ?>

    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-info"><i class="fa "></i>SERVICE CENTER KGE</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="../../views/servicios/serviciointernoview.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Servicios</a>
                    <a href="../users/user.php" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Ver Usuarios</a>
                    <!-- <a href="../users/create_clientes.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Clientes</a> -->
                    <!--<a href="../../views/products/products.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Business</a>-->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Agregar Servicio</a> <!-- no tiene contenido -->
                        <div class="dropdown-menu bg-transparent border-0">
                            <!-- <a href="../servicios/acondicionadores.php" class="dropdown-item">Acondicionadores de Voltaje</a> -->
                            <a href="../servicios/firma.php" class="dropdown-item">firma</a>
                            <a href="../servicios/serviciointerno.php" class="dropdown-item">Servicios</a>
                        </div>
                    </div>
                   <!--  <a href="../../includes/php/exit.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Salir</a> no tiene contenido -->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
                 <!-- BARRA DE ACCESOS -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-info mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class=" d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        
                    </div>
                    <div  class="nav-item dropdown">
                        <a href="#"  class="nav-link dropdown-toggle fa fa-user-edit me-2" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex"><?php 
                                    $usuarioactual=$_SESSION ['tx_username']; echo $usuarioactual
                                ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <button onclick="logout()" class="dropdown-item">Log Out</button>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- FIN BARRA DE  ACCESO -->



          <!-- CODIGOS DE ACTIVOS FIJOS. -->
</body>

<script>
    // Función para realizar el logout
    function logout() {
        // Aquí puedes realizar cualquier acción necesaria antes de cerrar la sesión, como enviar una solicitud AJAX al servidor
        // Luego, redirige al usuario a la página de logout
        window.location.href = "../../includes/php/exit.php";
    }

    $(document).ready(function(){
        $('.dropdown-toggle').dropdown();
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>       